<?php

error_reporting(E_ALL);
$secret_key = $_ENV["SECRET"]; //Set this as your secret key, to prevent others uploading to your server.
$domain_url = "https://files.".$_ENV['DOMAIN']."/";
$lengthofstring = 5; //Length of the file name

function RandomString($length) {
    $allowed_chars = array("a", "b", "c", "h", "j", "k", "r", "x");
    $keys = array_merge(range(0,9), $allowed_chars);

    $key = '';
    for($i=0; $i < $length; $i++) {
        $key .= $keys[mt_rand(0, count($keys) - 1)];
    }
    return $key;
}

if(isset($_POST['secret'])) {

    if($_POST['secret'] == $secret_key) {
        $filename = RandomString($lengthofstring);
        $target_file = $_FILES["sharex"]["name"];
        $fileType = pathinfo($target_file, PATHINFO_EXTENSION);

        if (move_uploaded_file($_FILES["sharex"]["tmp_name"], "/sharex/files/".$filename.'.'.$fileType)) {

            echo $domain_url.$filename.'.'.$fileType;

        } else {
           echo 'File upload failed - CHMOD/Folder doesn\'t exist?';
        }

    } else {
        echo 'Invalid Secret Key';
    }
}

else {
    echo 'No post data recieved';
}