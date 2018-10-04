<?php 
  function curPageURL() {
    $pageURL = 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    return $pageURL;
  }
?>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="index.php">拾捌拾吧</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class=<?php 
          if(curPageURL()==("yourwebsite/")||
            curPageURL()==("yourwebsite/index.php")
            ){echo '"active"';}else{echo'""';}?>><a href="index.php">首頁</a></li>

          <li class=<?php 
          if(curPageURL()==("yourwebsite/flash.php")||
            curPageURL()==("yourwebsite/Candy_Crush.php")||
            curPageURL()==("yourwebsite/bubbledg.php")||
            curPageURL()==("yourwebsite/redball.php")||
            curPageURL()==("yourwebsite/brainage.php")||
            curPageURL()==("yourwebsite/ooxx.php")||
            curPageURL()==("yourwebsite/snake.php")){echo '"active"';}else{echo'""';}?>><a href="flash.php">小遊戲</a></li>
          <li class=<?php 
          if(curPageURL()==("yourwebsite/health.php")){echo '"active"';}else{echo'""';}?>><a href="health.php">飲食保健</a></li>
          <li class=<?php 
          if(curPageURL()==("yourwebsite/contactus.php")){echo '"active"';}else{echo'""';}?>><a href="contactus.php">聯絡我們</a></li>
        </ul>
      </div>
    </div>
  </nav>


