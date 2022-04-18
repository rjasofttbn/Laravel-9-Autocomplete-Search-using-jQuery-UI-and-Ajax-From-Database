<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Autocomplete Textbox From Database with jQuery Ajax - Tutsmake.com</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript">
     var siteUrl = "{{url('/')}}";
  </script>
</head>
<body>
 
<div class="container mt-4">
 
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      <h2>Laravel 9 Autocomplete Textbox From Database using jQuery ajax</h2>
    </div>
 
    <div class="card-body">
      <form name="autocomplete-textbox" id="autocomplete-textbox" method="post" action="#">
       @csrf
 
        <div class="form-group">
          <label for="exampleInputEmail1">Search By Name</label>
          <input type="text" id="name" name="name" class="form-control">
        </div>
 
      </form>
    </div>
  </div>
   
</div>  
  <script type="text/javascript">
$(document).ready(function() {
    $( "#name" ).autocomplete({
  
        source: function(request, response) {
            $.ajax({
            url: siteUrl + '/' +"autocomplete",
            data: {
                    term : request.term
             },
            dataType: "json",
            success: function(data){
               var resp = $.map(data,function(obj){
                    return obj.name;
               }); 
  
               response(resp);
            }
        });
    },
    minLength: 1
 });
});
    </script>
</body>
 
</html>
