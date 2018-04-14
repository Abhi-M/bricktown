<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Client Side Security | BrickTown</title>
<link rel="stylesheet" href="siimple.css">
<link href="favicon.png" rel="icon" type="image/x-icon">
<script type="text/javascript">
    function blockSpecialChar(e){
        var k;
        document.all ? k = e.keyCode : k = e.which;
        return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
        }
    </script>
</head>
<body>

<div class="siimple-grid">
  <div class="siimple-grid-row">
    <div class="siimple-grid-col siimple-grid-col--12">
		<div class="siimple-box">
		  <div class="siimple-box-title">Disable JavaScript</div>
		  <div class="siimple-box-subtitle">Enter any special character below</div>
      <br><br><a href="https://getmantra.com/web-app-security-testing-with-browsers/index.html#disablejavascript" target="_blank"><div class="siimple-btn siimple-btn--navy">Learn how to do it.</div></a>
		  <div class="siimple-box-detail" id="content"></div>
		</div>
		<div>

			<form type="submit" action="step-0c.php" method="post">
			  Input: <input type="text" name="input" value="0" onkeypress="return blockSpecialChar(event)">
			  <input type="submit" class="siimple-btn siimple-btn--grey" value="Submit">
			</form>
		</div>
	</div>
  </div>
</div>
<script>

</script>
</body>
</html>
