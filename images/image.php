<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insertimg.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" >
        <input type="submit" value="insert">
    </form>
    <br>
    <?php
$conn = mysqli_connect("localhost", "root", "", "insertimg");



$sql="select * from images";
$res=mysqli_query($conn,$sql);

while ($row=mysqli_fetch_assoc($res)) {
    

?>
<img src="<?php echo $row['image_path']?>" alt="" srcset="" width=100 height=100>
<?php
}

?>
</body>
</html>