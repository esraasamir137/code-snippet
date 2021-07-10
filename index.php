<?php session_start(); ?>
<?php include('pages/db/dbconnect.php');?>
<?php
    
    if(isset($_POST["submit"])){
      $str = $_POST["search"];
      $sth = $conn->prepare("SELECT * FROM 'search' WHERE Name = '$str'");

      $sth->setFeatchMode();}
    
?>

<html>
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/all.min.css">
      <link rel="stylesheet" href="assets/css/bootstrap.css"/>
      
      <script src="assets/js/jquery.min.js" ></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/validate.js"></script>
      <script src="assets/js/html5shiv.min.js"></script>
      <script src="assets/js/respond.min.js"></script>

      <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;800&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">

<i class="fas fa-laptop-code"></i>

<a class="navbar-brand text-danger p-r-3" href="#">Snippet</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav  ml-auto px-4 ">
    <li class="nav-item px-4 ">
      <form class="form-inline my-2 my-lg-0">
      <input autocomplete="false" value="" name="s" id="s-modal" type="text" placeholder="Search Cloudways Blog" class="form-control search_form cw-blog-catg-nav-search">
        <input class="btn btn-outline-primary" type="submit" name = "submit" >

    </li>
    <li class="nav-item">
      <a class="nav-link text-info" href="#">Home</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  href="#" id="navbardrop" data-toggle="dropdown">Features </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="pages/articles/articles/articales.php">Articales</a>
            <a class="dropdown-item" href="#">view cources</a>
         </div>
      </li>
        <li class="nav-item">
          <a class="nav-link text-info" href="pages/about-us.php">About us</a>
        </li>


  </ul>
  </form>
</div>


<button class="btn btn-outline-dark"
  onclick="window.location.href='pages/Login_v7/Login_v7/index.php'">SignUp/login</button>
  
  <!-- <button class="btn btn-outline-dark"
      onclick="window.location.href=''">logOut</button> -->
  
</nav>
        <?php if(isset($_SESSION['success']));?>
			       
				   
           
				   <?php {unset($_SESSION['success']);}?>
                  
           <?php if(isset($_SESSION ["error"]));?>
         <div class='alert alert-danger fade in'><?php echo $_SESSION['error']; ?> </div>
         <?php {unset($_SESSION['error']);} ?>
			       
      <section>
        <div class="container sec-one ">
          <div class="row">
            <div class="col-lg-6 col-md-12 ">
              <div class="item">
              <h2>Unleash your imagination</h2>
                <br>
                <div>
                Community is about trust and sharing. code Snippet lets you find your Suitable design accurately & smoothly. its time to keep your works save and secure ,in addition look at others work .
                </div>
                <div class="py-5">
                <button class="btn btn-outline-danger btn-lg" onclick= "window.location.href='pages/Login_v7/Login_v7/index.php'">add code</button>
                <button class="btn btn-outline-dark btn-lg ">watch video <i class="far fa-play-circle"></i></button>
              </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 ">
              <div class="item">
                <img class="img-fluid img1" src="assets/images/4384-fitandcrop-870x490.jpg">
                </div>
              </div>
              
                </div>
              </div>
      </section>
      <section>
        <div class="container sec-one ">
          <div class="row">
            
            <div class="col-lg-5 col-md-12 ">
              <div class="item">
                <img class="img-fluid img1" height="45%" src="assets/images/share-source-code-file-script-vector-icon-sharing-grey-orange-brackets-social-181057761.jpg">
             </div>
            </div>
              <div class="col-lg-7 col-md-12 ">
                <div class="item">
                <h2>What's great about code snippet?</h2>
                  <br>
                  <div>
                    shering code  , reach any imagined design , learn coding with many <br>sources and discover how your taken code is made.
                  </div>
                </div>
              </div>
             </div>
          </div>
        </section>
      <section class="Ques" >
    <h2 class="header1 text-center text-danger">What can you do with code snippet?</h2>
    <div class="text-center paragraph">
      you can publish your code for community to know there opinion & find <br>any design code you need.
    </div>
    <div class="container sec-one ">
      <div class="row">
        <div class="col-lg-6 col-md-12 ">
          <div class="item">
            <img class="img-fluid img1" src="assets/images/blog-image-02-1.png">
            </div>
          </div>
        <div class="col-lg-6 col-md-12 ">
            <div class="item">
            <h2 class="text-info">sharing codes</h2>
              <br>
              <div>
                 post your code for programmer & share your success.
              </div>
             </div>
            </div>
          </div>
         </div>
             <div class="container sec-one ">
                <div class="row">
                  <div class="col-lg-6 col-md-12 ">
                        <div class="item">
                          <h2 class="text-info">comment on posted codes</h2>
                          <br>
                          <div>
                            now you can see others comment on your code and other <br>codes you need to take in addition post editing.
                          </div>
                        </div>
                      </div>
                 <div class="col-lg-6 col-md-12 ">
                     <div class="item">
                          <img class="img-fluid img1" src="assets/images/comment-512.png">
                     </div>
                    </div>
                   </div>
                 </div>
              <div class="container sec-one ">
                     <div class="row">
                            <div class="col-lg-6 col-md-12 ">
                              <div class="item">
                                <img class="img-fluid img1" src="assets/images/967571.png">
                                </div>
                              </div>
                              <div class="col-lg-6 col-md-12 ">
                                <div class="item">
                                <h2 class="text-info">find your code </h2>
                                  <br>
                                  <div>
                                  if you wanna specific code you can post it.
                                </div>
                              </div>
                              </div>
                                </div>
                              </div>
                      </section>
   <section class="footer">
    <div class="container ">
      <div class="row">
        <div class="col-lg-6 col-md-12 ">
          <div class="item py-2">
            <h3> <i class="fas fa-laptop-code"></i> code snippet</h3>
            <p>Make your community sustainable.

            </p>
        </div>
        </div>
        <div class="col-lg-6 col-md-12 ">
          <div class="item py-4">
           <h3><i class="fab fa-twitter-square"></i>
             <i class="fab fa-slack"></i> 
             <i class="fab fa-github"></i>
             <i class="fas fa-envelope-square"></i></div></h3>
        </div>
        </div>
      </div>
   </section>
     
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>