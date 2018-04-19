<?php  
    $leadgid_id = "24591";
    $leadgid_token = "AEiqyuaWr1pk";
    
    $phone = substr(preg_replace('/[^0-9]/', '', $this->input->get_post('phone', true)), 1);

    $url = 'http://api3.leadgid.ru/api/universal/applications?affiliate_id='.$leadgid_id.'&api_key='.$leadgid_token;
    $post_data = array(
        "amount"=>$this->input->post("amount"),
        "term"=>$this->input->post("term"),
        "last_name"=>$this->input->post("last_name"),
        'first_name' => $this->input->post("first_name"), 
        'middle_name' => $this->input->post("middle_name"),
        'gender' => $this->input->post("gender"),
        'birthdate' => $this->input->post("birthdate"),
        'email' => $this->input->post("email"),
        'phone' => $phone,
        'region' => $this->input->post("region"),
        'city' => $this->input->post("city"),
        'passport_series' => $this->input->post("passport_series"),
        'passport_number' => $this->input->post("passport_number")
    );
    $ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
    $return = curl_exec($ch);
    curl_close($ch);
    echo $return;
?>