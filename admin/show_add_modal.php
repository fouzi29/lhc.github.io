
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" 
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" 
aria-hidden="true">&times;</button>
<center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
</div>
<div class="modal-body">
<div class="container-fluid">
<form method="POST" action="insert.php" class="form-horizontal" 
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
<label class="control-label" style="position:relative; top:7px;">Expert Field:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="expertfield">
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Address:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="address">
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Education Background:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="eb">
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Designation:</label> 
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="designation">
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">workplace:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="workplace">
</div>
</div>

<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Identification No:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="idno">
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Password:</label>
</div>
<div class="col-lg-8">
<input type="password" class="form-control" name="password">
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
<span class="glyphicon glyphicon-floppy-disk"></span> Save</a>

</form>
</div>
</div>
</div>
</div>