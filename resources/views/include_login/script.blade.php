    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/jquery.min.js')}}"></script> 
    <script src="{{ asset('js/classie.js')}}"></script>
    <script src="{{ asset('js/jquery.fancybox.min.js')}}"></script>
    <script src="{{ asset('js/cbpViewModeSwitch.js')}}"></script>
    <script src="{{ asset('js/modernizr.custom.js')}}"></script>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
    <script type="text/javascript" src="{{ asset('js/bootstrap-datetimepicker.js')}}" charset="UTF-8"></script>
    <script type="text/javascript">
      $('.form_date').datetimepicker({
          language:  'fr',
          weekStart: 1,
          todayBtn:  1,
          autoclose: 1,
          todayHighlight: 1,
          startView: 2,
          minView: 2,
          forceParse: 0
      });
    </script>