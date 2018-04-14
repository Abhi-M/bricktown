<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Internal CSS | BrickTown</title>
<link rel="stylesheet" href="siimple.css">
<link href="favicon.png" rel="icon" type="image/x-icon">
<script>
var random = getRandomInt(9999);

function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max));
}
</script>
<style>
#trick123{
	display:none;
}
</style>
</head>
<body>

<div class="siimple-grid">
  <div class="siimple-grid-row">
    <div class="siimple-grid-col siimple-grid-col--12">
		<div class="siimple-box">
		  <div class="siimple-box-title">Disable Internal CSS</div>
		  <div class="siimple-box-subtitle">Find the four digit hidden value</div>
		  <div class="siimple-box-detail" id="content"></div>
		</div>
		<div id="trick123"></div>
		<div>
			Input: <input type="text" id="guess" name="name" value="0">
			<input onclick="verify()" class="siimple-btn siimple-btn--grey" value="Submit">
		</div>
	</div>
  </div>
</div>
<script>
document.getElementById("trick123").innerHTML = random;
verify();
function verify(){
	if(document.getElementById("guess").value === random.toString()){
		 document.getElementById("content").innerHTML = "Current guess is: <span class=\"siimple-tag siimple-tag--green\">" + document.getElementById("guess").value.toString() + "</span><br><br><div class=\"siimple-btn siimple-btn--blue\"><a href=\"step-07.php\">Next</a></div>";
	 }else{
		 document.getElementById("content").innerHTML = "Current guess is: <span class=\"siimple-tag siimple-tag--orange\">" + document.getElementById("guess").value.toString() + '</span><br><br><a href="https://getmantra.com/web-app-security-testing-with-browsers/index.html#disablecss" target="_blank"><div class="siimple-btn siimple-btn--navy">Learn how to do it.</div></a>'; 
	 }
}

</script>
</body>
</html>
