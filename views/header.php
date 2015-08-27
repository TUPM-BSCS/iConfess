<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="css/icon.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/confess.css">
    <link href="css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
    <title>iConfess</title>
</head>

<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/sidenav.js"></script>

<ul id="slide-out" class="side-nav" style="height: 600px; margin-top: 65px; width: 400px; overflow-y: hidden">
  <div class="ubar" style="height: 40px;color: white;background-color: #1976d2; padding: 2px;">
    <i class="material-icons" style="font-size: 30px;">public</i></a>
    <i class="material-icons" style="font-size: 30px;">group</i></a>
    <i class="material-icons right" style="font-size: 30px;">dehaze</i></a>
  </div>
  <div class="fcon" style="overflow-y: scroll; height: 90%;">

  </div>
  <div class="divider"></div>
  <div class="chatBottom" style="overflow-y: hidden">
    <form action="" onclick="" id="chatForm" method="post">
      <input type="hidden" id="name" name="name" value=""/>
      <input type="text" name="text" id="text" value="" placeholder="Type your chat message" style="width: 80%;
      padding: 3px;
      border: 1px solid #ddd;
      border-radius: 5px 2px 5px 5px;
      margin: 5px;
      height: 30px;"/>
      <input type="submit" name="submit" value="Send" style="padding: 1px;
      background: #0066FF;
      border: 1px solid #ddd;
      border-radius: 5px;
      color: white;
      cursor: pointer;
      width: 50px;
      height: 30px; margin-bottom: 0px;"/>
    </form>
  </div> 
</ul>
  

<nav>
    <div class="nav-wrapper blue darken-3">
      <ul class="left hide-on-med-and-down navicon">
        <li>
          <a href="index.php?action=home" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Home">
          <i class="material-icons ic" style="font-size: 40px;">home</i></a>
        </li>
        <li>
          <a href="index.php?action=confess" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Confess">
          <i class="material-icons ic" style="font-size: 40px;">description</i></a>
        </li>
        <li>
         <a href="#" data-activates="slide-out" class="button-collapse tooltipped show-on-large" data-position="bottom" data-delay="50" data-tooltip="Chat">
         <i class="material-icons">message</i></a>
        </li>
        <li>
          <a href="" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Bookmark">
          <i class="material-icons ic" style="font-size: 40px;">bookmark</i></a>
        </li>
      </ul>   
      <a href="" class="brand-logo center">iConfess</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down" >
        <li><a class="dropdown-button user-btn" href="#" data-activates="dropdown1">
        username<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
      </ul>
    </div> 

</nav>

<form action="" method="post">
<ul id="dropdown1" class="dropdown-content" >
  <li><a href="">Account</a></li>
  <li><a href="">Confessions</a></li>
  <li class="divider"></li>
  <li><a href="">Log Out</a></li>
</ul>
</form>


        