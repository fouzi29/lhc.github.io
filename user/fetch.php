<?php
include('database.php');
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($mysqli, $_POST["query"]);
	$query = "
	SELECT * FROM lawyer 
	WHERE name LIKE '%".$search."%'
	OR expertfield LIKE '%".$search."%' ";
}
else
{
	$query = "
	SELECT * FROM lawyer ORDER BY id";
}
$result = mysqli_query($mysqli, $query);
if(mysqli_num_rows($result) > 0)
{
    ?>
<table class="table table-striped table-bordered table-responsive table-hover" 
id="empTable" >
<thead>
<th><center>Picture</center></th>
<th><center>Name</center></th>
<th><center>Expert Field</center></th>
<th><center>WorKplace</center></th>
<th><center>Action</center></th>
</thead>
<tbody>
    <?php
	while($row = mysqli_fetch_array($result))
	{
        $img = "http://localhost:8080/LHC/admin/profile_images/".$row['idno']. ".jpg";
    ?>
        <tr>
        <td> <img src='<?php echo $img ?>' height="50px" width="70px" /></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['expertfield']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td>
        <a href="#detail<?php echo $row['id']; ?>" 
        data-toggle="modal" class="btn btn-success btn-sm">
        <span class="glyphicon glyphicon-floppy-open">
        </span>Detail</a>&nbsp;
        <?php include('show_detail_modal.php'); ?>
        </td>
        </tr>
        <?php }
	
}
else
{
	echo 'Data Not Found';
}
?>