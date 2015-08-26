<?php
$user = $_GET['user'];
?>

<html>
<head>
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="css/icon.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/chat.css">
    <link href="css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
    <title>iChat</title>
</head>

<body>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>

<nav>
    <div class="nav-wrapper blue darken-3">
    <a href="" class="brand-logo left">iChat</a>
      <ul class="right hide-on-med-and-down navicon">
        <li>
          <a href="" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Global">
          <i class="material-icons ic">public</i></a>
        </li>
        <li>
          <a href="" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Private">
          <i class="material-icons ic">people</i></a>
        </li>
      </ul>   
    </div> 
</nav>

<div class="row blue darken-2" style="margin-bottom: 0px;">
	<div class="col s10"></div>
	<div class="col s2"><?php echo ucwords($user) ?></div>
</div>

<div class="chatCont">
  <div class="chatMessages">

  <?php

  $db = new PDO('mysql:host=127.0.0.1;dbname=chat','root','');

  $query = $db->prepare("SELECT * FROM messages");
  $query->execute();

  while($fetch = $query->fetch(PDO::FETCH_ASSOC))
  {
    $name = $fetch['name'];
    $message = $fetch['messages'];

    echo "<li class='cm'><b>".ucwords($name)."</b>:".$message."</li>";
  }
  ?>
  
  </div>
  <div class="chatBottom">
    <form action="" onclick="" id="chatForm" method="post">
      <input type="hidden" id="name" name="name" value="<?php echo ucwords($user) ?>"/>
      <input type="text" name="text" id="text" value="" placeholder="Type your chat message"/>
      <input type="submit" name="submit" value="Send"/>
    </form>
  </div>
</div>

<script type="text/javascript" src="js/chat.js"></script>
<?php

  if(isset($_POST['name']) && isset($_POST['text']))
  {
    if(!empty($_POST['name']) && !empty($_POST['text']))
    {
      include "chatPoster.php";
    }
  }

 ?>

</body>
</html>