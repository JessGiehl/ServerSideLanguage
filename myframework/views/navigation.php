<?
// //for each navigation link in our data array
// foreach ($data["nav"] as $key=>$navLink){
//   echo "<li style= ";
//   //if this navlink is present in the URL path parts, its the active page
//   if ($key == $this->urlPathParts[1]){
//     echo "\"background-color:#49483f;display:inline;padding:5px;\">
//     <a style=\"color:#d6b837\"";
//   //else its a link to another page
//   } else {
//     echo "\"background-color:#181818;display:inline;padding:5px;\">
//     <a style=\"color:#20acdf\" ";
//   }
//   //concat the remaining part of the anchor tag
//   echo " href='.".$navLink."'>".$key."</a> </li>";
// }
?>

<!-- </ul> -->

<!--lecture code-->



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
        <a class="navbar-brand" href="#">SSL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <?

            //for each navigation link in our data array
            foreach ($data["nav"] as $key=>$navLink){
                echo '<li class="nav-item';

                if($key == $data["page"]){

                  echo ' active';
                }

                echo '"><a class="nav-link" href=".'.$navLink.'">'.$key.'<span class="sr-only">(current)</span></a>';
              }
            ?>

              </li>


          </ul>
    </div>
  </div>
</nav>
