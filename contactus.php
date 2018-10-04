<?php include('header.php');?>

<body>
  <?php include('bar.php');?>

	<div class="container text-left">    
	  <h3>聯絡我們</h3>
	  <br>
	  <div class="row">
	    <div class="col-sm-12" style="background-color:#DDDDDD;padding-top: 1%;padding-bottom: 1%">
		    <div class="col-sm-12" style="background-color:#DDDDDD;padding-top: 1%;padding-bottom: 1%">
		      * 為必填資料欄位
		    </div>
		    <form action="contactus_finish.php" method="post">
			    <div class="col-sm-12" style="background-color:#DDDDDD;padding-top: 1%;padding-bottom: 1%">
			      主旨 *	<input type="text" class="form-control" id="theme" name="theme" placeholder="主旨">
			    </div>
			    <div class="col-sm-12" style="background-color:#DDDDDD;padding-top: 1%;padding-bottom: 1%">
			      姓名	 *	<input type="text" class="form-control" id="name" name="name" placeholder="姓名">
			    </div>
			    <div class="col-sm-12" style="background-color:#DDDDDD;padding-top: 1%;padding-bottom: 1%">
			      EMAIL *	<input type="email" class="form-control" id="email" name="email" placeholder="EMAIL">
			    </div>
			    <div class="col-sm-12" style="background-color:#DDDDDD;padding-top: 1%;padding-bottom: 1%">
			      電話	<input type="text" class="form-control" id="phone" name="phone" placeholder="電話">
			    </div>
			    <div class="col-sm-12" style="background-color:#DDDDDD;padding-top: 1%;padding-bottom: 1%">
			      留言 *	<textarea class="form-control" rows="5" id="comment" name="comment" placeholder="留言內容"></textarea>
			    </div>
			    <button type="submit" class="col-sm-12 btn btn-danger">OK</button>
		    </form>
	    </div>
	  </div>
	  <hr>
	</div>
</body>

<?php include('footer.php');?>