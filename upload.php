
<?php
include 'connect.php';

if(isset($_POST['btn_upload'])){
$name = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];
$type = $_FILES['file']['type'];
$path = "upload/{$name}";


//upload file

move_uploaded_file($name, $path);

require 'connect.php';
$sql = "INSERT INTO `images`(`name`, `path`, `type`) VALUES ('$name','$path','$type') ";
$result = mysqli_query($conn, $sql);

if($result){
    echo 'Successfully Uploaded';
} else {
    echo 'Couldn\'t upload file';
}

}
mysqli_close($conn)

?>
