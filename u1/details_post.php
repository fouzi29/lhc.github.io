<!-- Detail Model -->
<div class="modal fade" id="detail<?php echo $row['id']; ?>" tabindex="-1" 
role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

<div class="modal-dialog">
<div class="modal-content" style="margin-right: 550px;background: -webkit-linear-gradient(left, #3931af, #00c6ff); color:whitesmoke">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" 
aria-hidden="true">&times;</button>
<h3> Profile Details </h3>
</div>
<div class="modal-body">
<?php
$edit=$mysqli->query("select * from posts where id=".$row['id']);
$erow=$edit->fetch_assoc();
?>
<div class="container-fluid">
<form method="POST" action="update_post.php?id=<?php echo $erow['id']; ?>" 
enctype="multipart/form-data">

<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-2" align="left">
<label style="position:relative; top:7px;">Title:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['articleTitle']; ?>
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">Decription:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['articleContent']; ?>
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