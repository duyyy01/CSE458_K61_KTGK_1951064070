<h1>
    Thêm mới dự án
</h1>

<!--</form>-->
<div style="color: red">
    <?php echo $error; ?>
</div>
<form method="post" action="">
    Tên Dự Án :
    <input type="text" require name="txtTda" value="" />
    <br />
    Năm Thực Hiện :
    <input type="text" require name="txtNth" value="" />
    <br />
    Lĩnh Vực :
    <input type="text" require name="txtLv" value="" />
    <br />
    Nhiệm Vụ :
    <input type="text" require name="txtNv" value="" />
    <br />
    Cơ Quan Thực Hiện :
    <input type="text" require name="txtCqth" value="" />
    <br />
    
   
    <input type="submit" require name="submit" value="Save" />
</form>