<?php

$textToEncrypt = "API_KEY_HERE";
$encryptionMethod = "AES-256-CBC";
$secretHash = "b9e62fddc7244cb0bca2a2501ae1ca92"; // MD5 
$iv = "\xc9h^\xb0\xae8\xc7>\x9bVR\xb8T\xa5\x9f\x02"; // python >>> import os >>> os.urandom(16)

//To encrypt
$encryptedMessage = openssl_encrypt($textToEncrypt, $encryptionMethod, $secretHash, false, $iv);

//encrypted key
//$encryptedMessage = "";

//To Decrypt
$decryptedMessage = openssl_decrypt($encryptedMessage, $encryptionMethod, $secretHash, false, $iv);

//Result
echo "Encrypted: $encryptedMessage <br>Decrypted: $decryptedMessage";
?>