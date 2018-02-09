
<form action="qrcode.php" method="post">
    <label>Registration Number:</label>
    <input size="40px" name="reg_num" value="<?php if(isset($_POST['reg_num'])){ echo $_POST['reg_num'];}?>">
    <button type="submit" name="qr">Create Code</button>
    <button type="reset">Reset</button>
</form> 

--------------------------------------------------------------------------------------------------------------

<form action="upload_excel.php" method="post" enctype="multipart/form-data">
    <label>Select sheet:</label>
    <input size="20px" type="file" name="file">
    <button type="submit" name="excel">Upload</button>
    <button type="reset">Reset</button>
</form>   

----------------------------------------------------------------------------------------------------------------
<p> An added line </p>