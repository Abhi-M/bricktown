<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>User Agent | BrickTown
    </title>
    <link rel="stylesheet" href="siimple.css">
    <link href="favicon.png" rel="icon" type="image/x-icon">
  </head>
  <body>
    <div class="siimple-grid">
      <div class="siimple-grid-row">
        <div class="siimple-grid-col siimple-grid-col--12">
          <div class="siimple-box">
            <div class="siimple-box-title">User Agent
            </div>
            <div class="siimple-box-subtitle">Change your user agent to
              <b>SecurityCompass
              </b>
            </div>
            <div class="siimple-box-detail">You current user agent is:
              <?php
if ($_SERVER['HTTP_USER_AGENT'] === "SecurityCompass"){
echo '<span class="siimple-tag siimple-tag--green">' . (string)$_SERVER['HTTP_USER_AGENT'] . '</span>';
echo '<br><br><div class="siimple-btn siimple-btn--blue"><a href="step-02.php">Next</a></div>';
}else {
echo '<span class="siimple-tag siimple-tag--orange">' . (string)$_SERVER['HTTP_USER_AGENT'] . '</span><br><br><a href="https://getmantra.com/web-app-security-testing-with-browsers/index.html#useragent" target="_blank"><div class="siimple-btn siimple-btn--navy">Learn how to do it.</div></a>';
}
?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
