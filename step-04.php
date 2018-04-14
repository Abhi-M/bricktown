<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>LocalStorage | BrickTown</title>
<link rel="stylesheet" href="siimple.css">
<link href="favicon.png" rel="icon" type="image/x-icon">
<script>
if (localStorage.getItem("bricktown") === null) {
	 localStorage.setItem("bricktown", "bricktown");
}
</script>
</head>
<body>

<div class="siimple-grid">
  <div class="siimple-grid-row">
    <div class="siimple-grid-col siimple-grid-col--12">
		<div class="siimple-box">
		  <div class="siimple-box-title">LocalStorage</div>
		  <div class="siimple-box-subtitle">Change <b>bricktown</b> LocalStorage value to <b>SecurityCompass</b></div>
		  <div class="siimple-box-detail" id="content"></div>
		</div>
	</div>
  </div>
</div>
<script>
if (localStorage.getItem("bricktown") !== null) {
	 if (localStorage.getItem("bricktown") === "SecurityCompass") {
		 document.getElementById("content").innerHTML = "Current value of <b>bricktown</b> LocalStorage is: <span class=\"siimple-tag siimple-tag--green\">" + localStorage.getItem("bricktown").toString() + "</span><br><br><div class=\"siimple-btn siimple-btn--blue\"><a href=\"step-05.php\">Next</a></div>";
	 }else{
		 document.getElementById("content").innerHTML = "Current value of <b>bricktown</b> LocalStorage is: <span class=\"siimple-tag siimple-tag--orange\">" + localStorage.getItem("bricktown").toString() + '</span><br><br><a href="https://getmantra.com/web-app-security-testing-with-browsers/index.html#editlocalstorage" target="_blank"><div class="siimple-btn siimple-btn--navy">Learn how to do it.</div></a>'; 
	 }
}

</script>
</body>
</html>
