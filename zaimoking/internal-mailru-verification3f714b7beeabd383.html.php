<?php echo 'mailru-verification: 3f714b7beeabd383';

// function Esputnik()
// {  
//     $first_name = 'Александрв'; // сюда имя
//     $last_name = 'Медведев'; // сюда фамилия
//     $email = 'mnezaimi@yandex.ru';	// email контакта
//     $sms = '+79814081745';	// номер телефона

//     $user = 'ulyanovdmitry@mail.ru'; // логин
//     $password = '197364825Dmitry'; // пароль

//     $import_contacts_url = 'https://esputnik.com/api/v1/contacts';
//     $contact = new stdClass();
//     $contact->firstName = $first_name;
//     $contact->lastName = $last_name;
//     $contact->channels = array(
//         array('type'=>'email', 'value' => $email),
//         array('type'=>'sms', 'value' => $sms)
//         );

//     $request_entity = new stdClass();
//     $request_entity->contacts = array($contact);
//     $request_entity->dedupeOn = 'email';
//     $request_entity->contactFields = array('firstName', 'lastName', 'email');
//     $request_entity->groupNames = array(date('d_m_Y'));

//     send_request($import_contacts_url, $request_entity, $user, $password); 
// }

// function send_request($url, $json_value, $user, $password) 
// {
//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_POST, 1);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($json_value));
//     curl_setopt($ch, CURLOPT_HEADER, 1);
//     curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
//     curl_setopt($ch, CURLOPT_URL, $url);
//     curl_setopt($ch,CURLOPT_USERPWD, $user.':'.$password);
//     curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
//     $output = curl_exec($ch);
//     curl_close($ch);
//     echo $output;
// }
// Esputnik();
?>