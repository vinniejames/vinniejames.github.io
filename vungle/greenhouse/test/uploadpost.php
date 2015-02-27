<?php
print_r($_FILES);
$errmsg = '';
if (isset($_POST['btnUpload']))
{
    $url = "http://localhost/~vincentdepalma/vinniejames.github.io/vungle/greenhouse/test/upload.php"; // e.g. http://localhost/myuploader/upload.php // request URL
    //$url = "https://16c7366a3f525bf30232066ddeb99477@api.greenhouse.io/v1/applications/";
    $filename = $_FILES['file']['name'];
    $filedata = $_FILES['file']['tmp_name'];
    $filesize = $_FILES['photo']['size'];
    if ($filedata != '')
    {
        $headers = array("Content-Type:multipart/form-data"); // cURL headers for file uploading
        $postfields = array("filedata" => "@$filedata", "filename" => $filename);
        $ch = curl_init();
        $options = array(
            CURLOPT_URL => $url,
            CURLOPT_HEADER => true,
            CURLOPT_POST => 1,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_POSTFIELDS => $postfields,
            CURLOPT_INFILESIZE => $filesize,
            CURLOPT_RETURNTRANSFER => true
        ); // cURL options
        curl_setopt_array($ch, $options);
        curl_exec($ch);
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
        curl_close($ch);
    }
    else
    {
        $errmsg = "Please select the file";
    }
}

$firstname = $_POST['name'];

echo("DUDE");
echo($filename);
echo($firstname);
?>