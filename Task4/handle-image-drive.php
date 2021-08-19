<?php

if(isset($_POST['submit'])){
    echo '<pre>';
    print_r($_POST);
    print_r($_FILES);
    echo '</pre>';
    $userOP = $_POST['userOP'];
    $userName = $_POST['username'];

    $imageName = $_FILES['image']['name'];
    $imageTmpName = $_FILES['image']['tmp_name'];

    $iamgeNameWithoutEX=pathinfo($imageName,PATHINFO_FILENAME);
    $imageEX = pathinfo($imageName,PATHINFO_EXTENSION);
    $imageNewName="$iamgeNameWithoutEX-".uniqid().".$imageEX";

    $imagestillName = "$userName" . ".$imageEX";


    if($userOP =='Yes'){
        move_uploaded_file($imageTmpName,"uploads/$imagestillName");
        header("location:image-drive.php");

    }
    else{
        move_uploaded_file($imageTmpName,"uploads/$imageNewName");
          header("location:image-drive.php");


    }
  
    
}
