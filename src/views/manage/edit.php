
<form action="" method="post">
    Name :
    <input type="text" require name="txtTda" value="<?php echo isset($_POST['txtTda']) ? $_POST['txtTda'] : $blood['tenduan']?>"/>
    <br>
    Sex :
    <input type="text" require name="txtNth" value="<?php echo isset($_POST['txtNth']) ? $_POST['txtNth'] : $blood['namthuchien']?>" />
    <br>
    Age :
    <input type="text" require name="txtLv" value="<?php echo isset($_POST['txtLv']) ? $_POST['txtLv'] : $blood['linhvuc']?>" />
    <br>
    Group :
    <input type="text" require name="txtNv" value="<?php echo isset($_POST['txtNv']) ? $_POST['txtNv'] : $blood['nhiemvu']?>" />
    <br>
    Date :
    <input type="text" require name="txtCqth" value="<?php echo isset($_POST['txtCqth']) ? $_POST['txtCqth'] : $blood['coquanthuchien']?>" />
    
    <br>
    <input type="submit" name="submit" value="Update" />
</form>
