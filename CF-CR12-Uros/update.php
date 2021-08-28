<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM travels WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);  
        $locationName = $data['locationName'];
        $picture = $data['picture'];
        $price = $data['price'];
        $description = $data['description'];
        $longitude = $data['longitude'];
        $latitude = $data['latitude'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Travel</title>
        <?php require_once 'components/boot.php'?>
        <style type= "text/css">
            fieldset {
                margin: auto;
                width: 60% ;
            }  
            .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
            } 
              
        </style>
    </head>
    <body>
        <?php require_once 'components/nav.php'?>
        <fieldset>
            
            <form action="actions/a_update.php"  method="post">
                <table class="table my-5">
                    <tr>
                        <th class='h3 fw-light'>Update request </th>
                        <td><img class='img-thumbnail' src='<?php echo $picture ?>' alt='<?php echo $locationName ?>'></td>
                    </tr>  
                    <tr>
                        <th>Location</th>
                        <td><input class='form-control' type="text" name="locationName"  value="<?php echo $locationName ?>" /></td>
                    </tr>    
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="text" name= "picture" value="<?php echo $picture ?>" /></td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td><input class='form-control' type="text" name="price"  value="<?php echo $price ?>" /></td>
                    </tr>    
                    <tr>
                        <th>Description</th>
                        <td><input class='form-control' type="text" name= "description" value="<?php echo $description ?>" /></td>
                    </tr>
                    <tr>
                        <th>Longitude</th>
                        <td><input class='form-control' type="text" name= "longitude" value="<?php echo $longitude ?>" /></td>
                    </tr>
                    <tr>
                        <th>Latitude</th>
                        <td><input class='form-control' type="text" name= "latitude" value="<?php echo $latitude ?>" /></td>
                    </tr>
                    
                        <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" />
                        <td><button class="btn  btn-info" type= "submit"> update</button></td>
                        <td><a href= "index.php"><button class="btn btn-warning" type="button">back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>