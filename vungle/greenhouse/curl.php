<?php
	$ch = curl_init(); 
	$url = "";
	
	$postfields = $_POST;
	foreach($_FILES as $name => $file_info) {
	if($file_info['name']){
	  $postfields[$name] = new CurlFile($file_info['tmp_name'], $file_info['type'], $file_info['name']);
	  print_r($file_info);
	  }
	}
	
	$options = array(
            CURLOPT_URL => $url,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $postfields,
            CURLOPT_RETURNTRANSFER => true
        ); // cURL options
   
   
    curl_setopt_array($ch, $options);
    $result = curl_exec($ch);
    
    var_dump(json_decode($result, true));
   /* 
	if(!curl_errno($ch))
    {
        $info = curl_getinfo($ch);
        if ($info['http_code'] == 200)
            $errmsg = "File uploaded successfully";
    }
    else
    {
        $errmsg = curl_error($ch);
    }
    echo $errmsg;
    curl_close($ch);

	*/


?>