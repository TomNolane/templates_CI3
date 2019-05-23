<?
class Random {
    const PARAMS_FILEPATH = 'templates/dengos/random/random.json';
    const BG_PATH = 'templates/dengos/img/universal';
    const RNDENTITY = 'templates/dengos/random/img';

    private $params;
    private $useSummFormat;
    private $buttonTextInUpperCase;
    private $usePath;

    private $lastBgColors;

    private $gradienDirectionsStart = array('left', 'top', '-45deg', '45deg');
    private $gradienDirectionsEnd = array('to right', 'to bottom', '135deg', '45deg');

    public function __construct ($useSummFormat = true, $buttonTextInUpperCase = true, $usePath = true) {
        $this->useSummFormat = $useSummFormat;
        $this->buttonTextInUpperCase = $buttonTextInUpperCase;
        $this->usePath = $usePath;

        $this->loadParams();
    }

    private function loadParams() {
        $str = file_get_contents(self::PARAMS_FILEPATH);
        $this->params = json_decode($str);
    }

    private function getHexByColor ($color) {
        for ($i = 0; $i < count($this->params->hexesforcolors); $i++) {
            if ($color == $this->params->hexesforcolors[$i]->color)
                return $this->params->hexesforcolors[$i]->hex;
        }

        $default = 'yellow';
        for ($i = 0; $i < count($this->params->hexesforcolors); $i++) {
            if ($default == $this->params->hexesforcolors[$i]->color)
                return $this->params->hexesforcolors[$i]->hex;
        }
    }

    /**
     * получаем два случайных цвета, которые не пересекаются с цветами бекграунда
     */
    public function getPreferredColors() {
        $arr = array();
        $bw = array('white', 'black');
        if (in_array($bw, $this->lastBgColors))
            $arr = array_diff($bw, $this->lastBgColors);
        else $arr = array_diff($this->params->availablecolors, $this->lastBgColors, $bw, array('gray'));

        $r = rand(0, count($arr) - 1);
        $r2 = $r;
        while ($r2 == $r) $r2 = rand(0, count($arr) - 1);

        //restore indexes
        $arr_fixed = array();
        foreach ($arr as $key => $val) $arr_fixed[] = $val;

        return array($this->getHexByColor($arr_fixed[$r]), $this->getHexByColor($arr_fixed[$r2]));
    }

    /**
     * получить случайный бекграунд
     */
    public function getBackground() {
        $arr = array();
        for ($i = 0; $i < count($this->params->background); $i++) {
            if (!isset($this->params->background[$i]->inuse)) continue;
            if ($this->params->background[$i]->inuse == 1) $arr[] = $i;
        }
        $num = count($arr);
        $r = rand(0, $num - 1);

        $this->lastBgColors = $this->params->background[$arr[$r]]->color;

        return (($this->usePath)? ((isset($this->params->background[$arr[$r]]->rndentity))? self::RNDENTITY: self::BG_PATH) . '/': '') . $this->params->background[$arr[$r]]->style->background;
    }

    /**
     * получить стиль случайного градиента без цветов, переданных в функцию
     */
    public function getGradientBackground ($exclude_colors = array()) {
        $r = null;
        while ($r === null) {
            $r = $this->params->gradients[rand(0, count($this->params->gradients) - 1)];
            if (in_array($r->color, $exclude_colors))
                $r = null;
        }
        $r2 = $r;
        while ($r2->hex == $r->hex) {
            $r2 = $this->params->gradients[rand(0, count($this->params->gradients) - 1)];
            if (in_array($r2->color, $exclude_colors))
                $r2 = $r;
        }
        $r1h = $r->hex;
        $r2h = $r2->hex;

        $this->lastBgColors = array($r->color, $r2->color);

        $direction = rand(0, count($this->gradienDirectionsStart) - 1);
        $dstart = $this->gradienDirectionsStart[$direction];
        $dend = $this->gradienDirectionsEnd[$direction];

        $out = "
        background: $r1h;
        background: -moz-linear-gradient($dstart, $r1h 0%, $r2h 100%);
        background: -webkit-linear-gradient($dstart, $r1h 0%,$r2h 100%);
        background: linear-gradient($dend, $r1h 0%,$r2h 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='$r1h', endColorstr='$r2h',GradientType=0 );";

        return $out;
    }
    //TODO: зафигачить принт класса, дабы не инлайн. Хотя, в шаблоне все инлайн...

    /**
     * получить случайную сумму
     */
    private function getSumm() {
        $num = count($this->params->summ);
        $r = rand(0, $num - 1);
        return $this->params->summ[$r];
    }

    /**
     * получить случайный текст
     */
    public function getText() {
        $summ = $this->getSumm();
        if ($this->useSummFormat) $summ = number_format($summ, 0, '', ' ');

        $arr = array();

        for ($i = 0; $i < count($this->params->text->values); $i++) {
            if (!isset($this->params->text->values[$i]->inuse)) continue;
            if ($this->params->text->values[$i]->inuse == 1) $arr[] = $i;
        }
        $num = count($arr);
        $r = rand(0, $num - 1);
        $txt = $this->params->text->values[$arr[$r]];
        $symbols = (isset($txt->summ_symbol))? $txt->summ_symbol: $this->params->text->summ_symbol;

        return str_replace($symbols, $summ, $txt->text);
    }

    /**
     * получить случайное количество слов для анимированного текста
     */
    public function getAnimatedTextRaw ($count = 5) {
        $arr = array();
        if (count($this->params->animatedtext) < $count)
            $count = count($this->params->animatedtext);
        
        while (count($arr) != $count) {
            while (true) {
                $txt = $this->params->animatedtext[rand(0, $count - 1)];
                if (!in_array($txt, $arr)) {
                    $arr[] = $txt;
                    break;
                }
            }
        }

        return $arr;
    }

    /**
     * хелпер для анимированного текста
     */
    public function printAnimatedText ($count = 5) {
        $arr = $this->getAnimatedTextRaw ($count);
        $out = '';

        for ($i = 0; $i < count($arr); $i++)
            $out .= 'data-text' . ($i + 1) . '="' . $arr[$i] . '" ';
        
        return $out;
    }

    /**
     * случайный текст на кнопку
     */
    public function getButtonText() {
        $r = rand(0, count($this->params->button->text) - 1);
        return ($this->buttonTextInUpperCase)? mb_strtoupper($this->params->button->text[$r], 'utf8'): $this->params->button->text[$r];
    }
}
?>