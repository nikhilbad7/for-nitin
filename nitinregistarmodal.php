<html>
<head>
<script src="javascript files/jq.js"></script>
<script src="javascript files/messages.js"></script>
<link href="css files/messages.css" rel="stylesheet">	
<script src="javascript files/jquery.min.js"></script>
<script src="javascript files/bootstrap.min.js"></script>
<link href="css files/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<style>
#img1{
	position:fixed;
	top:200px;
	left:500px;
	height:400px;
}
#b1{
	position:fixed;
	top:50px;
	left:1000px;
}
#main{
	position:fixed;
	height:1000px;
	width:100%;
	background-color:rgb(255,165,0);
}
</style>
<script>
function show(){
	window.location="nitin.php";
}
</script>
<div class="container">
  <h2>REGISTER BY CLICKING TO THIS BUTTON</h2>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Register</button>
<img src="images/pydj.jpg" id="img1">
<button type="button" class="btn btn-primary" id="b1" onclick="show()">GET BACK TO MENU PAGE</button>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><b>Register</b></h4>
        </div>
        <div class="modal-body">
          <p><form method="post" enctype="multipart/form-data" >
		  USERNAME<input type="text" class="form-control" placeholder="Email">
		  PASSWORD<input type="password" class="form-control" placeholder="password">
		  BRANCH<input type="text" class="form-control" placeholder="branch" > 
		  MOBILENO.<input type="text" class="form-control" placeholder="mobileno." >
		  ADDRESS<input type="text"  class="form-control" placeholder="Enter your Address">
		  <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button></p>
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