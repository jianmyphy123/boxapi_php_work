<?php
require_once('dev.php');

if(isset($_FILES["file"])){
    if ($_FILES["file"]["error"] > 0) {
      echo "Error: " . $_FILES["file"]["error"] . "<br>";
    }
    else {
        $date = date_create();
        $timestamp = date_format($date, 'm-d_H-i_');
        $originfilename = pathinfo($_FILES["file"]['name'])["filename"];
        $tmp_file_name = $timestamp . $_POST['company'].'_'.$originfilename;
        
        $uploadFileName = $tmp_file_name.'_'.sha1(mt_rand().$_FILES["file"]['tmp_name']).strrchr($_FILES["file"]['name'], '.');
        if(file_exists($local_upload_location)) {
        //   echo 'file exists';
        }
        else if(!mkdir($local_upload_location, 0777, true)) {


        }



        $target_file = $local_upload_location ."/". basename($uploadFileName);

        if (move_uploaded_file($_FILES["file"]['tmp_name'], $target_file)) {
        //     echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
            $ret = array("filename" => $uploadFileName, "location" => $target_file, );
            echo json_encode($ret);
        } 
        else {
        //    echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>