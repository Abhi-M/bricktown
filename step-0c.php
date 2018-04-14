<?php
if( isset($_POST['input']) )
{
     $input =$_POST['input'];
     if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $input))
		{
			
		}else {
			header("Location: step-0b.php");
			exit();
		}
}else 
{
			header("Location: step-0b.php");
			exit();
		}
?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Congratulations | BrickTown</title>
<link rel="stylesheet" href="siimple.css">
<link href="favicon.png" rel="icon" type="image/x-icon">
</head>
<body>

<div class="siimple-grid">
  <div class="siimple-grid-row">
    <div class="siimple-grid-col siimple-grid-col--12">
		<div class="siimple-box siimple-box--green">
		  <div class="siimple-box-title">Well Done!</div>
		  <div class="siimple-box-detail" id="content">You successfully completed all the challenges</div>
		</div>
	</div>
  </div>
</div>
<script>

</script>
</body>
</html>
