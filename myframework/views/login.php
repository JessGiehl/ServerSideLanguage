<h2>Login</h2>

<div class="col-6 mx-auto m-10">
  <?
  if(@$_GET["msg"]){
      echo "<p style=\"color:red\">".$_GET["msg"]."</p>";
    }
  ?>
  <form action="/login/validate" method="post" class="mb-10">

    <div class="form-group">
      <label for="name">Username</label>
      <input type="text" class="form-control" name="username" id="username" placeholder="Username">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" name="password" id="password" placeholder="Password">
    </div>
    <div>

      <?
        function create_image($cap)
        {
        unlink("./assets/image1.png");
        global $image;
        $image = imagecreatetruecolor(200, 50) or die("Cannot Initialize new GD image stream");
        $background_color = imagecolorallocate($image, 255, 255, 255);
        $text_color = imagecolorallocate($image, 0, 255, 255);
        $line_color = imagecolorallocate($image, 64, 64, 64);
        $pixel_color = imagecolorallocate($image, 0, 0, 255);
        imagefilledrectangle($image, 0, 0, 200, 50, $background_color);
        for ($i = 0; $i < 3; $i++) {
        imageline($image, 0, rand() % 50, 200, rand() % 50, $line_color);
        }
        for ($i = 0; $i < 1000; $i++) {
        imagesetpixel($image, rand() % 200, rand() % 50, $pixel_color);
        }
        $text_color = imagecolorallocate($image, 0, 0, 0);
        ImageString($image, 22, 30, 22, $cap, $text_color);
        $_SESSION["cap"]=$cap;
        imagepng($image, "./assets/image1.png");
        }
        create_image($data["cap"]);
        echo "<img src='/assets/image1.png'>";
      ?>

      <label for="captcha">Enter Captcha</label>

      <input name="cap" type="captcha" id="captcha" placeholder="">

    </div>
    <br/>
    <button type="submit" name="" class="btn btn-primary">Login</button>
    <button type="button" id="ajaxbutton" class="btn btn-primary">Ajax Login</button>
  </form>
  <?
  var_dump($_SESSION["cap"]); ?>

</div>
<br/>
