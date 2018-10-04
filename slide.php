<div class="container">
<div class="row">
  <div class="col-sm-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <a href="http://www.commonhealth.com.tw/article/article.action?nid=72529">
            <img src="./img/maxresdefault.jpg" alt="Image">
          </a>    
        </div>
        <div class="item">
          <a href="https://news.tvbs.com.tw/fun/842570">
          <img src="./img/grandma.jpg" alt="Image">
        </a>
        </div>
      </div>



      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="col-sm-4">
    <div >
      <h1 align="center" style="font-weight:bold;">活動資訊</h1>
    </div>
    <div class="container text-center">
      <br>
      <div class="row">
        <div class="col-sm-4">
          <?php include('fullcalendar.php'); ?>
    </div>
  </div>
</div>
<hr>
</div>