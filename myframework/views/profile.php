<div class="col-6 mx-auto m-10">
  <h2>Profile</h2>
  <?
    echo "Currently logged in as ".$_SESSION["name"]."<br><br>";
  ?>
  <h5>Bio</h5>
  <?
    $lines = file('./bin/user.txt');
    $users = array();

    foreach ($lines as $line_num => $line) {
      array_push($users, explode('|', $line));

      if($_SESSION["name"] == $users[$line_num][0]){
        echo $users[$line_num][2];
      }
    }
  ?>
  <br/>
  <br/>
  <a href='/dash/logout'>Log Out</a>
</div>
