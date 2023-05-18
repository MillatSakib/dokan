<!DOCTYPE html>
<?php
if(isset($_POST['submit'])){
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $us= 'admin';
    $pas= 'admin';
    if(($user== $us) && ($pass== $pas)){
        header("Location: index.html");
die();
    }
}
?>
<html>
    <head>
       <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <title>Snigdha Ditgital Studio</title>
        </head>
        <body style="background-color:rgb(148, 225, 255);">
          



            
            <nav class="navbar">
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about_us.html">About Us</a></li>
                  <li><a href="services.html">Services</a></li>
                  <li><a href="contact.html">Contact</a></li>
                  <li><a href="feedback.html">Feedback</a></li>
                </ul>
              </nav>
        </br>







        <div class="form">
            <form id="test" class="inputfiled" method="post">
                <h4 class="username_input">Username &nbsp;&nbsp;&nbsp;&nbsp;
                    <i class ="fas fa-user"></i>
                    &nbsp;&nbsp;<input type="text" name="username" placeholder="Type your User ID" id="username" required> </h4>
                <section class="pass">
                    <h4 class="password_input">Password  &nbsp;&nbsp;&nbsp;
                        <i class ="fas fa-lock"></i>
                        &nbsp;&nbsp;<input type="password" id="password" name="password" placeholder="Type your User Password" required>
                    </h4>
                </section>
                <section class="button">
                <section class="bt1">
                    <input type="submit" name="submit" value="Log in">
                </section>
            </section>
            </section>
            </form>
        </div>
                <script>
                    window.onload=function(){
                        document.getElementById("test").onsubmit=function() {
                    var user_name= document.getElementByid("username").value;
                    var pass = document.getElementById('passeword').value;
                    if(user_name=="01728806416" && password pass== "12157701972"){
                        alart("Login successfull!")
                        window.location.href=dashboard.html;
                    }
                    else{
                        alart("Wrong Input.");
                    }
                }
                    </script>
          <footer>
            <p><address>Author: Md. Sohan Millat Sakib</br>
              Email:&nbsp;<a href="mailto:millatsakib01@gmail.com" class="foota">millatsakib01@gmail.com</a></br>
              Studing At <a href="https://green.edu.bd/" class="foota">Green University of Bangaldesh</a>
              <div class="developer"><br><br>Developed By Mill@t&nbsp;&nbsp;</div>
                </address></p></footer>
        </body>
        </html>