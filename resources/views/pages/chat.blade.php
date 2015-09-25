@extends('app')

@section('content')
<body>

<div class="cont">
<div class="chatName" style="font-size: 30px; color: white;">
    &nbsp;Public
</div>

<!--Not yet final. Just to see if it gets the information in the database. Grrrrr-->
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

  <div class="chatBottom2">
    <form action="" onclick="" id="chatForm" method="post">
      <input type="hidden" id="name" name="name" />
      <input type="text" name="text" id="text" value="" placeholder="Type your chat message"/>
      <input type="submit" name="submit" value="Send"/>
    </form>
  </div>
</div>
</div>


<script type="text/javascript" src="js/chat.js"></script>
</body>


@endsection