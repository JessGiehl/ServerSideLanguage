<!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Server Side Languages - Jessica Giehl</p>
      </div>
      <!-- /.container -->

      <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

      <script>
        $(function () {
        $('[data-toggle="popover"]').popover()
        })
      </script>

      <script>
        $("#ajaxbutton").click(function(){
          $.ajax({
            method:"POST",
            url:"/login/ajaxPars",
            data:{"name":$("#name").val(),"password":$("#password").val()},
            success:function(msg){
              if(msg=="welcome"){
                alert("Login Successful")
              } else if (msg=="invalid") {
                alert("Incorrect username or password.")
              }
            }
          })
        })
      </script>
    </footer>

    <!--depenencies-->



  </body>
