<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        a {
            display: inline-block;
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
            line-height: 25px;
        }
    </style>
</head>
<body>
    <div class="container contact">    
    <h2 class="text-center my-3">Chi tiết dự án</h2> 
    <button class="btn btn-primary my-3">
        <a href="index.php?controller=manage&action=index">Home</a> 
    </button>
    <div class="">        
        <table id="recordListing" class="table text-center table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>tenduan</th>                   
                    <th>namthuchien</th>
                    <th>linhvuc</th>                    
                    <th>nhiemvu</th>
                    <th>coquanthuchien</th>               
                </tr>
            </thead>
            <?php if (!empty($blood)): ?>
            <tr>
                <td><?php echo $blood['maduan'] ?></td>
                <td><?php echo $blood['tenduan'] ?></td>
                <td><?php echo $blood['namthuchien'] ?></td>
                <td><?php echo $blood['linhvuc'] ?></td>
                <td><?php echo $blood['nhiemvu'] ?></td>
                <td><?php echo $blood['coquanthuchien'] ?></td>
            
            <?php else: ?>
            <tr>
                <td colspan="2">KHông có dữ liệu</td>
            </tr>
            <?php endif; ?>
        </table>
    </div>
</body>


</html>


