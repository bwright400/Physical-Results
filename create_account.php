<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <meta charset="UTF-8">
        <title>Sign-Up/Login Form</title>
        <script type="text/javascript" src="js/signin.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link id="switcher" href="css/themes/blue-theme.css" rel="stylesheet">   
        <link href="style.css" rel="stylesheet">    
        <link href="css/signin.css" rel="stylesheet" />

        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>  
        <link href='http://fonts.googleapis.com/css?family=Habibi' rel='stylesheet' type='text/css'>   
        <link href='http://fonts.googleapis.com/css?family=Cinzel+Decorative:900' rel='stylesheet' type='text/css'>

    </head>
    <body>
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
                            <a class="navbar-brand" href="index.html"><!--<i class="fa fa-heartbeat"></i>-->Physical <span>Fitness</span></a>              
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="features.html">Features</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li name="contact"><a href="contact.html">Contact</a></li>
                                <li><a href="#">Sign In</a>
                            </ul>           
                        </div>
                    </div>     
                </nav>  
            </div>
        </header>
        <br/><br/><br/><br/><br/><br/>
        <section id="account-page">
            <div class="container main">
                <form role="form" method="post">
                    <h1>Login</h1>
                    <br/>
                    <div class="form-group">
                        <div class="row"></div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>First Name</label>
                                <input class="form-control" />
                            </div>
                            <div class="col-sm-6">
                                <label>Last Name</label>
                                <input class="form-control" />        
                            </div>
                        </div>
                        <br/>
                        <div class="row align">
                            <div>
                                <label>Email</label>
                                <input class="form-control" />
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Password</label>
                                <input class="form-control" />
                            </div>
                            <div class="col-sm-6">
                                <label>Confirm Password</label>
                                <input class="form-control" style=""/>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <button class="submit" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
                <br/>
            </div>
        </section>
    </body>
</html>