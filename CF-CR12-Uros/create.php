<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once 'components/boot.php'?>
        <title>Create travel</title>
        <style>
            fieldset {
                margin: auto;
                width: 60% ;
            }       
        </style>
    </head>
    <body>
    <?php require_once 'components/nav.php'?>
        <fieldset>
            <legend class='h3 my-5 text-center'>Create Travel</legend>
            <form action="actions/a_create.php" method= "post">
                <table class='table'>
                  <tr>
                        <th>Location</th>
                        <td><input class='form-control' type="text" name="locationName"  placeholder="Location Name" /></td>
                    </tr>    
                    <tr>
                        <th>Image</th>
                        <td><input class='form-control' type="text" name= "picture" placeholder="Image URL" /></td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td><input class='form-control' type="text" name="price"  placeholder="Price" /></td>
                    </tr>    
                    <tr>
                        <th>Description</th>
                        <td><input class='form-control' type="text" name= "description" placeholder="Description" /></td>
                    </tr>
                    <tr>
                        <th>Longitude</th>
                        <td><input class='form-control' type="text" name= "longitude" placeholder="Longitude" /></td>
                    </tr>
                    <tr>
                        <th>Latitude</th>
                        <td><input class='form-control' type="text" name= "latitude" placeholder="Latitude" /></td>
                    </tr>
                    <tr>
                        <td><button class='btn btn-success ' type="submit">Insert Travel</button></td>
                        <td><a href="index.php"><button class='btn btn-warning' type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>