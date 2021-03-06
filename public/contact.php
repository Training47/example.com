<?php

$data = $_POST;

foreach($data as $key => $value){
  echo "{$key} = {$value}";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Contact Me - Lisa Pena</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/css/main.min.css" type="text/css">
  </head>
  <body>
    <header>
      <span class="logo">Lisa Pena</span>
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
      <form action="contact.php" method="POST">
        
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