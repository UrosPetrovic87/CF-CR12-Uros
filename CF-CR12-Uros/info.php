<?php
require_once 'actions/db_connect.php';
require_once 'RESTful.php';
if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM travels WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $picture = $data['picture'];
        $locationName = $data['locationName'];
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
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Info</title>
        <?php require_once 'components/boot.php'?>   
    </head>
    <body>
    
    <?php require_once 'components/nav.php'?>
    <div class="container"> 
    <div class="row row-cols-1 g-3 my-3 row-cols-md-2 row-cols-lg-3 ">
                <div class='col'>
        <div class='card h-100'>
            <img src='<?php echo $picture?>' class='card-img-top' alt='...'>
                <div class='card-body'>
                                <h5 class='card-title'>Location: <?php echo $locationName?></h5>
                                <p class='card-text'>Description: <?php echo $description?></p>
                                <p class='card-text'>Price: <?php echo $price?>€</p>
                            </div>
                            <div id="map" style="height:300px;">                           
                            </div>
                         </div> 
                    </div>
                    <div id="map" style="height:300px;"></div>  
                </div>
                <div class=' m-3'>
        <div class="btn btn-success" id="show">How is Weather</div>
    </div>
    <div class=' mb-5 mt-2 ' id="content"></div>
            </div> 
            
            </div>

        
    <script>
        document.getElementById("show").addEventListener("click", loadData);
        function loadData() {
            var xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                if (this.status == 200) {
                     document.getElementById("content").innerHTML = this.responseText;
                }
            }
            let url = "weather.php?lat=" + <?php echo $latitude ?> + "&long=" + <?php echo $longitude ?>;
            xhttp.open("GET", url, true);
            xhttp.send();
        }  
    </script>       
     


            <script>
    var map;
    function initMap() {
        var location = {
            lat: <?php echo $latitude ?>,
            lng: <?php echo $longitude ?>
        };
        map = new google.maps.Map(document.getElementById('map'), {
            center: location,
            zoom: 8
        });
        var pinpoint = new google.maps.Marker({
            position: location,
            map: map
        });
    }
    </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap" async defer></script>
    </body>
</html>
