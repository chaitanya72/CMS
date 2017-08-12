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
                        //$pid=$_REQUEST['idx'];
              switch($source)
              {
                  case 1:  echo "he"; break;
                  case 2: include"includes/add.php";break;
                  case 'edit':include"includes/edit_post.php";break;
                 // case 'p_id':include "includes/comment_table.php?p_id=$pid";
                      
                      
                      
                      
                      
                      
                      
                  default:include "includes/comment_table.php";
              }
                        
            if(isset($_REQUEST['delete']))
            {
                            $comment_idr=$_REQUEST['delete'];
                            $query="delete from comment where comment_id=$comment_idr";
                            $del=mysqli_query($con,$query);
                            if(!$del){echo "Query";}
//                            header("Location:post.php");
                            header("Location:comment.php");
            }
            
            if(isset($_REQUEST['approved']))
            {
                            $cid=$_REQUEST['approved'];
                            $query="update comment set comment_status='Approved' where comment_id='$cid'";
                            $del=mysqli_query($con,$query);
                            if(!$del){echo "Query";}
//                            header("Location:post.php");
                            header("Location:comment.php");
            }
            
            if(isset($_REQUEST['unapproved']))
            {
                            $cid=$_REQUEST['unapproved'];
                            $query="update comment set comment_status='Unapproved' where comment_id='$cid'";
                            $del=mysqli_query($con,$query);
                            if(!$del){echo "Query";}
//                            header("Location:post.php");
                            header("Location:comment.php");
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