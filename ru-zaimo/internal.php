<?php
if ($this->uri->segment(1) == 'robots.txt'){
    header("Content-type: text/plain");
    require 'internal-robots.txt.php';
} else {
    $my_title = ''; $description = ''; $universal_folder = 0; $price = "30 000"; $prefix = '?aff_sub1=#name#&aff_sub=#name#&source=#name#&s1=#name#&subid=#name#&sub1=#name#'; $prefix2 = '&aff_sub1=#name#&aff_sub=#name#&source=#name#&s1=#name#&subid=#name#&sub1=#name#';
    switch($this->uri->segment(1)){
        case 'bg':
        case 'be':
        case 'bp':
        case 'bigzaimn':
            $main = 'bigzaim';
            $link = 'https://pxl.leads.su/click/3b00787cbb4b9484e25cbe512163ca7d'.$prefix;
            $my_title = 'Bigzaim Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Bigzaim осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'bigzaimk':
            $main = 'bigzaim';
            $link = 'https://pxl.leads.su/click/1dcd7846095f39475f0edbc36996655d'.$prefix;
            $my_title = 'Bigzaim Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Bigzaim осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'bigzaimq':
            $main = 'bigzaim';
            $link = 'https://pxl.leads.su/click/3c63b34389d247ca1a77f81789376d34'.$prefix;
            $my_title = 'Bigzaim Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Bigzaim осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'bigzaimg':
            $main = 'bigzaim';
            $link = 'https://pxl.leads.su/click/092a49a215db8f07d9ae95b69715cc9d'.$prefix;
            $my_title = 'Bigzaim Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Bigzaim осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'bigzaimw':
            $main = 'bigzaim';
            $link = 'https://pxl.leads.su/click/d88ea0fe9a760b489423ecce8ecaaf29'.$prefix;
            $my_title = 'Bigzaim Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Bigzaim осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'yy':
        case 'yp':
        case 'ye':
        case 'ypetrovichak':
            $main = 'ypetrovicha';
            $link = 'https://gl.guruleads.ru/click/40/113'.$prefix;
            $my_title = 'Ypetrovicha Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Ypetrovicha осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'ypetrovichan':
            $main = 'ypetrovicha';
            $link = 'https://gl.guruleads.ru/click/40/113'.$prefix;
            $my_title = 'Ypetrovicha Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Ypetrovicha осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'ypetrovichag':
        case 'ypetrovichaw':
            $main = 'ypetrovicha';
            $link = 'https://gl.guruleads.ru/click/40/113'.$prefix;
            $my_title = 'Ypetrovicha Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Ypetrovicha осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'ypetrovichaq':
            $main = 'ypetrovicha';
            $link = 'https://gl.guruleads.ru/click/1485/113'.$prefix;
            $my_title = 'Ypetrovicha Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Ypetrovicha осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'wb':
        case 'wp':
        case 'we':
        case 'webbankirn':
            $main = 'webbankir';
            $link = 'http://leadpump.ru/api/webmaster?hash=2c4bb2d4d8f10a0a4d99348aff3722e6&type=49'.$prefix2;
            $my_title = 'Webbankir Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Webbankir осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'webbankirk':
        case 'webbankirq':
        case 'webbankirg':
        case 'webbankirw':
            $main = 'webbankir';
            $link = 'http://leadpump.ru/api/webmaster?hash=2c4bb2d4d8f10a0a4d99348aff3722e6&type=49'.$prefix2;
            $my_title = 'Webbankir Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Webbankir осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'gf':
        case 'gp':
        case 'ge':
        case 'gutfinn':
        case 'gutfink':
        case 'gutfing':
        case 'gutfinw':
            $main = 'gutfin';
            $link = 'https://g24.me/03gt0pgql7s9c7r'.$prefix;
            $my_title = 'Gutfin Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Gutfin осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'gutfinq':
            $main = 'gutfin';
            $link = 'https://g24.me/03k7u30w4xhi8dt'.$prefix;
            $my_title = 'Gutfin Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Gutfin осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'pc':
        case 'pp':
        case 'pe':
        case 'planetacashn':
        case 'planetacashk':
        case 'planetacashq':
        case 'planetacashg':
        case 'planetacashw':
            $main = 'planetacash';
            $link = 'https://pxl.leads.su/click/05f1d4ab6349209f4a126a8d4bbdc915'.$prefix;
            $my_title = 'Planetacash Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Planetacash осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'zm':
        case 'zp':
        case 'ze':
        case 'zaymern':
            $main = 'zaymer';
            $link = 'https://pxl.leads.su/click/762f05fbbdde479f81315e58b8557785'.$prefix;
            $my_title = 'Zaymer Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Zaymer осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'zaymerk':
            $main = 'zaymer';
            $link = 'https://pxl.leads.su/click/3cc27f387cfdddcaa0f6be18b6be9994'.$prefix;
            $my_title = 'Zaymer Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Zaymer осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'zaymerq':
            $main = 'zaymer';
            $link = 'https://pxl.leads.su/click/928cbe3351c8eebb06857d2c1d0bd135'.$prefix;
            $my_title = 'Zaymer Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Zaymer осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'zaymerg':
            $main = 'zaymer';
            $link = 'https://pxl.leads.su/click/1b44e5d8588b1d0e78323145d7c5cc9a'.$prefix;
            $my_title = 'Zaymer Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Zaymer осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'zaymerw':
            $main = 'zaymer';
            $link = 'https://pxl.leads.su/click/933e8d7d0ad23aa2be23ecd71236c744'.$prefix;
            $my_title = 'Zaymer Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Zaymer осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'dz':
        case 'dp':
        case 'de':
        case 'deltazaimn':
            $main = 'deltazaim';
            $link = 'https://pxl.leads.su/click/35111e7a4a177b5f2920efa3b692e592'.$prefix;
            $my_title = 'Deltazaim Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Deltazaim осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'deltazaimk':
            $main = 'deltazaim';
            $link = 'https://pxl.leads.su/click/d8cf8f73b76fdeca2e79513ef4070138'.$prefix;
            $my_title = 'Deltazaim Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Deltazaim осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'deltazaimq':
            $main = 'deltazaim';
            $link = 'https://pxl.leads.su/click/1070e43bb0fc0dcedaef660e93dbcf80'.$prefix;
            $my_title = 'Deltazaim Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Deltazaim осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'deltazaimg':
            $main = 'deltazaim';
            $link = 'https://pxl.leads.su/click/ba8a432a8ee6400171ed40806c5b9044'.$prefix;
            $my_title = 'Deltazaim Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Deltazaim осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'deltazaimw':
            $main = 'deltazaim';
            $link = 'https://pxl.leads.su/click/1599c5579d4edb0574975e235cb5d858'.$prefix;
            $my_title = 'Deltazaim Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Deltazaim осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'hz':
        case 'hp':
        case 'he':
        case 'hot-zaimn':
            $main = 'hot-zaim';
            $link = 'https://gl.guruleads.ru/click/40/86'.$prefix;
            $my_title = 'Hot-zaim Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Hot-zaim осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'hot-zaimk':
            $main = 'hot-zaim';
            $link = 'https://gl.guruleads.ru/click/40/86'.$prefix;
            $my_title = 'Hot-zaim Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Hot-zaim осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'hot-zaimq':
            $main = 'hot-zaim';
            $link = 'https://gl.guruleads.ru/click/1485/86'.$prefix;
            $my_title = 'Hot-zaim Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Hot-zaim осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'hot-zaimg':
            $main = 'hot-zaim';
            $link = 'https://gl.guruleads.ru/click/40/86'.$prefix;
            $my_title = 'Hot-zaim Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Hot-zaim осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'hot-zaimw':
            $main = 'hot-zaim';
            $link = 'https://gl.guruleads.ru/click/40/86'.$prefix;
            $my_title = 'Hot-zaim Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Hot-zaim осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'ek':
        case 'ep':
        case 'ee':
        case 'ekapustan':
             $main = 'ekapusta';
            $link = 'https://pxl.leads.su/click/a2996c83b6e10369b402eda7371072ab'.$prefix;
            $my_title = 'Ekapusta Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Ekapusta осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'ekapustak':
            $main = 'ekapusta';
            $link = 'https://pxl.leads.su/click/4e45ee5d8e0f7fef83177f0eb1ac85be?source=SMS_WK'.$prefix2;
            $my_title = 'Ekapusta Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Ekapusta осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'ekapustaq':
            $main = 'ekapusta';
            $link = 'https://pxl.leads.su/click/2859047369ca0cbcd70b3c777e76f8fb?source=SMS_WQ'.$prefix2;
            $my_title = 'Ekapusta Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Ekapusta осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'ekapustag':
            $main = 'ekapusta';
            $link = 'https://pxl.leads.su/click/7a3b64c066efff4ca6502aed70c730b2?source=SMS_WG'.$prefix2;
            $my_title = 'Ekapusta Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Ekapusta осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'ekapustaw':
            $main = 'ekapusta';
            $link = 'https://pxl.leads.su/click/5a5296b852168677db653889c54d97b7?source=SMS_WW_0'.$prefix2;
            $my_title = 'Ekapusta Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Ekapusta осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'cr':
        case 'cp':
        case 'ce':
        case 'credilon':
        case 'credilok':
        case 'crediloq':
        case 'credilog':
        case 'credilow':
            $main = 'credilo';
            $link = 'https://track.leadbrothers.co/sensor/5c078cad8a5da50a2a7bfa2e'.$prefix;
            $my_title = 'Credilo Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Credilo осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'mz':
        case 'mp':
        case 'me':
        case 'mazillan':
        case 'mazillak':
        case 'mazillaq':
        case 'mazillag':
        case 'mazillaw':
            $main = 'mazilla';
            $link = 'https://track.leadbrothers.co/sensor/5c0102518a5da53463d56f5f'.$prefix;
            $my_title = 'Mazilla Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Mazilla осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'oz':
        case 'op':
        case 'oe':
        case 'optimazaimn':
        case 'optimazaimk':
        case 'optimazaimg':
        case 'optimazaimw':
            $main = 'optimazaim';
            $link = 'https://g24.me/03gt0pgql7v8i8r'.$prefix;
            $my_title = 'Optimazaim Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Optimazaim осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'optimazaimq':
            $main = 'optimazaim';
            $link = 'https://g24.me/03k7u30w54z7lf9'.$prefix;
            $my_title = 'Optimazaim Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Optimazaim осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'moneykitek':
        case 'moneykiteg':
        case 'moneykitew':
            $main = 'moneykite';
            $link = 'https://gl.guruleads.ru/click/40/112'.$prefix;
            $my_title = 'Moneykite Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Moneykite осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'moneykiteq':
            $main = 'moneykite';
            $link = 'https://gl.guruleads.ru/click/1485/112'.$prefix;
            $my_title = 'Moneykite Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Moneykite осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'moneykiten':
            $main = 'moneykite';
            $link = 'https://gl.guruleads.ru/click/40/112'.$prefix;
            $my_title = 'Moneykite Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Moneykite осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'ezaimon':
        case 'ezaimok':
        case 'ezaimog':
        case 'ezaimow':
            $main = 'ezaimo';
            $link = 'https://g24.me/03gt0pgql6rxwcs'.$prefix;
            $my_title = 'Ezaimo Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Ezaimo осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'ezaimoq':
            $main = 'ezaimo';
            $link = 'https://g24.me/03k7u30w2gd19eu'.$prefix;
            $my_title = 'Ezaimo Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Ezaimo осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'visamen':
        case 'visamek':
        case 'visameq':
        case 'visameg':
        case 'visamew':
            $main = 'visame';
            $link = 'https://track.leadbrothers.co/sensor/5c0103af8a5da53463d56f61'.$prefix;
            $my_title = 'Visame Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Visame осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'getzaimn':
        case 'getzaimk':
        case 'getzaimg':
        case 'getzaimw':
            $main = 'getzaim';
            $link = 'https://g24.me/03gt0pgql7u1n15'.$prefix;
            $my_title = 'Getzaim Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Getzaim осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'getzaimq':
            $main = 'getzaim';
            $link = 'https://g24.me/03k7u30w518nmpf'.$prefix;
            $my_title = 'Getzaim Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Getzaim осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'zanimalon':
        case 'zanimalok':
        case 'zanimalog':
        case 'zanimalow':
            $main = 'zanimalo';
            $link = 'https://g24.me/03gt0pgql7surtk'.$prefix;
            $my_title = 'Zanimalo Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Zanimalo осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'zanimaloq':
            $main = 'zanimalo';
            $link = 'https://g24.me/03k7u30w4zddnci'.$prefix;
            $my_title = 'Zanimalo Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Zanimalo осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'zaim365nl':
            $main = 'zaim365';
            $link = 'pxl.leads.su/click/8f7e7338fc658022ed94aea3677180b6'.$prefix;
            $my_title = 'Zaim365 Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Zaim365 осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'zaim365n':
        case 'zaim365k':
        case 'zaim365g':
        case 'zaim365w':
            $main = 'zaim365';
            $link = 'https://g24.me/03gt0pgql6dnhtl'.$prefix;
            $my_title = 'Zaim365 Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Zaim365 осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'zaim365q':
            $main = 'zaim365';
            $link = 'https://g24.me/03k7u30w1d5ei36'.$prefix;
            $my_title = 'Zaim365 Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Zaim365 осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        
        case 'checkmoneyn':
        case 'checkmoneyk':
        case 'checkmoneyq':
        case 'checkmoneyg':
        case 'checkmoneyw':
            $main = 'checkmoney';
            $link = 'https://gl.guruleads.ru/click/40/67'.$prefix;
            $my_title = 'Checkmoney Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Checkmoney осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'mkcreditn':
            $main = 'mkcredit';
            $link = 'https://pxl.leads.su/click/2e6219ec8de0e75e57d5d0e119648e25'.$prefix;
            $my_title = 'Mkcredit Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Mkcredit осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'mkcreditk':
            $main = 'mkcredit';
            $link = 'https://pxl.leads.su/click/cf91d7719eac242542378f3936962562'.$prefix;
            $my_title = 'Mkcredit Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Mkcredit осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'mkcreditq':
            $main = 'mkcredit';
            $link = 'https://pxl.leads.su/click/cf70c0b87a67a79b570b5c52c96caa85'.$prefix;
            $my_title = 'Mkcredit Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Mkcredit осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'mkcreditg':
            $main = 'mkcredit';
            $link = 'https://pxl.leads.su/click/d7b45efdf10bf17d90d59936b845a377'.$prefix;
            $my_title = 'Mkcredit Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Mkcredit осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'mkcreditw':
            $main = 'mkcredit';
            $link = 'https://pxl.leads.su/click/1e62d1ba172abeca5d63308a85e358ae'.$prefix;
            $my_title = 'Mkcredit Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Mkcredit осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'moneymann':
            $main = 'moneyman';
            $link = 'https://pxl.leads.su/click/2573c52bc61d0534e8be8c6c6529855c'.$prefix;
            $my_title = 'Moneyman Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Moneyman осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'moneymank':
            $main = 'moneyman';
            $link = 'https://pxl.leads.su/click/137f3147b8f43cff18ce63317c3b186c'.$prefix;
            $my_title = 'Moneyman Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Moneyman осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'moneymanq':
            $main = 'moneyman';
            $link = 'https://pxl.leads.su/click/13948a3af88ba975b6123ea497ee7ef0'.$prefix;
            $my_title = 'Moneyman Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Moneyman осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'moneymang':
            $main = 'moneyman';
            $link = 'https://pxl.leads.su/click/2573c52bc61d0534e8be8c6c6529855c'.$prefix;
            $my_title = 'Moneyman Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Moneyman осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'moneymanw':
            $main = 'moneyman';
            $link = 'https://pxl.leads.su/click/6c8aa56d4c27a8b6b8333e3d84a7a8e4'.$prefix;
            $my_title = 'Moneyman Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Moneyman осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
		case 'manimon':
        case 'manimok':
        case 'manimoq':
        case 'manimog':
        case 'manimow':
            $main = 'manimo';
            $link = 'https://pxl.leads.su/click/92d7e35a7edfbfdcbf13965f3596ee77'.$prefix;
            $my_title = 'Manimo Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Manimo осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'onezaimn':
        case 'onezaimk':
        case 'onezaimq':
        case 'onezaimg':
        case 'onezaimw':
            $main = 'onezaim';
            $link = 'https://pxl.leads.su/click/c9e85098ef0c8dc8b3a405211923af11'.$prefix;
            $my_title = 'Onezaim Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Onezaim осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'myzaimn':
        case 'myzaimk':
        case 'myzaimq':
        case 'myzaimg':
        case 'myzaimw':
            $main = 'myzaim';
            $link = 'https://pxl.leads.su/click/d24e094b20338447317e8d9526a25e53'.$prefix;
            $my_title = 'Myzaim Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Myzaim осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'limezaimn':
        case 'limezaimk':
        case 'limezaimq':
        case 'limezaimg':
        case 'limezaimw':
            $main = 'limezaim';
            $link = 'https://pxl.leads.su/click/95f391a1bb5ad0320c858bc8fecbae60'.$prefix;
            $my_title = 'Limezaim Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Limezaim осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'creditstarn':
        case 'creditstark':
        case 'creditstarq':
        case 'creditstarg':
        case 'creditstarw':
            $main = 'creditstar';
            $link = 'https://api.cpashka.ru/clicks/fb814dd0-44a9-11e9-8110-23e326c48e34'.$prefix;
            $my_title = 'Creditstar Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Creditstar осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        
        case 'turbozaimk':
        case 'turbozaimq':
        case 'turbozaimg':
        case 'turbozaimw':
            $main = 'turbozaim';
            $link = 'https://pxl.leads.su/click/e92499796f70588eca7c52515a5a1a98'.$prefix;
            $my_title = 'Turbozaim Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Turbozaim осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'turbozaimn':
            $main = 'turbozaim';
            $link = 'https://pxl.leads.su/click/a05cc4d1683960c509f3a398c5a5c830'.$prefix;
            $my_title = 'Turbozaim Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Turbozaim осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case '24zaemn':
        case '24zaemk':
        case '24zaemq':
        case '24zaemg':
        case '24zaemw':
            $main = '24zaem';
            $link = 'https://pxl.leads.su/click/3ea5bd083a51f4080286d0f50ced7359'.$prefix;
            $my_title = '24zaem Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = '24zaem осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'dozarplatin':
        case 'dozarplatik':
        case 'dozarplatiq':
        case 'dozarplatig':
        case 'dozarplatiw':
            $main = 'dozarplati';
            $link = 'https://pxl.leads.su/click/238710e8d890da3b42412b0fe6cea691'.$prefix;
            $my_title = 'Dozarplati Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Dozarplati осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'online-zaimn':
        case 'online-zaimk':
        case 'online-zaimq':
        case 'online-zaimg':
        case 'online-zaimw':
            $main = 'online-zaim';
            $link = 'https://pxl.leads.su/click/b3e4cde74615bb35defb3976c2cc81d7'.$prefix;
            $my_title = 'Online-zaim Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Online-zaim осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'migcreditn':
        case 'migcreditk':
        case 'migcreditq':
        case 'migcreditg':
        case 'migcreditw':
            $main = 'migcredit';
            $link = 'https://pxl.leads.su/click/bf40ca729eadb791c6556c2f371c3788'.$prefix;
            $my_title = 'Migcredit Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Migcredit осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'mangomoneyn':
        case 'mangomoneyk':
        case 'mangomoneyq':
        case 'mangomoneyg':
        case 'mangomoneyw':
            $main = 'mangomoney';
            $link = 'https://pxl.leads.su/click/b51f5f40d7d73b15ea21ead1a1402066'.$prefix;
            $my_title = 'Mangomoney Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Mangomoney осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'zaymigon':
        case 'zaymigok':
        case 'zaymigoq':
        case 'zaymigog':
        case 'zaymigow':
            $main = 'zaymigo';
            $link = 'https://pxl.leads.su/click/1b028796f7c2b3eae8aa69aefe7f0eed'.$prefix;
            $my_title = 'Zaymigo Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Zaymigo осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'glavfinansn':
        case 'glavfinansk':
        case 'glavfinansq':
        case 'glavfinansg':
        case 'glavfinansw':
            $main = 'glavfinans';
            $link = 'https://pxl.leads.su/click/1b028796f7c2b3eae8aa69aefe7f0eed'.$prefix;
            $my_title = 'Glavfinans Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Glavfinans осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'creditplusn':
        case 'creditplusk':
        case 'creditplusq':
        case 'creditplusg':
        case 'creditplusw':
            $main = 'creditplus';
            $link = 'https://pxl.leads.su/click/2de9f54817372fb302dfb76c9b7730f2'.$prefix;
            $my_title = 'Creditplus Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Creditplus осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'getsomemoneyn':
        case 'getsomemoneyk':
        case 'getsomemoneyq':
        case 'getsomemoneyg':
        case 'getsomemoneyw':
            $main = 'getsomemoney';
            $link = 'https://pxl.leads.su/click/2d4bcd267a5466b25d993ff42c754f42'.$prefix;
            $my_title = 'Getsomemoney Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Getsomemoney осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
		case 'dom-creditovn':
        case 'dom-creditovk':
        case 'dom-creditovq':
        case 'dom-creditovg':
        case 'dom-creditovw':
            $main = 'dom-creditov';
            $link = 'https://pxl.leads.su/click/bdfe4561f772578521b95796caecf22b'.$prefix;
            $my_title = 'Dom-creditov Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Dom-creditov осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'joymoneyn':
        case 'joymoneyk':
        case 'joymoneyq':
        case 'joymoneyg':
        case 'joymoneyw':
            $main = 'joymoney';
            $link = 'https://pxl.leads.su/click/d1d8f5b5e0c8d66cd01c09d169810696'.$prefix;
            $my_title = 'Joymoney Лучший Онлайн Сервис в РФ по Подбору Выгодных Займов'; 
            $description = 'Joymoney осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        default:
            $main = 'bigzaim';
            $link = 'https://pxl.leads.su/click/3b00787cbb4b9484e25cbe512163ca7d'.$prefix;
            $my_title = 'Срочные Займы Круглосуточно без Проверок Онлайн'; 
            $description = 'Bigzaim - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!'; 
            break;
    }
    
    if ($this->uri->segment(1) == 'about') require 'templates/ru-zaimo/internal-about.php';
    elseif ($this->uri->segment(1) == 'faq') require 'templates/ru-zaimo/internal-faq.php';
    elseif ($this->uri->segment(1) == 'rules') require 'templates/ru-zaimo/internal-rules.php';
	elseif ($this->uri->segment(1) == 'oferta') require 'templates/ru-zaimo/internal-oferta.php';
	elseif ($this->uri->segment(1) == 'soglasie') require 'templates/ru-zaimo/internal-soglasie.php';
	elseif ($this->uri->segment(1) == 'zaim-bank') require 'templates/ru-zaimo/internal-zaim-bank.php'; 
	elseif ($this->uri->segment(1) == 'zaim-qiwi') require 'templates/ru-zaimo/internal-zaim-qiwi.php';
	elseif ($this->uri->segment(1) == 'zaim-yandex') require 'templates/ru-zaimo/internal-zaim-yandex.php';
	elseif ($this->uri->segment(1) == 'zaim-contact') require 'templates/ru-zaimo/internal-zaim-contact.php';
	elseif ($this->uri->segment(1) == 'zaim-card') require 'templates/ru-zaimo/internal-zaim-card.php';
	elseif ($this->uri->segment(1) == 'personal-data') require 'templates/ru-zaimo/internal-personal-data.php';
	elseif ($this->uri->segment(1) == 'calls') require 'templates/ru-zaimo/internal-calls.php';
	elseif ($this->uri->segment(1) == 'regulation') require 'templates/ru-zaimo/internal-regulation.php';
	elseif ($this->uri->segment(1) == 'safety') require 'templates/ru-zaimo/internal-safety.php';
    else require 'templates/ru-zaimo/universal.php';
    file_put_contents('log', $this->uri->segment(2).PHP_EOL, FILE_APPEND);
    }