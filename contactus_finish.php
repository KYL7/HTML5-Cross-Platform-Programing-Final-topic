<?php include('header.php');?>
  <?php session_start(); 
    include("mysql_connect.php");
  ?>
<body>
  	<?php include('bar.php');?>  
  	<?php 
		$theme = $_POST['theme'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$comment = $_POST['comment'];

		$sql = "INSERT INTO contactus (theme, name , email, phone, comment) VALUES ('$theme','$name','$email','$phone','$comment')";
		$result = mysqli_query($link,$sql);
		echo '<div class="alert alert-success container text-center">
  				<strong>發送成功!</strong></div>';
		echo '<meta http-equiv=REFRESH CONTENT=1;url=contactus.php>';
	?>
</body>

<?php include('footer.php');?>
