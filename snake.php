<?php include('header.php');?>

<body>
	<?php include('bar.php');?>
	<div class="container text-center">    
		<h3>貪吃蛇</h3>
		<br>
		<div class="row">
		    <div class="col-sm-12">
		    	<canvas id="myCanvas" width="300" height="300" style="border:1px solid #d3d3d3;">
					Your browser does not support the HTML5 canvas tag.
				</canvas>
		    </div>
		</div>
	</div>
</body>

<?php include('footer.php');?>





<script>
	alert("按下確定！遊戲即將開始！");
	//r=表示蛇 ； co=蛇前進的方向 ； e=食物
	var ctx = document.getElementById("myCanvas").getContext("2d"),
		r = [{
			x: 10,
			y: 9
		}, {
			x: 10,
			y: 8
		}],
		co = 40,
		e = null;
		var offOn=true;
		var offOn01=true;
		var num=3;
		var count=0;
		var color=["#000","#ff7600"];

	var timer=setInterval(doMove, 200);
	function doMove() {
		//给蛇加上陰影效果
		ctx.shadowBlur = 5, ctx.shadowColor = color[count];
		//遊戲是否已經結束
		if (check(r[0], 0) || r[0].x < 0 || r[0].x >= 30 || r[0].y < 0 || r[0].y >= 30) return;
		e != null && ((co == 40 &&r[0].x == e.x && r[0].y + 1 == e.y) ||
		(co == 38 && r[0].x == e.x && r[0].y - 1 == e.y) || (co == 37 && r[0].x - 1 == e.x && r[0].y == e.y) ||
		(co == 39 && r[0].x + 1 == e.x && r[0].y == e.y)) ? (r.unshift(e), e = null, r.unshift(r.pop())) : (r.unshift(r.pop()));

		(co == 40 || co == 38) ? (r[0].x = r[1].x, r[0].y = r[1].y + (co == 40 ? 1 : -1)) : (r[0].x = r[1].x + (co == 39 ? 1 : -1), r[0].y = r[1].y);
		ctx.clearRect(0, 0, 300, 300);
		ctx.fillStyle=color[0];
		ctx.shadowColor = color[0];
		if (e) ctx.fillRect(e.x * 10, e.y * 10, 10, 10);
		ctx.fillStyle=color[count];
		ctx.shadowColor = color[count];
		for (var i = 0; i < r.length; i++) ctx.fillRect(r[i].x * 10, r[i].y * 10, 10, 10);
		while (e == null || check(e)) e = {
			y: (Math.random() * 30 >>> 0),
			x: (Math.random() * 30 >>> 0)
		};
		/*分数*/
		ctx.fillStyle=color[0];
		ctx.shadowBlur=0;
		ctx.textBaseline="top";
		ctx.textAlign="left";
		ctx.font="12px Arial";
		ctx.fillText("分數:"+(r.length - 2),10,10);

		if (check(r[0], 0) || r[0].x < 0 || r[0].x >= 30 || r[0].y < 0 || r[0].y >= 30) 
			alert("好可惜~\n你獲得：" + (r.length - 2) + "分");

	/*關卡*/
		if((r.length-2)==10){
		if(offOn01){
			clearInterval(timer);
			offOn01=false;
			var timer0=setInterval(function(){
				if(num<=0){
					clearInterval(timer0);
				}
				ctx.clearRect(0, 0, 300, 300);
				ctx.font="20px Arial";
				ctx.textBaseline="middle";
				ctx.textAlign="center";
				ctx.fillText("下一關:"+num,150,150);
				num=--num<0?0:num;	
			},1000);
				setTimeout(function(){
					count=1;
					timer=setInterval(doMove, 100);
				},4000);
			}
		}
		offOn=true;
	}

	document.onkeydown = function(event) {
		if(offOn){
			offOn=false;
			co = event.keyCode >= 37 && event.keyCode <= 40 && (Math.abs(event.keyCode - co) != 2) ? event.keyCode : co;
		}
	}

	function check(e, j) {
		for (var i = 0; i < r.length; i++)
			if (j != i && r[i].x == e.x && r[i].y == e.y) return true;
		return false;
	}
</script>