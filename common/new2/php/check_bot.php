<?php
require_once realpath(__DIR__ . '/..').'/php/data.php';
require_once realpath(__DIR__ . '/..').'/php/Mobile_Detect.php';

function BewteenBinarySearch($element, $data, $data2)
{
    if(!isset($element) || empty($element)) return 'NONE4'; // если не передали IP |  if IP is empty
    $begin = round((count($data) -1 )/ 2); 
    $temp = explode(".", $element);
    
    if(isset($temp[0]) && isset($temp[1]) && isset($temp[2]) && isset($temp[3]))
        $element =  $temp[0]*256*256*256 + $temp[1]*256*256 + $temp[2]*256 + $temp[3]; //преобразует значение IP в long | convert IP to long
    else
        $element = 2071690107;
    
    $temp = 1; $temp2 = 0;
    $prev_begin = 0; //для выявления рекурсии | for exit to recursion
    while (true) 
    { 
        $temp2++;
        if (isset($data[$begin]))
        {  
                if($data[$begin] > $element)
                {
                    if($begin <= 0)
                        return 'NONE1'; //если ИСКОМОЕ меньше наименьшего значения в Массиве "ОТ" | if $ELEMENT less then minimum of array $DATA
                    else
                    {
                        $begin = $begin - round(($begin / (2 * $temp)));
                        if($begin == $prev_begin && $begin == 1) $begin = 0;
                        else if($begin == $prev_begin) return 'NONE6'; // выход из рекурсии | for exit to recursion
                        $temp++;
                    }
                }
                else
                { 
                    if($data[$begin] <= $element && $data2[$begin] >= $element)
                        return  "RU"; // если ИСКОМОЕ лежит в диапазоне между массивом $data и $data2 | if $ELEMENT between array $DATA and array $DATA2
                    else if($data[$begin] <= $element && $data2[$begin] <= $element && $begin <= count($data) -1)
                    {
                        $begin = $begin + round(($begin / (2 * $temp)));
                        if($begin == $prev_begin) {  return 'NONE7'; } // выход из рекурсии | for exit to recursion
                        else if($begin > count($data2) -1)
                        {
                            return 'NONE8'; //если ИСКОМОЕ больше наибольшего значения в Массиве "ДО" | if $ELEMENT great then maximum of array $DATA2
                        }
                        $temp++;
                    }
                }
            $prev_begin = $begin;
        } else return 'NONE9';
    } 
}

$this->load->library('user_agent');

$detect = new \Mobile_Detect; 

$a = strtolower($this->agent->agent);

$is_bot = 0;

// проверка по useragent на бота
if(preg_match('/robot|bot|Bot|BOT|Nutch|WebCopier|WebStripper|Teleport|Offline|SiteSnagger|EmailSiphon|EmailCollector|larbin|Crawler|moget|facebookexternalhit|facebot|ia_archiver|Google-Adwords-DisplayAds|Go-http-client|Riddle|socketcrawler|NetcraftSurveyAgent|yahoo|mail|antivirus|fetcher|mail.ru_bot|crawl|slurp|mediapartners|majesticsEO|facebook|pingdom|get|java|find|radioclicker|dataprovider|spider|crawler|curl|Console|Google-Site-Verification|^$/i', $a)) $is_bot = 1;
if ($detect->isBot() || $detect->isSpider()) $is_bot = 1;

// проверка по GET параметрам на бота
$query = '';

if($this->input->get())
    $query = http_build_query($this->input->get());
else 
    $is_bot = 1;

if( strpos(urldecode($query), '{campaign_id}') !== false || strpos(urldecode($query), '{keyword}') !== false || strpos(urldecode($query), '{SRC}') !== false || strpos(urldecode($query), '{PHRASE}') !== false  || strpos(urldecode($query), '{campaignid}') !== false || strpos($query, '%7D') !== false || strpos($query, '%7B') !== false || strpos($query, '{{campaign.id}}') !== false || strpos($query, '{{placement}}') !== false || strpos($query, '{{site_source_name}}') !== false)
$is_bot = 1;

$ip = $this->input->ip_address();

$country = BewteenBinarySearch($ip,$data,$data2); 

if($country != 'RU')
{
    try {
        // $a = json_decode(file_get_contents('http://ip-api.com/json/'.$ip), true); 

        // if($a['status'] != 'fail')
        //     $country = $a['countryCode'];
        $country = 'NONE';

    } catch (\Exception $e) {
        $country = 'NONE';
    }
    
    if($country != 'RU')
        $is_bot = 1;
}

$is_mobile = 'декстоп';
if($detect->isMobile()) $is_mobile = 'мобила';
else if($detect->isTablet()) $is_mobile = 'планшет';

if(session_id() == '') {
    session_start();
} 

$uri = md5($_SERVER['REQUEST_URI']);
$exp = 3600; // 3 seconds
$hash = $uri .'|'. time();
if (!isset($_SESSION['ddos'])) {
    $_SESSION['ddos'] = $hash;
}

if(!isset($_SESSION['views']))
    $_SESSION['views'] = 0;

list($_uri, $_exp) = explode('|', $_SESSION['ddos']);
if ($_uri == $uri && time() - $_exp < $exp) {
    // header('HTTP/1.1 503 Service Unavailable'); 
    // die;
    $_SESSION['views'] += 1;
    
    if($_SESSION['views'] == 3)
        $is_bot = 1;
}

// Save last request
$_SESSION['ddos'] = $hash;

$_gets = '';
if($this->input->get())
{
    $_gets = str_replace(";", "", '?'.http_build_query($this->input->get()));
    $_gets = str_replace("+", "", $_gets);
}

$setting_array = array (
    'is_bot' => ($is_bot == 1) ? 'бот' : 'нет',
    'country' => $country,
    'is_mobile' => $is_mobile,
    'views3600sec' => $_SESSION['views'],
    'site' => getDomain($_gets)
);

function getDomain($_gets)
{
    $CI =& get_instance();
    
    return preg_replace("/^[\w]{2,6}:\/\/([\w\d\.\-]+).*$/","$1", $CI->config->slash_item('base_url')).$_gets;
}

// function httpPost($data)
// {
//     $curl = curl_init('https://zaimhome.ru/news8');
//     curl_setopt($curl, CURLOPT_POST, true);
//     curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
//     curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//     $response = curl_exec($curl);
//     curl_close($curl); 
//     return $response;
// }

// httpPost($setting_array);