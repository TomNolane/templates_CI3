<?php

// if(!$this->input->post('is_coockie', TRUE)) return;
if($this->input->post())
{
    $data = array ();
    foreach($this->input->post() as $key => $value)
    {
        $data[$key] = $value;
    }

    $this->db->insert('clickfrods2', $data);

    echo 'OK';
}
else {
    echo '!';
}
