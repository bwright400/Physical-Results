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
                <li name="contact"><a href="contact.html">Contact</a></li>
                <li><a href="#">Sign In</a>
              </ul>           
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
    <br/><br/><br/><br/><br/><br/>
    <?php
        //if (isset($_POST['sign_in'])) {
    ?>
        <section id="signin-page">
            <div class="container main">
                    <form role="form" method="post">
                        <h1>Sign In</h1>
                        <div class="form-group">
                            <div class="row">
                                <div class="signin">
                                    <label>Username</label>
                                    <input class="form-control" required />
                                </div>
                            </div>
                          <div class="row">
                              <div class="signin">
                                  <label>Password</label>
                                  <input class="form-control" required />        
                              </div>
                          </div>
                          <br/>
                          <div class="row">
                              <div>
                                  <button type="submit" class="submit">Sign In</button>
                              </div>
                          </div>
                          <br/>
                          <div class="row">
                             <button type="button" class="btn btn-link" id="account">New Account</button>
                             &nbsp;&nbsp;&nbsp;&nbsp;
                             <button type="button" class="btn btn-link">Forgot Password</button>
<!--                              <div class="col-sm-6">
                                  <button type="button" class="btn btn-link">Forgot Password</button>
                              </div>
                              <div class="col-sm-6">
                                  <button type="button" class="btn btn-link">Create Account</button>
                              </div>-->
                          </div>
                      </div>
                  </form>
            </div>
        </section>
        <?php
            function account() {
        ?>
            <section id="account-page">
                <div class="container main">
                    <form role="form" method="post">
                        <h1>Login</h1>
                        <br/>
                        <div class="form-group">
                            <div class="row">
                            </div>
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
    <?php
        }
    ?>

<br/><br/><br/><br/>
        <footer id="footer" style="text-align: left">
       <!--Start Footer Top--> 
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single-footer-widget">
                <div class="section-heading">
                    <h2>About Us</h2>
                    <div class="line"></div>
                </div>       
                  <p>Paper and Pencil was so last century ago. Throw it all away and move to the electronic app and save all your participants data on a secure server. </p>  
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2>Our Service</h2>
                <div class="line"></div>
              </div>
              <ul class="footer-service">
                <li><a href="#"><span class="fa fa-check"></span>Service 1</a></li>
                <li><a href="#"><span class="fa fa-check"></span>Service 2</a></li>
                <li><a href="#"><span class="fa fa-check"></span>Service 3</a></li>
                <li><a href="#"><span class="fa fa-check"></span>Service 4</a></li>
                <li><a href="#"><span class="fa fa-check"></span>Service 5</a></li>
              </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2>Tags</h2>
                <div class="line"></div>
              </div>
                <ul class="tag-nav">
                  <li><a href="#">Dental</a></li>
                  <li><a href="#">Surgery</a></li>
                  <li><a href="#">Pediatric</a></li>
                  <li><a href="#">Cardiac</a></li>
                  <li><a href="#">Ophthalmology</a></li>
                  <li><a href="#">Diabetes</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2>Contact Info</h2>
                <div class="line"></div>
              </div>
              <p>To contact the Developer about any questions or concerns</p>
              <br/>
              <address class="contact-info">
                <p><span class="fa fa-phone"></span>1.919.880.5403</p>
                <p><span class="fa fa-envelope"></span>bwright400@gmail.com</p>
              </address>
              </div>
            </div>
          </div>
        </div>
      </div>
       <!--Start Footer Middle--> 
      <div class="footer-middle">
        <div class="container">
          <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="footer-copyright">
              <p>&copy; Copyright 2015 <a href="index.html">WpF Medinova</a></p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="footer-social">              
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-twitter"></span></a>
                <a href="#"><span class="fa fa-google-plus"></span></a>
                <a href="#"><span class="fa fa-linkedin"></span></a>     
            </div>
          </div>
        </div>
        </div>
      </div>
       <!--Start Footer Bottom--> 
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p>Design & Developed By Ben Wright</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    </body>
</html>

<!--      <div class="container main">
          <br/>
          <form role="form" method="post">
              <h1>Sign In</h1>
              <div class="form-group">
                  <div class="row">
                      <div class="signin">
                          <label>Username</label>
                          <input class="form-control" required />
                      </div>
                  </div>
                  <br/>
                  <div class="row">
                      <div class="signin">
                          <label>Password</label>
                          <input class="form-control" required />        
                      </div>
                  </div>
                  <br/>
                  <div class="row">
                      <div>
                          <button type="submit" class="submit">Sign In</button>
                      </div>
                  </div>
              </div>
          </form>-->