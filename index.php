<!DOCTYPE html>
<html><head> <title>jQuery goes to DOM -ville</title>
<style type="text/css">
#change_me{
	position: absolute;
	top: 100px;
	left: 400px;
	font: 24px arial;
}
#move_up #move_down #color #disappear{
	padding: 5px;
}

</style>
<script src="scripts/jquery-2.2.2.min.js"></script>
</head>
<body>
<button id="move_up">Move up</button>
<button id="move_down">Move Down</button>
<button id="color">change color</button>
<button id="disappear">Disappear/Re-appear</button>

<div id="change_me">Make Me Do Stuff!</div>
<script type="text/javascript">
$(document).ready(function(){
	$("#move_up").click(function(){
		$("#change_me").animate({top:30},200);
	});
	$("#move_down").click(function(){
		$("#change_me").animate ({top:500},2000);
	});
	$("#color").click(function(){
		$("#change_me").css("color", "purple");
	});
	$("#disappear").click(function(){
		$("#change_me").toggle("slow");
	});
});
</script>
</body>
</html>