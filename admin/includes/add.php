
<?php //INSERTING INTO DATABASE AND IMAGE
if(isset($_REQUEST['add_it']))
{
    $post_title=$_REQUEST['post_title'];
    $post_author=$_REQUEST['post_author'];
    $post_category_id=$_REQUEST['cat_list2'];
    $post_status=$_REQUEST['post_status'];
    $post_image_name=$_FILES['image']['name'];
    $post_image_add=$_FILES['image']['tmp_name'];
    $post_tag=$_REQUEST['post_tag'];
    $post_content=mysqli_real_escape_string($con,$_REQUEST['post_content']);
    $post_date=date('d-m-y');
    //$post_comment_count=4;
    $post_userid=$_SESSION['user_id'];
    
    move_uploaded_file($post_image_add,"../images/$post_image_name");
    
    $query="insert into post(post_category_id,post_title,post_author,post_date,post_image,post_content,post_tag,post_status,post_userid) values($post_category_id,'$post_title','$post_author',now(),'$post_image_name','$post_content','$post_tag','$post_status',$post_userid)";
    $ed=mysqli_query($con,$query);
    if(!$ed){echo mysqli_error($con);}
}
?>





<form action="" method="post" enctype="multipart/form-data">
<label for="Title">Title</label>
<div class="form-group">
    <input type="text"  name="post_title" class="form-control">
</div>

<label for="Author">Author</label>
<div class="form-group">
    <input type="text"  name="post_author" class="form-control">
</div>

<label for="Category">Category</label>
<div class="form-group">
    <select name="cat_list2">
    <?php 
    //echo "<h1 stlye='color:red'>Before while</h1>";
    $query2="select * from category";
    $rel=mysqli_query($con,$query2);
    if(!$rel){echo mysqli_error($con);}
   // echo "<h1 stlye='color:red'>Before while</h1>";
    while($row=mysqli_fetch_assoc($rel))
    {
        $cat_id=$row['cat_id'];
        $cat_title=$row['cat_title'];
        //echo $cat_title;
    
    ?>
        <option value="<?php echo $cat_id;?>" ><?php echo $cat_title;?></option>
<!--        <option value="">Hello</option>-->
    <?php }
    ?>
<!--    <option value="">Hello1</option>-->
</select>
</div>






<!--
<label for="Post Category Id">Post Category Id</label>
<div class="form-group">
    <input type="text"  name="post_category_id" class="form-control">
</div>
-->
<label for="Status">Status</label>
<div class="form-group">
    <select name="post_status" id="">
        <option value="draft">Draft</option>
        <option value="publish">publish</option>
    </select>
</div>




<!--<label for="Status">Status</label>
<div class="form-group">
    <input type="text"  name="post_status" class="form-control">
</div>-->

<label for="Image">Image</label>
<div class="form-group">
    <input type="file"  name="image" class="form-control">
</div>

<label for="Tag">Tag</label>
<div class="form-group">
    <input type="text"  name="post_tag" class="form-control">
</div>

<label for="Content">Content</label>
<div class="form-group">
<!--    <input type="text"  name="category_title" class="form-control">-->
<textarea class="form-control" name="post_content" id="" cols="30" rows="10"></textarea>
</div>
<!--<label for="Date">Date</label>-->
<!--<div class="form-group">->>
    
<!--</div>-->   
<label for="Submit">Submit</label>
<div class="form-group">
    <input type="submit" class="btn btn-primary" name="add_it">
</div>                        
                            
</form>