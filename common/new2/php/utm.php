<?php
 $utm = '';
 if ($this->input->get('keyword', TRUE) != "" && 
 $this->input->get('campaign_id', TRUE) != "" &&
 $this->input->get('utm_source', TRUE) != "" ) 
 $utm = '?keyword='.$this->input->get('keyword', TRUE).'&campaign_id='.$this->input->get('campaign_id', TRUE)."&utm_source=".$this->input->get('utm_source', TRUE);
?>