<?php include "includes/header.php";?>
  <?php session_start();?>
   
    <!-- Navigation -->
    <?php include "includes/navigation.php";?>
<?php include "includes/con_z.php";?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
               
               <?php 
//                $session=session_id();
//                $time=time();
//                $query="select * from userlog where sessionid='$session'";
//                $online_user=mysqli_query($con,$query);
//                if(!$online_user){echo mysqli_error($con);}
//                $count_online=mysqli_num_rows($online_user);
//                if($count_online==0)
//                {
//                    $query="insert into userlog(sessionid,time) values('$session','$time')";
//                    $online_user_in=mysqli_query($con,$query);
//                    
//                }else
//                {
//                    $query="update userlog set time=$time where sessionid='$session'";
//                    $online_user_u=mysqli_query($con,$query);
//                    
//                }
                
                ?>

               <?php 
                if(isset($_REQUEST['page']))
                {
                $page=$_REQUEST['page'];
                }
                else{$page="";}
                $page_no_e=5;
                if($page==1||$page=="")
                {
                    $page=1;
                }
                
                $page_q=($page*$page_no_e)-$page_no_e;
                
                $sqlq="select * from post";
                $resulth=mysqli_query($con,$sqlq);
                $count=mysqli_num_rows($resulth);
                $count=ceil($count/$page_no_e);
                

                $sql1="select * from post order by post_id desc limit $page_q, $page_no_e";
                     
                $result1=mysqli_query($con,$sql1);
                if(!$result1){echo mysqli_error($con);}
                //$count=mysqli_num_rows($result1);
                //$count=ceil($count/$page_no_e);
                
               //$sql="select * from post";
                 //    $result=mysqli_query($con,$sql);
                     while($row=mysqli_fetch_assoc($result1))
                     {   
                         $post_id=$row['post_id'];
                         $post_title=$row['post_title'];
                         $post_author=$row['post_author'];
                         $post_date=$row['post_date'];
                         $post_image=$row['post_image'];
                         $post_content=substr($row['post_content'],0,500);
                         $post_content=mysqli_real_escape_string($con,$post_content);
                         // echo "<li><a href='#'>$title</a></li>";
                     ?>
                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="post.php?p_id=<?php echo $post_id;?>"><?php echo $post_title;?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author;?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"><?php echo $post_date;?></span> </p>
                <hr>
                <a href="post.php?p_id=<?php echo $post_id;?>">
                <img  class="img-responsive" src="images/<?php echo $post_image;?>" alt="">
                </a>
                <hr>
                <p><?php echo $post_content;?></p> <!-- <br> -->
                <a class="btn btn-primary" href="post.php?p_id=<?php echo $post_id;?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
     
                     
                     
                     
                    <?php }
               ?>
               
               
               
               
               
               
                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#">Blog Post Title</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Start Bootstrap</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
                <hr>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <!-- Second Blog Post -->
                
                <!-- Third Blog Post -->
                
                <!-- Pager -->
                

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/bar2.php";?>
        </div>
        <!-- /.row -->

        <hr>
              
              <ul class="pager">
              <?php 
               
               for($i=1;$i<=$count;$i++)
               {
                   echo "<li><a href='index.php?page=$i'>$i</a></li>";
               }
              ?>
              </ul>
              
        <!-- Footer -->
      <?php include "includes/footer.php";?>