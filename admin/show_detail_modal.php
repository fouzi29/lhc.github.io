<!-- Detail Model -->
<div class="modal fade" id="detail<?php echo $row['id']; ?>" tabindex="-1" 
role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" 
aria-hidden="true">&times;</button>
<h3> Profile Details </h3>
</div>
<div class="modal-body">
<?php
$edit=$mysqli->query("select * from lawyer where id=".$row['id']);
$erow=$edit->fetch_assoc();
?>
<div class="container-fluid">
<form method="POST" action="update.php?id=<?php echo $erow['id']; ?>" 
enctype="multipart/form-data">

<div class="row">
<div class="col-lg-12" align="center">
<?php $img = "http://localhost:8080/LHC/admin/profile_images/".$row['id']. ".jpg";?>
<img src='<?php echo $img ?>' height="150px" width="170px" />

</div>

</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">Name:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['name']; ?>
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">Expert Field:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['expertfield']; ?>
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">Address:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['address']; ?>
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label class="control-label" style="position:relative; top:7px;">Education Background:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['eb']; ?>
</div>
</div>

<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label class="control-label" style="position:relative; top:7px;">workplace:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['workplace']; ?>
</div>
</div>

<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label class="control-label" style="position:relative; top:7px;">Designation:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['designation']; ?>
</div>
</div>

</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"> 
Close</button>

</div>
</form>
</div>
</div>
</div>
<!-- /.modal -->