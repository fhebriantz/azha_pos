
  <script src="{{ asset('js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('js/jquery.min.js')}}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>
  <script>
    $("#btn-more").click(function() {
      $('html, body').animate({
          scrollTop: $("#main-index").offset().top
      }, 1000);
  }); 
  </script>
  <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "testa") {
            x.className += " responsive";
        } else {
            x.className = "testa";
        }
    }
    </script>