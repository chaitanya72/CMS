<?php include "includes/header.php";?>
    <div id="wrapper"><?php include "../includes/con_z.php";?>

        <!-- Navigation -->
        <?php include "includes/navigation.php";?>
        <?php $username=$_SESSION['username'];?>
        
     <?php //loadOnlineUser();?>   
        
        

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Blank Page
                            <small><?php echo $username;?></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
                       
                <!-- /.row -->
      

      <?php if(is_admin()){ ?>          
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                 <?php //POST COUNT 
                 // $query="select * from post";       
                 // $post_count_query=mysqli_query($con,$query);
                 $post_count=number_row('post');
                  echo "<div class='huge'>$post_count</div>";
                 ?>
                       
                        
<!--                     <div class='huge'>12</div>-->
                        <div>Posts</div>
                    </div>
                </div>
            </div>
            <a href="post.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                     <?php //POST COUNT 
                 //$query="select * from comment";       
                 //$comment_count_query=mysqli_query($con,$query);
                 $comment_count=number_row('comment');
                  echo "<div class='huge'>$comment_count</div>";
                 ?>
                     
<!--                     <div class='huge'>23</div>-->
                      <div>Comments</div>
                    </div>
                </div>
            </div>
            <a href="comment.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <?php //POST COUNT 
                 //$query="select * from user";       
                 //$user_count_query=mysqli_query($con,$query);
                 $user_count=number_row('user');
                  echo "<div class='huge'>$user_count</div>";
                 ?>
                       
<!--                    <div class='huge'>23</div>-->
                        <div> Users</div>
                    </div>
                </div>
            </div>
            <a href="user.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-list fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php //POST COUNT 
                 //$query="select * from category";       
                 //$category_count_query=mysqli_query($con,$query);
                 $category_count=number_row('category');
                  echo "<div class='huge'>$category_count</div>";
                 ?>
                        
<!--                        <div class='huge'>13</div>-->
                         <div>Categories</div>
                    </div>
                </div>
            </div>
            <a href="categorie.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>

<?php } else{?>
                <!-- /.row -->



                <!-- ROW-->
                  <div class="row">
    <div class="col-lg-6 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                 <?php //POST COUNT 
                 // $query="select * from post";       
                 // $post_count_query=mysqli_query($con,$query);
                 $user_id=$_SESSION['user_id'];
                 //fun number_rowqq take integer number as parameter
                 $post_count=number_rowqq('post','post_userid',$user_id);
                  echo "<div class='huge'>$post_count</div>";
                 ?>
                       
                        
<!--                     <div class='huge'>12</div>-->
                        <div>Posts</div>
                    </div>
                </div>
            </div>
            <a href="post.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                     <?php //POST COUNT 
                 //$query="select * from comment";       
                 //$comment_count_query=mysqli_query($con,$query);
                     $user_id=$_SESSION['user_id'];
                 $comment_count=number_rowqq('comment','comment_userid',$user_id);
                  echo "<div class='huge'>$comment_count</div>";
                 ?>
                     
<!--                     <div class='huge'>23</div>-->
                      <div>Comments</div>
                    </div>
                </div>
            </div>
            <a href="comment.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    
</div>

<?php }?>
                <!-- /ROW-->
               
                <?php 
                
                //$query="select * from post where post_status='draft'";       
                // $post_draft_count_query=mysqli_query($con,$query);
                 $post_draft_count=number_rowq('post','post_status','draft');
                
              //  $query="select * from comment where comment_status='unapproved'";       
               //  $comment_unapproved_count_query=mysqli_query($con,$query);
                 //x
                 $comment_unapproved_count=number_rowq('comment','comment_status','Unapproved');
                
               // $query="select * from user where user_role='subscriber'";       
               //  $user_not_count_query=mysqli_query($con,$query);
                 $user_not_count=number_rowq('user','user_role','subscriber');

                
                
                ?>
                 
                  
                   
                 <?php if(is_admin()){?>    
                <div class="row">
                <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Data', 'Count'],
          <?php 
          $element_name=['Post','Draft Post','Comment','Pending Comment','User','subscriber','Category'];
          $element_value=[$post_count,$post_draft_count,$comment_count,$comment_unapproved_count,$user_count,$user_not_count,$category_count];
            for($i=0;$i<7;$i++)
            {
                echo "['$element_name[$i]', " . "$element_value[$i]],";
            }
          ?>
            
            
            
         // ['post', 1000],
          
          
          
        ]);

        var options = {
          chart: {
            title: '',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
                
             <div id="columnchart_material" style="width: 'auto'; height: 500px;"></div>   
                
                
                </div>

                <?php }else{?>

                <!-- GRAPH-->
                 <div class="row">
                <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Data', 'Count'],
          <?php 
          $user_id=$_SESSION['user_id'];
          //fun number_rowqqt takes two rows
           $post_draft_count=number_rowqqt('post','post_status','draft','post_userid',$user_id);
           $post_active_count=number_rowqqt('post','post_status','publish','post_userid',$user_id);
           $comment_approved_count=number_rowqqt('comment','comment_status','Approved','comment_userid',$user_id);
           $comment_unapproved_count=number_rowqqt('comment','comment_status','Unapproved','comment_userid',$user_id);
          $element_name=['Post','Active Post','Draft Post','Comment','Approved Comment','Pending Comment'];
          $element_value=[$post_count,$post_active_count,$post_draft_count,$comment_count,$comment_approved_count,$comment_unapproved_count];
            for($i=0;$i<6;$i++)
            {
                echo "['$element_name[$i]', " . "$element_value[$i]],";
            }
          ?>
            
            
            
         // ['post', 1000],
          
          
          
        ]);

        var options = {
          chart: {
            title: '',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
                
             <div id="columnchart_material" style="width: 'auto'; height: 500px;"></div>   
                
                
                </div>

                <?php }?>
                <!-- /GRAPH-->
                
                
                
                
                
                
                
                
                
                
                
                
                <!--This-->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    <?php include "includes/footer.php";?>