<?php //INSERTING INTO DATABASE AND IMAGE
if(isset($_REQUEST['p_id']))
{
    //echo "<h1 stlye='color:red'>Before while</h1>";
    
    $id1=$_REQUEST['p_id'];
    $query="select * from post where post_id=$id1";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_assoc($result))
    {
    $post_title=$row['post_title'];
    $post_author=$row['post_author'];
    $post_category_id=$row['post_category_id'];
    $post_status=$row['post_status'];
    $post_image_name=$row['post_image'];    
    //$post_image_name=['image']['name'];
    //$post_image_add=$_FILES['image']['tmp_name'];
    $post_tag=$row['post_tag'];
    $post_content=$row['post_content'];
    $post_date=$row['post_date'];
    $post_comment_count=4;
        
    }
    
    if(isset($_REQUEST['esub']))
    {
    $post_title=$_REQUEST['post_title'];
    $post_author=$_REQUEST['post_author'];
    $post_category_id=$_REQUEST['cat_list'];
    $post_status=$_REQUEST['post_status'];
    $post_image_name1=$_FILES['image']['name'];
    $post_image_add=$_FILES['image']['tmp_name'];
    $post_tag=$_REQUEST['post_tag'];
    $post_content=$_REQUEST['post_content'];
    $post_date=date('d-m-y');
    //$post_comment_count=4;
    
    move_uploaded_file($post_image_add,"../images/$post_image_name");
        
        if($post_image_name1=="")
        {
            $post_image_name1=$post_image_name;
        }
    $id2=$_REQUEST['p_id'];
    $query="update post set  post_category_id='$post_category_id',post_title='$post_title',post_author='$post_author',post_date=now(),post_image='$post_image_name1',post_content='$post_content',post_tag='$post_tag',post_status='$post_status' where post_id=$id2"; //values($post_category_id,'$post_title','$post_author',now(),'$post_image_name','$post_content','$post_tag','$post_comment_count','$post_status')";
    $ed1=mysqli_query($con,$query);
     echo "<h3 class='bg-success'>Post Updated :"."<a href='../post.php?p_id=$id2'>View Post</a> "."or "."<a href='post.php'>Edit More</a></h3>";
    }
    if(!$result){echo mysqli_error($con);}
    
}
?>





<form action="" method="post" enctype="multipart/form-data">
<label for="Title">Title</label>
<div class="form-group">
    <input type="text" value="<?php echo $post_title;?>" name="post_title" class="form-control">
</div>

<label for="Author">Author</label>
<div class="form-group">
    <input type="text" value="<?php echo $post_author;?>" name="post_author" class="form-control">
</div>

<label for="Post Category Id">Post Category Id</label>
<div class="form-group">
<select name="cat_list">
     <?php //FIRST SELECTED ELEMENT 
     $query2="select * from category where cat_id=$post_category_id";
                $rel=mysqli_query($con,$query2);
                if(!$rel){echo mysqli_error($con);}
                
                while($row=mysqli_fetch_assoc($rel))
                {
                $cat_id_this=$row['cat_id'];
                $cat_title_this=$row['cat_title'];
                    echo "<option value='$cat_id_this'>$cat_title_this</option>";                
                
                //<!--        <option value="">Hello</option>-->
                 } ?>

    <!-- <option value="<?php echo $cat_id;?>" ><?php echo $cat_title;?></option> -->
    <?php 
    //echo "<h1 stlye='color:red'>Before while</h1>";
    $query2="select * from category where cat_id!=$post_category_id";
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


<!--    <input type="text"  value="<?php echo $post_category_id;?>" name="post_category_id" class="form-control">-->
</div>








<!--
<label for="Post Category Id">Post Category Id</label>
<div class="form-group">
    <input type="text"  value="<?php echo $post_category_id;?>" name="post_category_id" class="form-control">
</div>
-->


<label for="Status">Status</label>
<div class="form-group">
    <select name="post_status" id="">
        <option value="<?php echo $post_status;?>"><?php echo $post_status;?></option>
        <?php 
        if($post_status=='draft')
        {
            echo "<option value='publish'>publish</option>";
        }
        else
        {
            echo "<option value='draft'>draft</option>";
        }
        ?>
    </select>
</div>



<!-- <label for="Status">Status</label>
<div class="form-group">
    <input type="text" value="<?php echo $post_status;?>" name="post_status" class="form-control">
</div> -->

<label for="Image1">Image1</label>
<div class="form-group">
    <img width="100" src="../images/<?php echo $post_image_name;?>" alt="">
</div>



<label for="Image">Image</label>
<div class="form-group">
    <input type="file"  name="image" class="form-control">
</div>

<label for="Tag">Tag</label>
<div class="form-group">
    <input type="text" value="<?php echo $post_tag;?>" name="post_tag" class="form-control">
</div>

<label for="Content">Content</label>
<div class="form-group">
<!--    <input type="text"  name="category_title" class="form-control">-->
<textarea class="form-control" name="post_content" id="" cols="30" rows="10"><?php echo $post_content;?></textarea>
</div>
<!--<label for="Date">Date</label>-->
<!--<div class="form-group">->>
    
<!--</div>-->   
<label for="Submit">Submit</label>
<div class="form-group">
    <input type="submit" class="btn btn-primary" name="esub">
</div>                        
                            
</form>