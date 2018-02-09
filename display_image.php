

<!--<form method="POST" action="upload.php" enctype='multipart/form-data'>
    <input type="file" name="file">
    <input type="submit" value="Upload" name="btn_upload">
</form>-->

<?php 
include 'connect.php';
require 'connect.php';
$sql = "SELECT `name` FROM `images` WHERE `id`=1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$image = $row['name'];
$image_src = "upload/".$image;
mysqli_close($conn)
?>



