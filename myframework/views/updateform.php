<div class="container">
  <div class="row">
    <form action="/crud/updateAction/<?=$data["items"][0]["id"]?>" method="post">
      <input type="text" name="name" value="<?=$data["items"][0]["name"]?>">
      <input type="hidden" name="id" value="<?=$data["items"][0]["id"]?>">
      <input type="submit">

    </form>
  </div>
</div>
