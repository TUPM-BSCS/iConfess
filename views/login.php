<!DOCTYPE html>
<html>
<head>
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="css/icon.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/confess.css">
  <title>Log In</title>
</head>

<body >
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>

<nav>
    <div class="nav-wrapper">
      <a class="btn right sign waves-effect modal-trigger" data-target="modal1">SIGN UP</a>
      <div class="right" style="margin-right: 10px;">Don't have an account?</div> 
    </div>
</nav>

<div id="modal1" class="modal modal-fixed-footer modal-fixed-header" style="overflow-y: hidden;">
    <div class="modal-header">
      <h4 class="mhead" >SIGN UP</h4>
    </div>
    <div class="modal-content">
      <div class="row container"> 
          <div class="input-field">
            <i class="material-icons prefix">perm_identity</i>
            <input id="first_name" type="text" class="validate">
            <label for="first_name">Username</label>
          </div>
          <div class="input-field">
            <i class="material-icons prefix">email</i>
            <input id="last_name" type="email" class="validate">
            <label for="last_name">Email</label>
          </div>
          <div class="input-field">
            <i class="material-icons prefix">lock</i>
            <input id="last_name" type="password" class="validate">
            <label for="last_name">Password</label>
          </div>
          <div class="input-field">
            <i class="material-icons prefix">lock</i>
            <input id="last_name" type="password" class="validate">
            <label for="last_name">Confirm Password</label>
          </div> 
      </div>
    </div>
    <div class="modal-footer">
    <button class="btn waves-effect waves-light right signin blue darken-3" type="submit" name="action">SUBMIT</button> 
    </div>
  </div>


<div class="container">
  <div class="row">
    <div class="col s7 quote">
      <h1>Welcome to University Confessions!</h1>
      <p>Confess here, Confess there, Confessions everywhere!<br></p>
      <p>Lorem ipsum dolor sit amet, animal tritani cu est. Ad duo dicta dicunt nusquam, harum disputationi cu per. Virtute deserunt eu vel, ea nec quis solum dolorem. Vis ne percipit persequeris.<br>
      Ea vel veniam voluptaria, probatus conceptam his in. His nostrud offendit ei, hinc libris vix ut. Has ut soluta commodo, cu vel debet nostro. Purto apeirian tractatos per ad, pro id quod urbanitas.<br>
      Te sint postulant reformidans pri. Duo homero commodo ex, an iudico phaedrum per. In nominati intellegam vis. Te nec adipiscing repudiandae, te sea menandri democritum efficiantur, et sea maiorum pertinax mediocrem. Cu quo clita everti, te reque antiopam nec. Id per saepe feugait complectitur, ut vel consul iudicabit dignissim.</p>
    </div>
    <div class="col s4 log z-depth-1">
      <div class="row container"> 
      <form action="" method="post">
          <div class="input-field">
            <input id="username" name="username" type="text" class="validate" required/>
            <label for="username">Username</label>
          </div>
          <div class="input-field">
            <input id="last_name" name="password" type="password" class="validate">
            <label for="last_name">Password</label>
          <div>
            <a href="#" class="" style="margin-left: 50px;">Forgot Password?</a>
            <button class="btn waves-effect waves-light right signin blue darken-3" type="submit" name="login">Sign In</button> 
          </div> 
          </div>  
      </form>  
      </div>
      </div>
    </div>
  </div>
</div>
<footer class="page-footer  blue accent-2">
    <div class="container">
          <p>About&emsp;Help&emsp;Blog&emsp;Status&emsp;Jobs&emsp;Terms
          &emsp;Privacy&emsp;Ads&emsp;info&emsp;Brand&emsp;Advertise&emsp;
          Businesses&emsp;Media&emsp;Developers&emsp;Director</p>
          &copy; 2015 Copyright
    </div>
</footer> 
<script>
$(document).ready(function() {
  // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
  $('.modal-trigger').leanModal({dismissible: true});
});

<?php

  if(isset($_POST['login']))
  {
    if(empty($_POST['username']) || empty($_POST['password'])){
      
    }
    else{
      include "models/check_account.php";
      $person = new customer($_POST['email'],$_POST['password']);
    }
  }

 ?>

</script>
</body>
</html>
        