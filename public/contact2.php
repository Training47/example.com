<?php
//Create a RegEx pattern to determine the validity of the use submitted email
// - allow up to two strings with dot concatenation any letter, any case any number with _- before the @
// - require @
// - allow up to two strings with dot concatenation any letter, any case any number with - after the at
// - require at least 2 letters and only letters for the domain
$validEmail = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/";

//Extract $_POST to a data array
$data = $_POST;

//Create an empty array to hold any error we detect
$errors = [];

foreach($data as $key => $value){
  echo "{$key} = {$value}<br><br>";

  //Use a switch statement to change your behavior based upon the form field
  switch($key){
      case 'email':
        if(preg_match($validEmail, $value)!==1){
            $errors[$key] = "Invalid email";
        }

      break;

      default:
        if(empty($value)){
            $errors[$key] = "Invalid {$key}";
        }
      break;
  }

}

var_dump($errors);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Contact Me - Lisa Pena</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/dist/css/main.min.css" type="text/css">
  </head>
  <body>
    <header>
      <span class="logo">My Website</span>
      <a id="toggleMenu">Menu</a>
      <nav>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="resume.html">Resume</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav>
    </header>
    <main>

      <h1>Contact Me - Lisa Pena</h1>
      <form action="contact2.php" method="POST">
        
        <input type="hidden" name="subject" value="New submission!">
        
        <div>
          <label for="name">Name</label>
          <input id="name" type="text" name="name">
        </div>

        <div>
          <label for="email">Email</label>
          <input id="email" type="text" name="email">  
        </div>

        <div>
          <label for="message">Message</label>
          <textarea id="message" name="message"></textarea>
        </div>

        <div>
          <input type="submit" value="Send">
        </div>

      </form>
      
    </main>
    <script>
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
          }
        );
      </script>
  </body>
</html>