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

                  echo ' active"><a class="nav-link" href="'.$navLink.'">';
                } else {

                  echo '"><a class="nav-link" href=".'.$navLink.'">';
                }

                echo $key.'<span class="sr-only">(current)</span></a>';

              }
            ?>

              </li>


          </ul>
    </div>
  </div>
</nav>
