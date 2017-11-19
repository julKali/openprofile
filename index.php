<?php
    function getUserAgent()
    {
        static $agent = null;

        if ( empty($agent) ) {
            $agent = $_SERVER['HTTP_USER_AGENT'];

            if ( stripos($agent, 'Firefox') !== false ) {
                $agent = 'firefox';
            } elseif ( stripos($agent, 'MSIE') !== false ) {
                $agent = 'ie';
            } elseif ( stripos($agent, 'iPad') !== false ) {
                $agent = 'ipad';
            } elseif ( stripos($agent, 'Android') !== false ) {
                $agent = 'android';
            } elseif ( stripos($agent, 'Chrome') !== false ) {
                $agent = 'chrome';
            } elseif ( stripos($agent, 'Safari') !== false ) {
                $agent = 'safari';
            } elseif ( stripos($agent, 'AIR') !== false ) {
                $agent = 'air';
            } elseif ( stripos($agent, 'Fluid') !== false ) {
                $agent = 'fluid';
            }

        }

        return $agent;
    }

    $ip = $_SERVER["REMOTE_ADDR"];
    $header = getallheaders();
    var_dump($header);
    $lang = $header["Accept-Language"];
    $lang = substr($lang, strpos($lang, ",") + 1, 2);
    echo "Browser language: " . $lang;

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>OpenProfile</title>
        <meta charset="utf-8"/>
        <link href="main.css" rel="stylesheet"/>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
      <div class="jumbotron text-center">
        <h1>OpenProfile</h1>
          <p class="text-white">Look at your Internet footprint!</p>
      </div>
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-4">
            <h3>PicPrez</h3>
            <div class="card-title">
              <div class="card-body">
                <img src="OKQTLQ0.jpg" class="card-img-bottom" width="350" height="350">
                <h4 class="card-title">What does a picture reveal about you?</h4>
                <p class="card-text">By sharing a picture here, you can take a look at, how much data social media companies gather about you with only a single private post!After your test, your picture will obviously be deleted!</p>
                <a href="foto_uploadform.html" class="btn btn-primary">Your Profile</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <h3>GeoGuess</h3>
            <div class="card-title">
              <div class="card-body">
                <img src="2005.jpg" class="rounded" width="350" height="350">
                <h4 class="card-title">What do GPS-pins reveal about you?</h4>
                <p class="card-text">By sharing several GPS-pins here, you can take a look at, what social media companies can tell about your areal behaviour!After your test, your GPS-Pins will obviously be deleted!</p>
                <a href="geo.php" class="btn btn-primary">Your Profile</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <h3>MindMem</h3>
            <div class="card-title">
              <div class="card-body">
              <img src="112943-OONJZG-976.jpg" class="rounded" width="350" height="350">
              <h4 class="card-title">What do comments reveal about you?</h4>
              <p class="card-text">By sharing a personal comment here, you can take a look at, what social media companies can tell about your character, mind set, gender and personal life!After your test, your comment will obviously be deleted!</p>
              <a href="umfrage.html" class="btn btn-primary">Your Profile</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br></br>
  </body>
</html>
