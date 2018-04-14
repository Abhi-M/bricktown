<?php
header("BrickTown: 5643");?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Header | BrickTown</title>
<link rel="stylesheet" href="siimple.css">
<link href="favicon.png" rel="icon" type="image/x-icon">
</head>
<body>

<div class="siimple-grid">
  <div class="siimple-grid-row">
    <div class="siimple-grid-col siimple-grid-col--12">
		<div class="siimple-box">
		  <div class="siimple-box-title">Response header</div>
		  <div class="siimple-box-subtitle">Enter the four digit header value</div>
		  <div class="siimple-box-detail" id="content"></div>
		</div>
		<div id="trick"></div>
		<div>
			Input: <input type="text" id="guess" name="name" value="0">
			<input onclick="verify()" class="siimple-btn siimple-btn--grey" value="Submit">
		</div>
	</div>
  </div>
</div>
<script>
function verify(){
	if(document.getElementById("guess").value === "5643"){
		 document.getElementById("content").innerHTML = "Current header value you entered is: <span class=\"siimple-tag siimple-tag--green\">" + document.getElementById("guess").value.toString() + "</span><br><br><div class=\"siimple-btn siimple-btn--blue\"><a href=\"step-0a.php\">Next</a></div>";
	 }else{
		 document.getElementById("content").innerHTML = "Current header value you entered is: <span class=\"siimple-tag siimple-tag--orange\">" + document.getElementById("guess").value.toString() + '</span><br><br><a href="https://getmantra.com/web-app-security-testing-with-browsers/index.html#viewheaders" target="_blank"><div class="siimple-btn siimple-btn--navy">Learn how to do it.</div></a>'; 
	 }
}

</script>
</body>
</html>
