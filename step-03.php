<?php
if (!isset($_COOKIE['bricktown'])) {
	setcookie('bricktown', 'bricktown', time() + (86400 * 30), "/",null,null,true);
	header("Refresh:0");
}
?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cookie | BrickTown</title>
<link rel="stylesheet" href="siimple.css">
<link href="favicon.png" rel="icon" type="image/x-icon">
</head>
<body>

<div class="siimple-grid">
  <div class="siimple-grid-row">
    <div class="siimple-grid-col siimple-grid-col--12">
		<div class="siimple-box">
		  <div class="siimple-box-title">Edit cookie</div>
		  <div class="siimple-box-subtitle">Change <b>bricktown</b> cookie value to <b>SecurityCompass</b></div>
		  <div class="siimple-box-detail"> <?php
if (isset($_COOKIE['bricktown'])) {
	if ($_COOKIE['bricktown'] === "SecurityCompass") {
    echo "Your current name supplied by <b>bricktown</b> cookie is: <span class=\"siimple-tag siimple-tag--green\">" . (string)$_COOKIE['bricktown'] . '</span>';
    echo '<br><br><div class="siimple-btn siimple-btn--blue"><a href="step-04.php">Next</a></div>';
} else
{

    echo "Current value supplied by <b>bricktown</b> cookie is: <span class=\"siimple-tag siimple-tag--orange\">" . (string)$_COOKIE['bricktown'] . '</span><br><br><a href="https://getmantra.com/web-app-security-testing-with-browsers/index.html#editcookie" target="_blank"><div class="siimple-btn siimple-btn--navy">Learn how to do it.</div></a>'; 
}
}

?></div>
		</div>
	</div>
  </div>
</div>

</body>
</html>
