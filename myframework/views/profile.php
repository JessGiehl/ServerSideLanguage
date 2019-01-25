<div class="col-6 mx-auto m-10">
  <h2>Profile</h2>
  <?
    echo "Currently logged in as ".$data["name"]."<br><br>";
  ?>
  <h5>Bio</h5>
  <?
    echo $data["bio"];
  ?>
  <br/>
  <br/>
  <a href='/dash/logout'>Log Out</a>
</div>
