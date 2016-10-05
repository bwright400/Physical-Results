<!--/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/icon" href="images/favicon.ico"/>

        <!-- CSS
        ================================================== -->       
        <!-- Bootstrap css file-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Font awesome css file-->
        <link href="css/font-awesome.min.css" rel="stylesheet">       
        <!-- Default Theme css file -->
        <link id="switcher" href="css/themes/blue-theme.css" rel="stylesheet">   
        <!-- Slick slider css file -->
        <link href="css/slick.css" rel="stylesheet"> 
        <!-- Photo Swipe Image Gallery -->     
        <link rel='stylesheet prefetch' href='css/photoswipe.css'>
        <link rel='stylesheet prefetch' href='css/default-skin.css'>    
    <!-- Google fonts -->
        <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>  
        <link href='http://fonts.googleapis.com/css?family=Habibi' rel='stylesheet' type='text/css'>   
        <link href='http://fonts.googleapis.com/css?family=Cinzel+Decorative:900' rel='stylesheet' type='text/css'>

        <script src="form.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="stylesheet" type="text/css" href="css/display.css" />
 
    </head>
    <body style="text-align: center; white-space: nowrap">
        <header id="header">
        <!-- BEGIN MENU -->
        <div class="menu_area">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  
            <div class="container">
                <div class="navbar-header">
                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
              <!-- LOGO -->              
              <!-- TEXT BASED LOGO -->
              <a class="navbar-brand" href="index.html"><!--<i class="fa fa-heartbeat"></i>-->Physical <span>Fitness</span></a>              
              <!-- IMG BASED LOGO  -->
              <!--  <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>   -->                    
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="features.html">Features</a></li>
                <li><a href="about-us.html">About Us</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="#">Sign In</a>
              </ul>           
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
        <br/><br/><br/><br/><br/>
        <div class="container">
        <div class="text-center background container">
            <form role="form" method="post">
                <h1>New Participate</h1> <br />
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3">
                            <label>First Name</label>
                            <input class="form-control" id="fname" name="input[]" type="text" required />
                        </div>
                        <div class="col-sm-3">
                            <label>Last Name</label>
                            <input class="form-control" id="lname" name="input[]" type="text" required />
                        </div>
                        <div class="col-sm-3">
                            <label>Birth</label>
                            <input class="form-control" id="birth" name="input[]" type="text" required />
                        </div>
                        <div class="col-sm-3">
                            <label>Email</label>
                            <input class="form-control" id="email" name="input[]" type="text" required />
                        </div>
                    </div>
                    <br /><br />
                    <div class="row">
                        <div class="col-sm-3">
                            <label>Weight</label>
                            <div class="input-group">
                                <input class="form-control" type="text" id="weight" name="input[]" required />
                                <span class="input-group-addon">
<!--                                    <select name="measure[]">
                                        <option></option>
                                        <option>lbs</option>
                                        <option>kg</option>
                                    </select>-->
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Height</label>
                            <div class="input-group">
                                <input class="form-control" type="text" id="height" name="input[]" required />
                                <span class="input-group-addon" class="form-control">
<!--                                    <select name="measure[]" >
                                        <option></option>
                                        <option>ft</option>
                                        <option>m</option>
                                    </select>-->
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Waist</label>
                            <div class="input-group">
                                <input class="form-control" type="text" id="waist" name="input[]" required />
                                <span class="input-group-addon">
<!--                                    <select name="measure[]">
                                        <option></option>
                                        <option>in</option>
                                        <option>cm</option>
                                    </select>-->
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Hip</label>
                            <div class="input-group">
                                <input class="form-control" type="text" id="hip" name="input[]" required />
                                <span class="input-group-addon">
<!--                                    <select name="measure[]">
                                        <option></option>
                                        <option>in</option>
                                        <option>cm</option>
                                    </select>-->
                                </span>
                            </div>
                        </div>
                    </div>
                    <br /><br />
                    <div class="row">
                        <div class="col-sm-3">
                            <label>Chest</label>
                            <div class="input-group">
                                <input class="form-control" type="text" id="chest" name="input[]" required />
                                <span class="input-group-addon">
<!--                                    <select name="measure[]">
                                        <option></option>
                                        <option>in</option>
                                        <option>cm</option>
                                    </select>-->
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Abdomen</label>
                            <div class="input-group">
                                <input class="form-control" type="text" id="abdomen" name="input[]" required />
                                <span class="input-group-addon">
<!--                                    <select name="measure[]">
                                        <option></option>
                                        <option>in</option>
                                        <option>cm</option>-->
                                    </select>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Thigh</label>
                            <div class="input-group">
                                <input class="form-control" type="text" id="thigh" name="input[]" required />
                                <span class="input-group-addon">
<!--                                    <select name="measure[]">
                                        <option></option>
                                        <option>in</option>
                                        <option>cm</option>
                                    </select>-->
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Waist To Hip</label>
                            <div class="input-group">
                                <input class="form-control" type="text" id="waist_to_hip" name="input[]" required />
                                <span class="input-group-addon">
<!--                                    <select name="measure[]">
                                        <option></option>
                                        <option>in</option>
                                        <option>cm</option>
                                    </select>-->
                                </span>
                            </div>
                        </div>
                    </div>
                    <br /><br />
                    <div class="row">
                        <div class="col-sm-3">
                            <label>BMI</label>
                            <div class="input-group">
                                <input class="form-control" type="text" id="bmi" name="input[]" required />
                                <span class="input-group-addon">
<!--                                    <select name="measure[]">
                                        <option></option>
                                        <option>in</option>
                                        <option>cm</option>
                                    </select>-->
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Heart Rate</label>
                            <div class="input-group">
                                <input class="form-control" type="text" id="heart_rate" name="input[]" required />
                                <span class="input-group-addon">
<!--                                    <select name="measure[]">
                                        <option></option>
                                        <option>in</option>
                                        <option>cm</option>
                                    </select>-->
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Blood Pressure</label>
                            <div class="input-group">
                                <input class="form-control" type="text" id="blood_pressure" name="input[]" required />
                                <span class="input-group-addon">
<!--                                    <select name="measure[]">
                                        <option></option>
                                        <option>in</option>
                                        <option>cm</option>
                                    </select>-->
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Body Fat Percentage</label>
                            <div class="input-group">
                                <input class="form-control" type="text" id="body_fat_percentage" name="input[]" required />
                                <span class="input-group-addon">
<!--                                    <select name="measure[]">
                                        <option></option>
                                        <option>in</option>
                                        <option>cm</option>
                                    </select>-->
                                </span>
                            </div>
                        </div>
                    </div>
                    <br /><br />
                    <div class="row">
                        <div class="col-sm-3">
                            <label>Sit Reach</label>
                            <div class="input-group">
                                <input class="form-control" type="text" id="sit_reach" name="input[]" required />
                                <span class="input-group-addon">
<!--                                    <select name="measure[]">
                                        <option></option>
                                        <option>in</option>
                                        <option>cm</option>
                                    </select>-->
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>V Sit Reach</label>
                            <div class="input-group">
                                <input class="form-control" type="text" id="v_sit_reach" name="input[]" required />
                                <span class="input-group-addon">
<!--                                    <select name="measure[]">
                                        <option></option>
                                        <option>in</option>
                                        <option>cm</option>
                                    </select>-->
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Push Ups</label>
                            <input class="form-control" type="text" id="push_ups" name="input[]" required />
                        </div>
                        <div class="col-sm-3">
                            <label>Sit Ups</label>
                             <input class="form-control" type="text" id="sit_ups" name="input[]" required /> 
                        </div>
                    </div>
                    <br /><br />
                </div>
                <input type="submit" value="Submit" name="submit" />
                <br /><br />
            </form>
          </div>
        </div>
    </body>
</html>

<?php
    //require("login.php");
   if (isset($_POST["submit"])) {

        $dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST');
        $dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT');
        $dbUser = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
        $dbPassword = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
        $dbName = 'index';

        try {
            $array = array("first_name", "last_name", "birth", "email", "phone", "weight", "height", "waist", "hip", "chest", "abdomen", "thigh", "waist_to_hip",
                "bmi", "heart_rate", "blood_pressure", "body_fat", "sit_reach", "v_sit_reach", "push_ups", "sit_ups");
            $newArray = "(".implode(", ", $array).")";
        
            $inputArray = array();
            $measureArray = array();

            foreach($_POST["input"] as $input) {
                $inputArray[] = $input;
            }

            foreach($_POST["measure"] as $measure) {
                $measureArray[] = $measure;
            }
        
            $thisArray = array();

            for ($i = 0; $i < 21; $i++) {
                if ($i >= 5) {
                    $thisArray[] = $inputArray[$i] . ' ' . $measureArray[$i - 4];
                    
                }
                else {
                    $thisArray[] = $inputArray[$i];
                }
            }

            $newInputs = "('".implode("', '", $thisArray)."')";

            $conn = new PDO("mysql:host=$dbHost:$dbPort;dbname=$dbName", $dbUser, $dbPassword);
        
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO people $newArray VALUES $newInputs";

            $conn->exec($sql);
        

        }
    
        catch(PDOException $e)
        {
            echo $sql . "<br/>" . $e->getMessage();
        }
    
        $conn = null;
    }
?>
