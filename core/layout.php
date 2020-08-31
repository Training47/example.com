<!-- Set session in php -->
<?php
function active($name){
  $current = $_SERVER['REQUEST_URI'];
  if($current === $name){
    return 'active';
  }

  return null;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
<!-- Add sanitized content -->
<?php if(!empty($meta)): ?>

<?php if(!empty($meta['title'])): ?>
  <title><?php echo $meta['title']; ?></title>
<?php endif; ?>

<?php if(!empty($meta['description'])): ?>
  <meta name="description" content="<?php echo $meta['description']; ?>">
<?php endif; ?>

<?php if(!empty($meta['keywords'])): ?>
  <meta name="keywords" content="<?php echo $meta['keywords']; ?>">
<?php endif; ?>

<?php endif; ?>
<!-- End sanitized content -->

      <meta charset="UTF-8">
      <title>About Lisa Pena</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  </head>
  <body>
<!--Webpage Content-->
    <div class="Container">
      <!--Nav Bar-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
            <a class="navbar-brand" href="#">Lisa Peña Blog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                 <li class="nav-item">
                  <a class="nav-link <?php echo active('/'); ?>" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link <?php echo active('/'); ?>" href="resume.php">Resume</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link <?php echo active('contact5.php'); ?>" href="./contact5.php">Contact</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link <?php echo active('/posts/'); ?>" href="./posts/index.php">Posts</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link <?php echo active('/users/'); ?>" href="./users/index2.php">Users</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link <?php echo active('register.php'); ?>" href="register.php">Register</a>
                </li>

                <li class="nav-item">
                  <?php if(!empty($_SESSION['user']['id'])): ?>
                    <a class="nav-link" href="./logout.php">Logout</a>
                    
                  <?php else: ?>
                    <a class="nav-link <?php echo active('login.php'); ?>" href="./login.php">Login</a>
                  <?php endif; ?>
                </li>
               <!-- <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
              </div>
            </div>
      </nav>    

  <div class="jumbotron">
  <h1 class="display-4">Lisa Peña</h1>
    <h5><strong>Full Stack Web and Hybrid Mobile Applications Developer</strong><h5>
  <hr class="my-4">
  <div id = "description">
    <p class="lead">Detail-oriented and resourceful professional with demonstrated track record of achievement in fields ranging from education to academic retail.  Driven to
      achieve results and exceed expectations to ensure an organization's long-term success.
      Recently achieved certification of Udacity Front End Web Development Nanodegree to supplement
      current skills and advance.  Additional training is currently underway in Full Stack
      Developer program with MicroTrain Technologies.
    </p>
    </div>   
        
     <!--Content Card Start-->
<div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
        <p class="card-text"><?php echo $content;?></p>
      </div>
  <div class="card-footer text-muted">
        Created August 2020
      </div>
      <!-- End Content Card -->
      </div>

          <!-- Footer -->
          <footer class="footer font-small blue pt-4">

          <!-- Footer Links -->
          <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-md-6 mt-md-0 mt-3">

                <!-- Content -->
                <h5 class="text-uppercase">Locations</h5>
                <p>Batavia | Geneva | St. Charles</p>

              </div>
              <!-- Grid column -->

              <hr class="clearfix w-100 d-md-none pb-3">

              <!-- Grid column -->
              <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">Batavia</h5>

                <ul class="list-unstyled">
                  <li>
                    <a href="#!">Map</a>
                  </li>
                </ul>

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">Geneva</h5>

                <ul class="list-unstyled">
                  <li>
                    <a href="#!">Map</a>
                  </li>
                </ul>

              </div>
              
            </div>
            <!-- Grid row -->

          </div>
          <!-- Footer Links -->

          <!-- Copyright -->
          <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://microtrain.net/"> microtrain.net</a>
          </div>
          <!-- Copyright -->

          </footer>
          <!-- Footer -->

      </div>

    
      </div>     
         
    </div>
<!-- <script>
        var toggleMenu = document.getElementById('toggleMenu');
        var nav = document.querySelector('nav');
        toggleMenu.addEventListener(
          'click',
          function(){
            if(nav.style.display=='block'){
              nav.style.display='none';
            }else{
              nav.style.display='block';
              }
            });         ;
          
            
      </script>  -->
  </body>

</html>

