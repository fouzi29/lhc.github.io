
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" 
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content" style="background: -webkit-linear-gradient(left, #3931af, #00c6ff); color:whitesmoke">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" 
aria-hidden="true">&times;</button>
<center><h4 class="modal-title" id="myModalLabel">Sign Up</h4></center>
</div>
<div class="modal-body">
<div class="container-fluid">
<form method="POST" action="insertadmin.php" class="form-horizontal" 
enctype="multipart/form-data" >
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Name:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="name">
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Email:</label>
</div>
<div class="col-lg-8">
<input type="email" class="form-control" name="Email">
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Phone Number:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="address">
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">password:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="password">
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Profile Image:</label>
</div>
<div class="col-lg-8">
<input type="file" class="filestyle" name="pimage" />
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">
<span class="glyphicon glyphicon-remove"></span> Cancel</button>

<input type="submit" name="submit" value="submit" class="btn btn-primary">


</form>
</div>
</div>
</div>
</div>