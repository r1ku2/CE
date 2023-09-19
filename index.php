<html>
  <head>
    <title>Hello World</title>
  </head>
  <body>
    <div class="center-box">
      <img src="./developer.png" width=60%>
      <br>
      <?php
        echo "Instance name: " .gethostname();
      ?>
      <br>
      <?php
        echo 'Current PHP version: ' .phpversion();
      ?>
      <br>
      <?php
        function getClientIpAddress() {
          if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
            $xForwardedFor = explode(",", $_SERVER['HTTP_X_FORWARDED_FOR']);
              if (!empty($xForwardedFor)) {
                return trim($xForwardedFor[0]);
              }
          }
          if (isset($_SERVER['REMOTE_ADDR'])) {
            return (string)$_SERVER['REMOTE_ADDR'];
          }
          return "";
        }
        echo 'X_FORWARDED_FOR: ' .getClientIpAddress();
      ?>
    </div>
  </body>

<style>
    .center-box{
      text-align:center;
    }
    img {
      width: 300px;
    }
  </style>
</html>
