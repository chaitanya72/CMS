
<?php //INSERTING INTO DATABASE AND IMAGE
if(isset($_REQUEST['add_user']))
{
    $username=$_REQUEST['username'];
    $user_firstname=$_REQUEST['user_firstname'];
    $user_lastname=$_REQUEST['user_lastname'];
    $user_password=$_REQUEST['user_password'];
    $user_password=password_hash($user_password,PASSWORD_DEFAULT,array('cost'=>10));
    //$post_image_name=$_FILES['image']['name'];
    //$post_image_add=$_FILES['image']['tmp_name'];
    $user_email=$_REQUEST['user_email'];
    $user_role=$_REQUEST['user_role'];
    //$post_date=date('d-m-y');
    //$post_comment_count=4;
    
    //move_uploaded_file($post_image_add,"../images/$post_image_name");
    
    $query="insert into user(username,user_firstname,user_lastname,user_password,user_email,user_role) values('$username','$user_firstname','$user_lastname','$user_password','$user_email','$user_role')";
    $ed=mysqli_query($con,$query);
    if(!$ed){echo mysqli_error($con);}
    echo "<h3 style='color:Green'>User Added :"."<a href='user.php'>View User</a></h3>";
}
?>





<form action="" method="post" enctype="multipart/form-data">
<label for="Username">Username</label>
<div class="form-group">
    <input type="text"  name="username" value="" class="form-control">
</div>

<label for="Firstname">Firstname</label>
<div class="form-group">
    <input type="text"  name="user_firstname" class="form-control">
</div>

<label for="Role">Role</label>
<div class="form-group">
    <select name="user_role" id="">
        <option value="subscriber">Select</option>
        <option value="Admin">Admin</option>
        <option value="subscriber">subscriber</option>
    </select>
    </div> 
<label for="Lastname">Lastname</label>
<div class="form-group">
    <input type="text"  name="user_lastname" class="form-control">
</div>
    
<!--
    <input type="text"  name="post_tag" class="form-control">
</div>
-->







<!--
<label for="Post Category Id">Post Category Id</label>
<div class="form-group">
    <input type="text"  name="post_category_id" class="form-control">
</div>
-->

<label for="Password">Password</label>
<div class="form-group">
    <input type="password"  name="user_password" class="form-control">
</div>

<label for="email">Email</label>
<div class="form-group">
    <input type="text"  name="user_email" class="form-control">
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
    <input type="submit" class="btn btn-primary" name="add_user">
</div>                        
                            
</form>