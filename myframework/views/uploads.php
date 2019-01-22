<div class="containter">

  <?
  if(@$_GET["msg"]){
      echo "<p style=\"color:red\">".$_GET["msg"]."</p>";
    }
  ?>
  
  <form action="/login/validate" method="post" class="mb-10" enctype="">

    <p>Select a file</p>
    <input type="file" name="myfile"/>
    <br/>
    <input type="submit" name="submit" value="submit">

  </form>
</div>
