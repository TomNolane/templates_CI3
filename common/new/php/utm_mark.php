<?php
function setUtm($link, $value)
{
    if (strpos($link, 'guruleads'))
        $link .='?sub1='.$value;
    else if(strpos($link, 'kviku'))
        $link .='';
    else if(strpos($link, 'g24.me'))
        $link .='?subid='.$value;
    else if(strpos($link, 'tech'))
        $link .='&sub1='.$value;
    else if(strpos($link, 'leadgid'))
        $link .='?source='.$value;
    else if(strpos($link, 'leadbrothers'))
        $link .='?s1='.$value;
    else
        $link .='?source='.$value;

    return $link;
}