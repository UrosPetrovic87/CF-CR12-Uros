<?php
require_once 'db_connect.php';

if ($_POST) { 
    $id = $_POST['id'];
    $locationName = $_POST['locationName'];
    $picture = $_POST['picture'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];
   

 $sql = "UPDATE travels SET locationName = '$locationName', picture = '$picture', price = '$price', description = '$description', longitude = '$longitude', latitude = '$latitude'  WHERE id = {$id}";
     
    if (mysqli_query($connect, $sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . mysqli_connect_error();
    }
    mysqli_close($connect);    
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/boot.php'?> 
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Update travel</h1>
            </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../update.php?id=<?=$id;?>'><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>