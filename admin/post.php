<?php ob_start();?>
<?php include "../includes/con_z.php";?>
<?php include "includes/header.php";?>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/navigation.php";?>
        
        
        <?php 
        if(!isset($_SESSION['username']))
        {
            header("Location:../index.php");
        }
        else
        {
            echo "Session Set";
            echo $_SESSION['username'];
        }
        ?>
        
        <?php include "includes/modal.php"; ?>
        

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
                  case 2: include"includes/add.php";break;
                  case 'edit':include"includes/edit_post.php";break;      
                      
                      
                      
                      
                      
                      
                      
                  default:include "includes/post_table.php";
              }
                        
            if(isset($_REQUEST['delete']))
            {
                            $post_idr=$_REQUEST['delete'];
                            $query="delete from post where post_id=$post_idr";
                            $del=mysqli_query($con,$query);
                            if(!$del){echo "Query";}
//                            header("Location:post.php");
                            header("Location:post.php");
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