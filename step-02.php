<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>POST Data | BrickTown</title>
<link rel="stylesheet" href="siimple.css">
<link href="favicon.png" rel="icon" type="image/x-icon">
</head>
<body>

<div class="siimple-grid">
  <div class="siimple-grid-row">
    <div class="siimple-grid-col siimple-grid-col--12">
		<div class="siimple-box">
		  <div class="siimple-box-title">POST Data</div>
		  <div class="siimple-box-subtitle">Change your name on POST data to <b>SecurityCompass</b></div>
		  <div class="siimple-box-detail"> <?php
if (isset($_POST["name"]) && !empty($_POST["name"]) && $_POST["name"] != "SecurityCompass") {
    echo "Your current name supplied by POST data is: <span class=\"siimple-tag siimple-tag--orange\">" . (string)$_POST["name"]. '</span><br><br><a href="https://getmantra.com/web-app-security-testing-with-browsers/index.html#editreplay" target="_blank"><div class="siimple-btn siimple-btn--navy">Learn how to do it.</div></a>'; 
}else if (isset($_POST["name"]) && !empty($_POST["name"]) && $_POST["name"] === "SecurityCompass") {
    echo "Your current name supplied by POST data is: <span class=\"siimple-tag siimple-tag--green\">" . (string)$_POST["name"]. '</span>';
    echo '<br><br><div class="siimple-btn siimple-btn--blue"><a href="step-03.php">Next</a></div>';
}
?></div>
		</div>
		<div>
			<form action="step-02.php" method="post">
			Name: <input type="text" name="name" value="John Doe" readonly>
			<input type="submit" class="siimple-btn siimple-btn--grey">
			</form>
		</div>
	</div>
  </div>
</div>

</body>
</html>
