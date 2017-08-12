<?php  include "includes/con_z.php"; ?>
 <?php  include "includes/header.php"; ?>
<?php include "admin/includes/method.php";?>

    <!-- Navigation -->
    <?php 
       if(isset($_REQUEST['submit']))
       {
           $username=$_REQUEST['username'];
           $password=$_REQUEST['password'];
           $email=$_REQUEST['email'];
           $lastname=$_REQUEST['lastname'];
           $firstname=$_REQUEST['firstname'];
           
           $error=['username'=>'','firstname'=>'','lastname'=>'','email'=>'','password'=>''];
           if($username=='')
           {
            $error['username']="User Name not entered";
           }
           if(q('user','username',$username))
           {
            $error['username']="User Name Already Exists";
           }
           if($firstname=='')
           {
            $error['firstname']="First Name not entered";
           }
           if($lastname=='')
           {
            $error['lastname']="Last Name not entered";
           }
           if($email=='')
           {
            $error['email']="Email not entered";
           }
           if(q('user','user_email',$email))
           {
            $error['email']="Email Already Exists";
           }
           if($password=='')
           {
            $error['password']="User Name not entered";
           }
           foreach($error as $key=>$value)
           {
            if($value=='')
            {
              unset($error[$key]);
            }
           }
           if(empty($error))
           {
             register($username,$firstname,$lastname,$email,$password);
           }
           // $password=password_hash($password,PASSWORD_DEFAULT,array('cost'=>10));
           
           // $query="insert into user(username,user_email,user_password,user_firstname,user_lastname,user_role) values('$username','$email','$password','$firstname','$lastname','subscriber')";
           
           // $register_user=mysqli_query($con,$query);
           // if(!$register_user){echo mysqli_error($con);}
       }





    ?>
    
    <?php  include "includes/navigation.php"; ?>
    
 
    <!-- Page Content -->
    <div class="container">
    
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                <h1>Register</h1>
                    <form role="form" action="registration.php" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="username" class="sr-only">username</label>
                            <input type="text" name="username" id="username" class="form-control" value="<?php echo isset($username)?$username:'' ?>" placeholder="Enter Desired Username">
                             <p><?php echo isset($error['username'])? $error['username']:''; ?></p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="sr-only">firstname</label>
                            <input type="text" name="firstname" id="username" class="form-control" value="<?php echo isset($firstname)?$firstname: ''; ?>" placeholder="Enter First Name">
                            <p><?php echo isset($error['firstname'])? $error['firstname']:''; ?></p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="sr-only">lastname</label>
                            <input type="text" name="lastname" id="username" class="form-control" value="<?php echo isset($lastname)? $lastname:''; ?>" placeholder="Enter Last Name">
                            <p><?php echo isset($error['lastname'])? $error['lastname']:''; ?></p>
                        </div>
                         <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="<?php echo isset($email)?$email:''; ?>" placeholder="somebody@example.com">
                            <p><?php echo isset($error['email'])? $error['email']:''; ?></p>
                        </div>
                         <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" id="key" class="form-control" placeholder="Password">
                            <p><?php echo isset($error['password'])? $error['password']:''; ?></p>
                        </div>
                
                        <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Register">
                    </form>
                 
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>


        <hr>



<?php include "includes/footer.php";?>
