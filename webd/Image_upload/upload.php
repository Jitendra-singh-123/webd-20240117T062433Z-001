<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$target_dir="upload/";
$target_file=$target_dir.basename($_FILES["fileToUpload"]["name"]);
// echo $target_file;
$uploadOk=1;
// $imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);

if(isset($_POST["submit"])){
    $check=getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check!== false){
        echo "File is an image -  ". $check["mime"]. ".";
        $uploadOk=1;
    }
    else{
        echo "File is not an image.";
        $uploadOk=0;
    }

}

echo "<br>";
echo "<br>";
echo $_FILES["fileToUpload"]["tmp_name"];
echo "<br>";
echo "<br>";
echo $_FILES["fileToUpload"]["type"];
echo "<br>";
echo "<br>";
echo $_FILES["fileToUpload"]["name"];
echo "<br>";
echo "<br>";
echo $_FILES["fileToUpload"]["size"];
echo "<br>";
echo "<br>";
if(file_exists($target_file)){
    echo "Sorry ,file already exists.";
    $uploadOk=0;
}
if($_FILES["fileToUpload"]["size"]>50000000){
    echo "Sorry ,your file is too large.";
    $uploadOk=0;
}
// $_FILES['']['type']!=jpg
if($_FILES["fileToUpload"]["type"]!="image/jpg" && $_FILES["fileToUpload"]["type"]!="image/png" && $_FILES["fileToUpload"]["type"]!="image/jpeg" && $_FILES["fileToUpload"]["type"]!="image/gif"){
    echo "Sorry ,only JPG,JPEG,PNG & GIF files are allowed.";
    $uploadOk=0;
}
if($uploadOk==0){
    echo "Sorry,file was not uploaded";
}
else{
    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_file)){
        echo "The file ".basename($_FILES['fileToUpload']['name'])."has been uploaded";

    }
    else
    {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
</body>
</html>

