<?php ob_start();?>
<?php include "../includes/con_z.php";?>
<?php include "includes/header.php";?>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/navigation.php";?>
        
        
        
        
        

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Blank Page
                            <small>Subheading</small>
                        </h1>
                    <?php //VIEW ALL POST 
                    ?>
                    
                    <?php //INSERTING INTO DATABASE AND IMAGE
if(isset($_SESSION['username']))
{
    //echo "<h1 stlye='color:red'>Before while</h1>";
    
    $id1=$_SESSION['username'];
    $query="select * from user where username='$id1'";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_assoc($result))
    {
    $username=$row['username'];
    $user_firstname=$row['user_firstname'];
    $user_lastname=$row['user_lastname'];
    $user_email=$row['user_email'];
    $user_passwordh=$row['user_password'];    
    //$post_image_name=['image']['name'];
    //$post_image_add=$_FILES['image']['tmp_name'];
    $user_role=$row['user_role'];
    //$post_content=$row['user_firstname'];
    //$post_date=$row['post_date'];
    //$post_comment_count=4;
        
    }
    
    if(isset($_REQUEST['update_user']))
    {
    $username=$_REQUEST['username'];
    $user_firstname=$_REQUEST['user_firstname'];
    $user_lastname=$_REQUEST['user_lastname'];
    $user_password=$_REQUEST['user_password'];
    //$user_password=password_hash($user_password,PASSWORD_DEFAULT,array('cost'=>10));
    //$post_image_name=$_FILES['image']['name'];
    //$post_image_add=$_FILES['image']['tmp_name'];
    $user_email=$_REQUEST['user_email'];
    $user_role=$_REQUEST['user_role'];
    //$post_date=date('d-m-y');
    //$post_comment_count=4;
    
    //move_uploaded_file($post_image_add,"../images/$post_image_name");
    
    //$query="insert into user(username,user_firstname,user_lastname,user_password,user_email,user_role) values('$username','$user_firstname','$user_lastname','$user_password','$user_email','$user_role')";
    //$ed=mysqli_query($con,$query);
    //if(!$ed){echo mysqli_error($con);}

    
    //move_uploaded_file($post_image_add,"../images/$post_image_name");
        
    //    if($post_image_name1=="")
    //    {
          //  $post_image_name1=$post_image_name;
      //  }
    if($user_password!="")
        {
            $user_password=password_hash($user_password,PASSWORD_DEFAULT,array('cost'=>10));
        }
        else
        {
            $user_password=$user_passwordh;
        }

    $id_user=$_SESSION['username'];
    $query="update user set  username='$username',user_firstname='$user_firstname',user_lastname='$user_lastname',user_email='$user_email',user_password='$user_password',user_role='$user_role' where username='$id_user'"; //values($post_category_id,'$post_title','$post_author',now(),'$post_image_name','$post_content','$post_tag','$post_comment_count','$post_status')";
    $ed1=mysqli_query($con,$query);
        if(!$ed1){echo mysqli_error($con);}
      
      //header("Location:index.php");

    }

    //if(!$ed1){echo mysqli_error($con);}
}
?>







<form action="" method="post" enctype="multipart/form-data">
<label for="Username">Username</label>
<div class="form-group">
    <input type="text"  name="username" value="<?php echo $username;?>" class="form-control">
</div>

<label for="Firstname">Firstname</label>
<div class="form-group">
    <input type="text"  name="user_firstname" value="<?php echo $user_firstname;?>" class="form-control">
</div>

<label for="Role">Role</label>
<div class="form-group">
    
       <select name="user_role">
       <option value="<?php echo $user_role?>"><?php echo $user_role?></option>
       <?php if($user_role=="Admin")
    {?>
        <option value="subscriber">subscriber</option>
    <?php }
        else
        {?>
          <option value="Admin">Admin</option>    
        <?php }
           ?>
       
       
<!--    <option value="">Hello1</option>-->
</select>
       
       
       
       
       
       
       
<!--
       <select name="user_role" id="">
        <option value="subscriber">Select</option>
        <option value="Admin">Admin</option>
        <option value="subscriber">subscriber</option>
    </select>
-->
    </div>
    
<label for="Lastname">Lastname</label>
<div class="form-group">
    <input type="text"  name="user_lastname" value="<?php echo $user_lastname;?>" class="form-control">
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
    <input type="email"  name="user_email" value="<?php echo $user_email;?>" class="form-control">
</div>


<!--
<label for="Content">Content</label>
<div class="form-group">
-->
<!--    <input type="text"  name="category_title" class="form-control">-->
<!--
<textarea class="form-control" name="post_content" id="" cols="30" rows="10"></textarea>
</div>
-->
<!--<label for="Date">Date</label>-->
<!--<div class="form-group">->>
    
<!-- </div>-->   
<!-- <label for="Submit">Submit</label>
<div class="form-group">
    <input type="submit" class="btn btn-primary" name="update_user">
</div> -->

<label for="Submit">Submit</label>
<div class="form-group">
    <input type="submit" class="btn btn-primary" name="update_user">
</div>                        
                            
</form>






                    
                    
                    
                    
                    
                    
          
                    
                              
                                        
                                                            
       
                                    
                                        
                                                
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    <?php include "includes/footer.php";?>