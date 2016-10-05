
<?php
    require('login.php');
    $db = new PDO("mysql:host=$dbHost:$dbPort;dbname=$dbName", $dbUser, $dbPassword);

    $query = 'SELECT * FROM people;';

    $statement = $db->prepare($query);
    $statement->execute();
    $datas = $statement->fetchAll();
    $statement->closeCursor();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Material Design - Responsive Table</title>
        <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/display.css">
<!--        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>-->
        <!-- Table Constructor change table classes, you don't need it in your project -->
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="js/index.js"></script>
    </head>
    <body> 
        <div id="demo">
            <h1>Material Design Responsive Table</h1>
            <h2>Table of my other Material Design works (list was updated 08.2015)</h2>
            <!-- Responsive table starts here -->
            <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
            <div class="table-responsive-vertical shadow-z-1">
            <!-- Table starts here -->
                <table id="table" class="table table-hover table-mc-light-blue">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Birth</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Results</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            try {
                                foreach($datas as $data) {
                                    echo '<tr>'
                                            . '<tr>'
                                                . '<td data-title="First Name">' . $data['first_name'] . '</td>'
                                                . '<td data-title="Last Name">' . $data['last_name'] . '</td>'
                                                . '<td data-title="Birth">' . $data['birth'] . '</td>'
                                                . '<td data-title="Email">' . $data['email'] . '</td>'
                                                . '<td data-title="Phone Number">' . $data['phone'] . '</td>'
                                                . '<td data-title="Results">'
                                                    . '<form action="" method="post">'
                                                        . '<button type="submit" class="results" name="button[]">'
                                                              . $data['first_name'] .'\'s' . '&nbsp Results'
//                                                            . '<span class="glyphicon glyphicon-circle-arrow-right"></span>' 
                                                        . '</button>'
                                                    . '</form>'
                                                . '</td>'
                                            . '</tr>'
                                        . '</tr>';
                                }
                            } 
                            catch (PDOException $ex) {
                                echo $sql . "<br/>" . $ex->getMessage();
                            }        
                            
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
  </body>
</html>



<!--<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="form.js" type="text/javascript"></script>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <link rel="stylesheet" type="text/css" href="display.css" />
    </head>
    <body style="text-align: center">
        <div class="container">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Birth</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Results</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            //if (isset($_POST['finish'])) {
//                                try {
//                                    foreach($datas as $data) {
//                                        echo '<tr>'
//                                                . '<tr>'
//                                                    . '<td>' . $data['first_name'] . '</td>'
//                                                    . '<td>' . $data['last_name'] . '</td>'
//                                                    . '<td>' . $data['birth'] . '</td>'
//                                                    . '<td>' . $data['email'] . '</td>'
//                                                    . '<td>' . $data['phone'] . '</td>'
//                                                    . '<td>'
//                                                        . '<form action="" method="post">'
//                                                            . '<button type="submit" class="results" name="button[]">'
//                                                                . '<span class="glyphicon glyphicon-circle-arrow-right"></span>' 
//                                                            . '</button>'
//                                                        . '</form>'
//                                                    . '</td>'
//                                                . '</tr>';
//                                    }
//                                } catch (PDOException $ex) {
//                                    echo $sql . "<br/>" . $ex->getMessage();
//                                }
                            //}
                            
                            ?>
                    </tbody>
                </table>    
            </div>
        </div>
    </body>
</html>-->