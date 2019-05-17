<?
class Random {
    const PARAMS_FILEPATH = 'templates/dengos/random/random.json';
    const BG_PATH = 'templates/dengos/img/universal';

    private $params;
    private $useSummFormat;
    private $buttonTextInUpperCase;

    private $lastBg;

    public function __construct ($useSummFormat = true, $buttonTextInUpperCase = true) {
        $this->useSummFormat = $useSummFormat;
        $this->buttonTextInUpperCase = $buttonTextInUpperCase;

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

    public function getPreferredColors() {
        $arr = array();
        $bw = array('white', 'black');
        if (in_array($bw, $this->lastBg->color))
            $arr = array_diff($bw, $this->lastBg->color);
        else $arr = array_diff($this->params->availablecolors, $this->lastBg->color, $bw, array('gray'));

        $r = rand(0, count($arr) - 1);
        $r2 = $r;
        while ($r2 == $r) $r2 = rand(0, count($arr) - 1);

        //restore indexes
        $arr_fixed = array();
        foreach ($arr as $key => $val) $arr_fixed[] = $val;

        return array($this->getHexByColor($arr_fixed[$r]), $this->getHexByColor($arr_fixed[$r2]));
    }

    public function getBackground ($use_bg_path = false) {
        $arr = array();
        for ($i = 0; $i < count($this->params->background); $i++) {
            if (!isset($this->params->background[$i]->inuse)) continue;
            if ($this->params->background[$i]->inuse == 1) $arr[] = $i;
        }
        $num = count($arr);
        $r = rand(0, $num - 1);

        $this->lastBg = $this->params->background[$arr[$r]];

        return (($use_bg_path)? self::BG_PATH . '/': '') . $this->params->background[$arr[$r]]->style->background;
    }

    private function getSumm() {
        $num = count($this->params->summ);
        $r = rand(0, $num - 1);
        return $this->params->summ[$r];
    }

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

    public function printAnimatedText ($count = 5) {
        $arr = $this->getAnimatedTextRaw ($count);
        $out = '';

        for ($i = 0; $i < count($arr); $i++)
            $out .= 'data-text' . ($i + 1) . '="' . $arr[$i] . '" ';
        
        return $out;
    }

    public function getButtonText() {
        $r = rand(0, count($this->params->button->text) - 1);
        return ($this->buttonTextInUpperCase)? mb_strtoupper($this->params->button->text[$r], 'utf8'): $this->params->button->text[$r];
    }

    public function getButtonStyle() {
    }
}
?>