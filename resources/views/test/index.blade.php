
<!DOCTYPE html>
<html lang="en">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>
 function throwOut(JSON){
  console.log(JSON);
 }
 $(document).ready(function(){
  $.ajax({
   url: "ip-api.com/json",
   //dataType: "jsonp",
   //jsonpCallback: "throwOut",
   success: function(rtn){ $("#test").html( JSON.stringify(rtn) ); },
   error: function(err){ $("#test").html( " statusText = " + err.statusText + " status = " + err.status); }
  });
 });
 
</script>
<span id="test">hello</span>
</html>