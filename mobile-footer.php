<footer style="position: relative;">
    <div class="tx-color" style="width:100%;position: fixed;bottom:0px; background: #7f9ac3">

      <div class="row" style="margin-top: 10px; margin-bottom: 10px">        
        <div class="col s6"><a href="" class="white-text">About us</a></div>
        <div class="col s6" align="right"><a href="" class="white-text">Contact us</a></div>
      </div>

    </div>   
  </footer> 
  <script src="asset/vendor/jquery/jquery-3.4.1.min.js"></script>
  <script src="asset/vendor/materialize/js/materialize.min.js"></script>
  <script>

    $(document).ready(function(){
      $('select').formSelect();
       $('input#input_text, textarea#textarea2').characterCounter();
       $('.dropdown-trigger').dropdown();
    });


    </script>  

</body>
</html>
