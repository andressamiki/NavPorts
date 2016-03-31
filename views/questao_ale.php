   
    <div onload="iniciaTempo()" class="container" >
      <div class="col-md-10 col-md-offset-1">  
        <div class="row">
          <span class="col-md-8">
         
         <script>
          $.ajax({
          url: "/application/model/webservice",
          context: document.body
          }).done(function() {
          $( this ).addClass( "done" );
          });
          </script>
        </div><!--/.list-group -->
        
        

      </div><!--/.cols -->
    </div><!--/.container -->

    