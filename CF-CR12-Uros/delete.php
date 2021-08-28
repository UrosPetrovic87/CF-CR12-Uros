<?php 
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM travels WHERE id = {$id}" ;
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) == 1) {
        $locationName = $data['locationName'];
        $picture = $data['picture'];
        $price = $data['price'];
        $description = $data['description'];
        
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete</title>
        <?php require_once 'components/boot.php'?>
        <style type= "text/css">   
            .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
            } 
            fieldset{
                max-width:600px;
            } 
            .mitte{
                height:100vh;
                margin-top:-100px;
            }  
        </style>
    </head>
    <body >
    <?php require_once 'components/nav.php'?>
        <div class="d-flex justify-content-center align-items-center mitte">
        <fieldset>
            <legend class='h2 mb-3'>Delete request <img class='img-thumbnail' src="<?php echo $picture ?>" alt="<?php echo $locationName ?>"></legend>
            <h5>You have selected the data below:</h5>
            <table class="table w-75 mt-3">
                <tr>
                    <td><?php echo $locationName ?></td>
                </tr>
            </table>

            <h3 class="mb-4">Do you really want to delete this travel?</h3>
            <form action ="actions/a_delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id ?>" />
                <input type="hidden" name="picture" value="<?php echo $picture ?>" />
                <button class="btn btn-danger " type="submit"> Yes, delete it!</button>
                <a href="index.php"><button class="btn btn-warning " type="button"> No, go back!</button></a>
            </form>
        </fieldset>
            </div>
    </body>
</html>