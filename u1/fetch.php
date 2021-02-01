<?php
include('database.php');
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($mysqli, $_POST["query"]);
	$query = "
	SELECT * FROM posts 
	WHERE topic LIKE '%".$search."%' ";
}
else
{
	$query = "
	SELECT * FROM posts ORDER BY id";
}
$result = mysqli_query($mysqli, $query);
if(mysqli_num_rows($result) > 0)
{
    ?>
<table class="table table-responsive table-hover" 
id="empTable" style="margin-left: 20px;  " >
<thead class="thead-dark" >
<th style="width: 15px"><center>Topic</center></th>
<th style="width: 15px"><center>Title</center></th>
<th style="width: 29.1%"><center>Post By</center></th>
<th style="width: 30.1%"><center>Time</center></th>
<th style="width: 30.1%"><center>Action</center></th>
</thead>
<tbody style=" text-alignment:center;">
    <?php
	while($row = mysqli_fetch_array($result))
	{
        
    ?>
        <tr style="text-align: center;">
        
        <td><?php echo $row['topic']; ?></td>
        <td><?php echo $row['articleTitle']; ?></td>
        <td><?php echo $row['pid']; ?></td>
        <td ><?php echo $row['time']; ?></td>
        <td>
        <a href="#detail<?php echo $row['id']; ?>" 
        data-toggle="modal" class="btn btn-success btn-sm">
        <span class="glyphicon glyphicon-floppy-open">
        </span>Detail</a>&nbsp;
        <?php include('details_post.php'); ?>
        </td>
        </tr>
        <?php }
	
}
else
{
	echo 'Data Not Found';
}
?>