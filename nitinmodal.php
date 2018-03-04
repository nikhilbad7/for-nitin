<html>
<head>
<script src="javascript files/jquery.min.js"></script>
<script src="javascript files/bootstrap.min.js"></script>
<link href="css files/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<style>
#img1{
	position:fixed;
	top:200px;
	left:350px;
	height:250px;
}
#b1{
	position:fixed;
	top:50px;
	left:1000px;
}
</style>
<script>
function show(){
	window.location="nitin.php";
}
</script>

<div class="container">
  <h2>LOGIN BY CLICKING TO THIS BUTTON</h2>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">login</button>
<img src="images/dj.png" id="img1">
<button type="button" class="btn btn-primary" id="b1" onclick="show()">GET BACK TO MENU PAGE</button>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">login</h4>
        </div>
        <div class="modal-body">
          <p><form>
		  USERNAME<input type="text" class="form-control" name="email">
		  PASSWORD<input type="password" class="form-control" name="password"><br>
		  <button type="submit" class="btn btn-primary" name="login">LOGIN</button></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>