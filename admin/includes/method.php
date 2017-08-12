<?php 
function loadOnlineUser()
{
                if(isset($_REQUEST['online'])||!isset($_REQUEST['online']))
                { global $con;
                 //if(!$con)
                 //{
                     //include "../includes/con_z.php";
                    // $con=mysqli_connect("localhost","root","","cms");
                     //session_start();
                 //}
                $session=session_id();
                $time=time();
                $query="select * from userlog where sessionid='$session'";
                $online_user=mysqli_query($con,$query);
                if(!$online_user){echo mysqli_error($con);}
                $count_online=mysqli_num_rows($online_user);
                if($count_online==0)
                {
                    $query="insert into userlog(sessionid,time) values('$session','$time')";
                    $online_user_in=mysqli_query($con,$query);
                    
                }else
                {
                    $query="update userlog set time=$time where sessionid='$session'";
                    $online_user_u=mysqli_query($con,$query);
                    
                }
    
                 $timelog=$time-30;
                   $query="select * from userlog where time>$timelog";
                    $online_user_count=mysqli_query($con,$query);
                   $online_co=mysqli_num_rows($online_user_count);
                 return $online_co;  
                  //echo $online_co;
                //echo"hello";
}
    //echo("hello");
}
//loadOnlineUser();
//loadOnlineUser();

function create_category()
{
    global $con;
    if(isset($_REQUEST['Submit']))
                        {
                            $cat_tile=$_REQUEST['category_title'];
                                                
                            $query="insert into category(cat_title) values('$cat_tile')";
                            if($cat_tile!='')
                            {
                              $insert=mysqli_query($con,$query);
                                if(!$insert){echo "Query";}
                            }    
                                
                        }
}

function findAllCategory()
{
    global $con;
    $query="select * from category";
                            $selected_category=mysqli_query($con,$query);
                                while($row=mysqli_fetch_assoc($selected_category))
                                {
                                    $id=$row['cat_id'];
                                    $title=$row['cat_title'];
                                    echo "<tr>";
                                    echo "<td>$id</td>";
                                    echo "<td>$title</td>";
                                    echo "<td><a href='category.php?delete=$id'>Delete</a></td>";
                                    echo "<td><a href='category.php?edit=$id'>Edit</a></td>";
                                    echo "</tr>";//echo "<tr>";
                                }
}

function deleteCategory()
{
    global $con;
    if(isset($_REQUEST['delete']))
                        {
                            $cat_idr=$_REQUEST['delete'];
                            $query="delete from category where cat_id=$cat_idr";
                            $del=mysqli_query($con,$query);
                            if(!$del){echo "Query";}
                            header("Location:category.php");
                        }
}

function number_row($table)
{
    global $con;
    $query="select * from $table";       
    $count_query=mysqli_query($con,$query);
    return mysqli_num_rows($count_query);
}

function number_rowq($table,$row,$value)
{
    global $con;
    $query="select * from $table where $row='$value'";       
    $count_query=mysqli_query($con,$query);
    return mysqli_num_rows($count_query);
}

function number_rowqq($table,$row,$value)
{
    global $con;
    $query="select * from $table where $row=$value";
    $count_query=mysqli_query($con,$query);
    return mysqli_num_rows($count_query);
}

function number_rowqqt($table,$row,$value,$rowq,$valueq)
{
    global $con;
    $query="select * from $table where $row='$value' and $rowq=$valueq";
    $count_query=mysqli_query($con,$query);
    return mysqli_num_rows($count_query);
}

function register($username,$firstname,$lastname,$email,$password)
{
     global $con;
     $passwordq=$password;
     $password=password_hash($password,PASSWORD_DEFAULT,array('cost'=>10));


           
    $query="insert into user(username,user_email,user_password,user_firstname,user_lastname,user_role) values('$username','$email','$password','$firstname','$lastname','subscriber')";
           
    $register_user=mysqli_query($con,$query);
     if(!$register_user){echo mysqli_error($con);}
     login($username,$passwordq);
}

function login($username,$password)
{
     global $con;
     session_start();
    $query="select * from user where username='$username'";
$check_username=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($check_username))
{   $user_id=$row['user_id'];
    $userole=$row['user_role'];
    $user_password=$row['user_password'];
}
if(password_verify($password,$user_password))
{   
    $_SESSION['user_id']=$user_id;
    $_SESSION['username']=$username;
    $_SESSION['password']=$password;
    $_SESSION['user_role']=$userole;
    header("Location:admin/index.php");
}
else
{
    echo "Password Error";
    //header("Location:../index.php");
}
}

function q($table,$row,$value)
{   global $con;
    $query="select * from $table where $row='$value'";
    $count=mysqli_query($con,$query);
    if(mysqli_num_rows($count)>0){return true;}
    else {return false;}
}

function is_admin()
{
    $userrole=$_SESSION['user_role'];
    if($userrole=='Admin')
    {
        return true;
    }
    else
    {
        return false;
    }
}
?>