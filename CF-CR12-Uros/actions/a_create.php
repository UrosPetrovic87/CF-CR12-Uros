<?php
require_once 'db_connect.php';

if ($_POST) {   
    $picture = $_POST['picture'];
    $locationName = $_POST['locationName'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];
    

    $sql = "INSERT INTO travels (picture, locationName, price, description, longitude, latitude ) VALUES ('$picture', '$locationName', '$price', '$description', '$longitude', '$latitude')";

    if (mysqli_query($connect, $sql) === true) {
        $class = "success";
        $message = "The entry below was successfully created <br>
            <table class='table w-50'>
                <tr>
                    <td>$picture</td>
                    <td>$locationName</td>                   
                    <td>$price</td>
                    <td>$description</td>  
                    <td>$longitude</td>
                    <td>$latitude</td>                
                </tr>
            </table>
            <hr>";
        
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
        
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
                <h1>Create travel</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>