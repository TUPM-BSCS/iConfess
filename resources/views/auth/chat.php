@extends('app')

@section('content')

<body>
<nav>
    <div class="nav-wrapper blue darken-3">
    <a href="" class="brand-logo left">iChat</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down"  >
        
      </ul>
    </div> 
</nav>

<div class="row">
<div class="col s9">

<div class="cont">
<div class="chatName" style="font-size: 30px; color: white;">
    <i class="material-icons ic">public</i>&nbsp;Public
</div>

<div class="chatCont">
  <div class="chatMessages">
  <h2>Rona: Hello</h2>
  <h2>Rona: Hello</h2>
  <h2>Rona: Hello</h2>
  <h2>Rona: Hello</h2>
  <h2>Rona: Hello</h2>
  <h2>Rona: Hello</h2>
  <h2>Rona: Hello</h2>
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
<!--2nd chat box-->
<div class="cont">
<div class="chatName" style="font-size: 30px; color: white;">
   Chat with:
</div>

<div class="chatCont">
  <div class="chatMessages">

  
  </div>
  <div class="chatBottom2">
    <form action="" onclick="" id="chatForm" method="post">
      <input type="hidden" id="name" name="name"/>
      <input type="text" name="text" id="text" value="" placeholder="Type your chat message"/>
      <input type="submit" name="submit" value="Send"/>
    </form>
  </div>
</div>
</div>
</div>

<div class="col s3">
  <div class="fcon">
    <div class="ubar">Friend List</div>
    <div class="nlist">
        <ul>
          <div class="divider"></div>
          <li>@theguyinyellow</li><div class="divider"></div>
          <li>@pepengpinakamalupet</li><div class="divider"></div>
          <li>@kesongputi</li><div class="divider"></div>
          <li>@oochinito</li><div class="divider"></div>
          <li>@sofab</li><div class="divider"></div>
          <li>@crownaaaa</li><div class="divider"></div>
          <li>@rushty17</li><div class="divider"></div>
          <li>@kimberlycc_</li><div class="divider"></div>
          <li>@nhomarramos</li><div class="divider"></div>
          <li>@enzo0302</li><div class="divider"></div>
          <li>@jamieraaa</li><div class="divider"></div>
          <li>@daedykun</li><div class="divider"></div>
          <li>@claudz</li><div class="divider"></div>
          <li>@jhearmacaranas</li><div class="divider"></div>
          <li>@julievicente</li><div class="divider"></div>
          <li>@ayieshaerni</li><div class="divider"></div>
        </ul>
    </div>
  </div>
</div>
</div>

<script type="text/javascript" src="js/chat.js"></script>
</body>

@endsection