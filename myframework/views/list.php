<div class="col-6 mx-auto m-10">
  <h2>Fruits Database</h2>
  <div class="row">
    <ul>
    <?
      foreach($data["items"] as $item){

        echo "<li>".$item["name"]." <a href='/crud/updateForm/".$item["id"]."'>Edit</a> | <a href='/crud/delete/".$item["id"]."'>Delete</a></li>";

      }
    ?>
    <a href="/crud/addForm/">Add</a>
    </ul>
  </div>
</div>
