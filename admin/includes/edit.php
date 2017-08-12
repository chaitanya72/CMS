<?php 
$cat_u=$_REQUEST['edit'];
$cat_title;
$query="select * from category where cat_id='$cat_u'";
$selected_com=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($selected_com))
{
    $cat_title=$row['cat_title'];
}
?>
   
<form action="" method="post">
<div class="form-group">
    <input type="text" value="<?php echo $cat_title ?>" name="category_edit" class="form-control">
</div>

<div class="form-group">
    <input type="submit"  name="update" value="Update" class="btn btn-primary">
</div>

<div class="form-group">
    <input type="hidden"  name="edit" value="<?php echo $cat_u;?>" class="btn btn-primary">
</div>

</form>

<?php //EDITING 
if(isset($_REQUEST['update']))
{
   $cat_t=$_REQUEST['category_edit'];
   $query="update category set cat_title='$cat_t' where cat_id='$cat_i'";
   if($cat_i!="")
   {
       $u=mysqli_query($con,$query);
       if(!$u){echo "Query";}
   }else{echo "NO";}
}
?>