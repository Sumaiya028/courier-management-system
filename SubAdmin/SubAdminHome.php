<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $org = $_REQUEST['Origins'];
    $dest = $_REQUEST['Destinations'];
    $wei = $_REQUEST['Weight'];
    $lon = $_REQUEST['Long'];
    $wid = $_REQUEST['Wide'];
    $hei = $_REQUEST['Height'];
    $Dist = $_REQUEST['Distance'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!(empty($org) && empty($dest) && empty($wei) && empty($lon) && empty($wid) && empty($hei) && empty($Dist))) {
        header("Location:CheckPost.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contuct us</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="/css/border.css">-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            /* Remove the navbar's default margin-bottom and rounded borders */ 
            .navbar {
                margin-bottom: 10px;
                border-radius: 0;
            }

            /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
            .row.content {height: 500px;
                          border-radius: 0px;
            }

            /* Set gray background color and 100% height */
            .sidenav {
                padding-top: 20px;
                background-color: #f1f1f1;
                height: 100%;
            }

            /* Set black background color, white text and some padding */
            footer {
                background-color: #555;
                color: white;
                padding: 15px;
            }

            /* On small screens, set height to 'auto' for sidenav and grid */
            @media screen and (max-width: 767px) {
                .sidenav {
                    height: auto;
                    padding: 15px;
                    width: 2px;
                }
                .row.content {height:auto;} 
            }

            /* Create three equal columns that floats next to each other */
            div.column{
                float: left;
                padding: 15px;
            }


            /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
            @media (max-width:800px) {
                .column {
                    width: 100%;
                }
            }

            #randomfield { 
                -webkit-touch-callout: none;
                -webkit-user-select: none;
                -khtml-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none; 
                width: 200px;
                color: black;
                border-color: black;
                text-align: center;
                font-size: 40px;
                background-image: url('http://4.bp.blogspot.com/-EEMSa_GTgIo/UpAgBQaE6-I/AAAAAAAACUE/jdcxZVXelzA/s1600/ca.png');
            }  
        </style>
    </head>

    <body>
 <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="myNavbar" style="margin-left: 120px;">
              <ul class="nav navbar-nav">
                <li class="active" style="margin-left:10px;"><a href="http://localhost:1234/Courier/SubAdmin/SubAdminHome.php"><i class="fa fa-home"> </i>Home </a></li>
                <li class="active" style="margin-left:10px;"><a href="http://localhost:1234/Courier/SubAdmin/changePassword.php">Change Password</a></li>
                <li>
                       <div class="w3-container" style="margin-top: 7px;box-sizing: content-box:Light Gray;">
                            <div class="w3-dropdown-hover">
                            <button class="w3-button w3-black">Data Transaction</button>
                            <div class="w3-dropdown-content w3-bar-block w3-border">
                              <a href="http://localhost:1234/Courier/SubAdmin/ChequeShipping.php" class="w3-bar-item w3-button">Chaque Shipping</a>
                              <a href="http://localhost:1234/Courier/SubAdmin/DataTransaction.php" class="w3-bar-item w3-button">Data Transaction</a>
                              <a href="http://localhost:1234/Courier/SubAdmin/UpdateInvoice.php" class="w3-bar-item w3-button">Update Invoice</a>
                            </div>
                          </div>
                        </div>
                </li>
                <li class="active"><a href="http://localhost:1234/Courier/SubAdmin/DataReport.php">Data Report</a></li>
                <li class="active" style="margin-left:10px;"><a href="http://localhost:1234/Courier/courier/Home.php">Logout</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="container"> 
            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="border-style: groove; width: 93%; height: 100%;margin-left: 55px;">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" style=" height: 100%;">
                    <div class="item active">
                        <img src="./../images/running.....jpg" alt="Los Angeles" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="./../images/startrack.......jpg" alt="Chicago" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="./../images/gift.........jpg" alt="New york" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="./../images/curier..............jpg" alt="New york" style="width:100%;">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>    

        <div class="row">
            <div class="column">
                <div class="border1" style="border-style: groove; margin-left: 160px; width:550px;max-width:800px;">
                    <p class="groove" style="background-color:skyblue;">Check The Shipping Cost</p>
                    <br>
                    <br>
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" style="margin-left: 100px;">
                        <label class="underlabel" style="margin-right: 180px;" > Origins:</label>
                        <input type="text" id="org" name="Origins" placeholder="Enter Origin" >
                        <br>
                        <br>
                        <label class="underlabel" style="margin-right: 145px; "> Destinations:</label>
                        <input type="text" id="dest" name="Destinations" placeholder="Enter a Destination" >
                        <br><br>
                        <label class="underlabel" style="margin-right: 68px;"> Weight (Kg) Ex: 0.2, 2, 20</label>
                        <input id="wei" type="text" name="Weight">
                        <br><br>
                        <label class="underlabel" style="margin-right: 160px;"> Long (Cm):</label>
                        <input id="lon" class="input" type="text" name="Long">
                        <br><br>
                        <label class="underlabel" style="margin-right: 162px;"> Wide (Cm):</label>
                        <input id="wid" class="input" type="text" name="Wide">
                        <br><br>
                        <label class="underlabel" style="margin-right: 156px;"> Height(Cm):</label>
                        <input id="hei" class="input" type="text" name="Height">
                        <br><br>

                        <label class="underlabel" style=" margin-right: 123px;"> Delivery options:</label>
                        <dev style="font-size: 14px;">
                            <select required name="Delevery" style="color: lightslategray;width: 120px; height: 35px;">
                                <option id="del-1" value="Sea or Land">Sea or Land</option>
                                <option id="del-2" value="Air">Air</option>
                            </select>
                        </dev>   

                        <br><br>
                        <label class="underlabel" style=" margin-right: 178px;"> Packing:</label>
                        <dev style=" font-size: 14px;">
                            <select required name="Delevery" style="color: lightslategray;width: 60px; height: 35px;">
                                <option id="yes" value="Yes">Yes</option>
                                <option id="no" value="No">No</option>
                            </select>
                        </dev>

                        <br><br>
                        <label class="underlabel" style=" margin-right: 123px;"> Option Shipping:</label>
                        <dev style="font-size: 14px;">
                            <select required name="Delevery" style="color: lightslategray;width: 170px; height: 35px;">
                                <option value="">--Option Shipping--</option>
                                <option id="reg" value="Regular">Regular</option>
                                <option id="exp" value="Express">Express</option>
                            </select>
                        </dev>   

                        <br><br>
                        <label class="underlabel" style="margin-right: 140px;">Distance (km):</label>
                        <input id="dist" name="Distance" class="input" type="text" readonly="true">
                        <br><br><br>
                        <input id="check" value="Check" type="Submit" style="color: lightslategray; margin-left: 150px; width: 60px;height: 40px; font-size: 14px;">
                    </form>
                </div>
            </div>

            <div class="column">
                <div class="border2" style="border-style: groove; float:left; width:480px; max-width: 800px;">
                    <p class="groove" style="background-color: skyblue">Delivery Status</p>
                    <br><br>
                    <label class="underlabel" style="margin-right: 40px; margin-left: 56px;"> <span>No. Invoice:</span> </label>
                    <input class="input" type="text" >
                    <br>
                    <label class="underlabel" style="margin-right: 10px;margin-left: 185px;"> <span>	Ex: 141</span> </label>
                    <br><br>
                    <button type="button" style="color: lightslategray; margin-left: 210px; width: 60px;height: 40px; font-size: 14px;">Check</button>
                </div>
            </div>
        </div>

        <div>
            <footer class="container-fluid text-center">
                <p>Copyright 2017 © Courier Management System</p>
            </footer>
        </div>


        <script>

            var autocomplete, autocomplete1;

            function initAutocomplete() {
                autocomplete = new google.maps.places.Autocomplete(
                        (document.getElementById('org')),
                        {
                            types: ['geocode']
                        });
                autocomplete1 = new google.maps.places.Autocomplete(
                        (document.getElementById('dest')),
                        {
                            types: ['geocode']
                        });

                autocomplete.addListener('place_changed', fillInAddress);
                autocomplete1.addListener('place_changed', fillInAddress);
            }

            function fillInAddress() {
                autocomplete.getPlace();
                //console.log("yo!!!");
            }


        </script>

        <!--Distance Calculation-->
        <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3BLb3uHA27nebpSeadReHXulPbyewd_4&libraries=places&callback=initAutocomplete">
        </script>
        <script>
            $(document).ready(function () {

                function calcD() {
                    var org = $("#org").val();
                    var dest = $("#dest").val();

                    //console.log(org+" "+dest);

                    var directionsService = new google.maps.DirectionsService();

                    var request = {
                        origin: org, // a city, full address, landmark etc
                        destination: dest,
                        travelMode: google.maps.DirectionsTravelMode.DRIVING
                    };

                    directionsService.route(request, function (response, status) {
                        if (status == google.maps.DirectionsStatus.OK) {
                            console.log(response.routes[0].legs[0].distance.value + " metres"); // the distance in metres
                            $("#dist").val(response.routes[0].legs[0].distance.value / 1000);
                        } else {
                            //oops, there's no route between these two locations
                            // every time this happens, a kitten dies
                            // so please, ensure your address is formatted properly
                        }
                    });

                }

                $("#org").change(function () {
                    calcD();
                });
                $("#dest").change(function () {
                    calcD();
                });

            });
        </script>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($org) && empty($dest) && empty($wei) && empty($lon) && empty($wid) && empty($hei) && empty($Dist)) {
                echo "<script>alert('Every input field must not be empty');</script>";
            }
        }
        ?>

    </body>
</html>




