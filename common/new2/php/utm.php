<?php
$utm = '';

if($this->input->get())
{
    $utm = str_replace(";", "", '?'.http_build_query($this->input->get()));
    $utm = str_replace("+", "", $utm);
    // $utm = '?'.http_build_query($this->input->get()); 
} 
 
//  if ($this->input->get('keyword', TRUE) != "" && 
//  $this->input->get('campaign_id', TRUE) != "" &&
//  $this->input->get('utm_source', TRUE) != "" ) 
//  $utm = '?keyword='.$this->input->get('keyword', TRUE).'&campaign_id='.$this->input->get('campaign_id', TRUE)."&utm_source=".$this->input->get('utm_source', TRUE);

 $ip = $this->input->ip_address();
require_once 'emails.php';
require_once 'fingerprint.php';

echo "<script>";
$js_array = json_encode($fingerprint);
echo "var blacklist_array1 = ". $js_array . ";\n";

$js_array2 = json_encode($emails);
echo "var blacklist_array2 = ". $js_array2 . ";\n";
echo "</script>";
?>