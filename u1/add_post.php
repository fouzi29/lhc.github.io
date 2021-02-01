  

<div class="modal fade" id="addnew" tabindex="-1" role="dialog" 
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content" style="background: -webkit-linear-gradient(left, #3931af, #00c6ff); color:whitesmoke">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" 
aria-hidden="true">&times;</button>
<center><h4 class="modal-title" id="myModalLabel">Add New Post</h4></center>
</div>
<div class="modal-body">
<div class="container-fluid">
<form method="POST" action="insertpost.php" class="form-horizontal" 
enctype="multipart/form-data" >
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Topic:</label>
</div>
<div class="col-lg-8">
<input type="text" name="topic" style="width:100%;height:40px" >
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Title:</label>
</div>
<div class="col-lg-8">
<input type="text" name="articleTitle" style="width:100%;height:40px" >
</div>
</div>
<div style="height:10px;"></div>
<div class="col-lg-8">
<h3><label>Long Description(Body Content)</label><br>
 <textarea name="articleContent" id="textarea1" class="mceEditor" cols="32" rows='10'><</textarea></h3>
</div>
</div>
<div style="height:10px;"></div>
<div class="col-lg-8">
<input type="hidden" id="custId" name="pid" value="<?php echo $n?>">
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