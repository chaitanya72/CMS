<?php include "header.php";?>
   
    <!-- Navigation -->
    <?php include "navigation.php";?>
<?php //include "con_z.php";?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

               <?php
                
                if(isset($_REQUEST['submit']))
                {$search=$_REQUEST['search'];
               $sql="select * from post where post_tag like '%$search%'";
                     $result=mysqli_query($con,$sql);
                    if(mysqli_num_rows($result)==0){echo "No";}
                    else{
                     while($row=mysqli_fetch_assoc($result))
                     {
                         $post_title=$row['post_title'];
                         $post_author=$row['post_author'];
                         $post_date=$row['post_date'];
                         $post_image=$row['post_image'];
                         $post_content=$row['post_content'];
                        // echo "<li><a href='#'>$title</a></li>";
                     ?>
                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $post_title;?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author;?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"><?php echo $post_date;?></span> </p>
                <hr>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p><?php echo $post_content;?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
     
                     
                     
                     
                    <?php }}}
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
            <?php include "bar2.php";?>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
      <?php include "footer.php";?>