<form action="<a href=<?php echo base_url('EA_C/Login_C/Admin_products');?>>" method="post">
<table>
<tr>
    <th>id</th>
	<th>Product Name</th>	
	<th>Seller Name</th>
    <th>Product content</th>
    <th>image</th>			
	<th>tags</th>
    <th>delete</th>
    <th>update</th>
    <th>status</th>
</tr>
<?php foreach($data as $row):?>
<tr>
<td><?php echo $id=$row->id;?></td>
<td><?php echo $row->ProductName;?></td>
<td><?php echo $row->SellarName;?></td>
<td><?php echo $row->ProductContent;?></td>
<td><?php echo $row->Image;?></td>
<td><?php echo $row->tags;?></td>
<td><a href="<?php echo base_url('EA_C/Login_C/Admin_delete?id='.$id)?>" class="nav_link" name="edit">delete</a></td>
<td><a href="<?php echo base_url('EA_C/Login_C/Admin_edit?id=' .$id) ?>" class="nav_link" value="delete" name="delete">edit</a></td>
<td><a href="<?php echo base_url('EA_C/Login_C/Admin_status?id=' .$id) ?>" class="nav_link" value="status" name="status">post/draft</a></td>

<tr>
<?php endforeach; ?>

</table>
<style>
    table {
    width: 80%;
    border-collapse: collapse;
    position:absolute;
    left:18%;
    z-index: -1;
}

th, td {
    border: 1px solid #000;
    padding: 8px;
    text-align: center;
}

th {
    background-color: #333;
    color: white;
}
.nav_link 
{
    color:blue
}
</style>