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
                    
        <?php //SWITCH 
          if(isset($_REQUEST['source']))
          {
              $source=$_REQUEST['source'];}
          else{ $source="q";}
              switch($source)
              {
                  case 1:  echo "he"; break;
                  case 2: include"includes/add_user.php";break;
                  case 'edit':include"includes/edit_user.php";break;      
                      
                      
                      
                      
                      
                      
                      
                  default:include "includes/user_table.php";
              }
                        
            if(isset($_REQUEST['delete']))
            {
                            $user_idr=$_REQUEST['delete'];
                            $query="delete from user where user_id=$user_idr";
                            $del=mysqli_query($con,$query);
                            if(!$del){echo "Query";}
//                            header("Location:post.php");
                            header("Location:user.php");
            }
            
            if(isset($_REQUEST['admin']))
            {
                            $cid=$_REQUEST['admin'];
                            $query="update user set user_role='Admin' where user_id='$cid'";
                            $del=mysqli_query($con,$query);
                            if(!$del){echo "Query";}
//                            header("Location:post.php");
                            header("Location:user.php");
            }
            
            if(isset($_REQUEST['subscriber']))
            {
                            $cid=$_REQUEST['subscriber'];
                            $query="update user set user_role='subscriber' where user_id='$cid'";
                            $del=mysqli_query($con,$query);
                            if(!$del){echo "Query";}
//                            header("Location:post.php");
                            header("Location:user.php");
            }
          
        
                        ?>
                    
                    
                    <?php //include "includes/post_table.php";?>   
                                    
                                        
                                                
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    <?php include "includes/footer.php";?>