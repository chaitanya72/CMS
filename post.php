<?php include "includes/header.php";?>
   
    <!-- Navigation -->
    <?php include "includes/navigation.php";?>
<?php include "includes/con_z.php";?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

               <?php 
                
                $id=$_REQUEST['p_id'];
               
                $query="update post set post_view=post_view+1 where post_id=$id";
                $in_view=mysqli_query($con,$query);
                
                $sql="select * from post where post_id=$id";
                     $result=mysqli_query($con,$sql);
                     while($row=mysqli_fetch_assoc($result))
                     {   
                         $post_id=$row['post_id'];
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
                    <a href="post.php?p_id=<?php echo $post_id;?>"><?php echo $post_title;?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author;?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"><?php echo $post_date;?></span> </p>
                <hr>
                <img  class="img-responsive" src="images/<?php echo $post_image;?>" alt="">
                <hr>
                <p><?php echo $post_content;?></p>
<!--                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>-->

                <hr>
     
                     
                     
                     
                    <?php }
               ?>
               
                      <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form action="" method="post" role="form">
                       <label for="Author">Author</label>
                        <div class="form-group">
                            <input type="text" id="author" name="comment_author" class="form-control" rows="3">
                        </div>
                        <label for="Email">Email</label>
                        <div class="form-group">
                            <input type="email" id="email" name="comment_email" class="form-control" rows="3">
                        </div>
                           
                        <div class="form-group">
                            <textarea id="content" name="comment_content" class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" onClick="return isEmpty()" name="comment_req" class="btn btn-primary">Submit</button>
                    </form>
                    
                            <script>

                                function isEmpty()
                                {
                                    var x=document.getElementById('author').value;
                                    var y=document.getElementById('email').value;
                                    var z=document.getElementById('content').value;
                                    if(x==""||y==""||z==""){alert("Required Fields are Not Entered"); return false;}
                                    else{return true;}
                                }
                            </script>  
                    
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                <?php 
                if(isset($_REQUEST['comment_req']))
                {
                    $comment_author=$_REQUEST['comment_author'];
                    $comment_email=$_REQUEST['comment_email'];
                    $comment_content=$_REQUEST['comment_content'];
                    $comment_post_id=$_REQUEST['p_id'];

                    $query1="select * from post where post_id=$comment_post_id";
                    $user_in=mysqli_query($con,$query1);
                    while($row=mysqli_fetch_assoc($user_in))
                    {
                        $user_id=$row['post_userid'];
                    }


                    if($comment_author!=""&&$comment_email!=""&&$comment_content!="")
                    { //}
                    $query="insert into comment(comment_post_id,comment_author,comment_email,comment_content,comment_status,comment_date,comment_userid) values($comment_post_id,'$comment_author','$comment_email','$comment_content','unapproved',now(),$user_id)";
                    $in_comment=mysqli_query($con,$query);
                    if(!$in_comment){echo Query;}
                    $query="update post set post_comment_count=post_comment_count+1 where post_id=$comment_post_id";
                    $increment_count=mysqli_query($con,$query);
                    }
                }
                
                if(isset($_REQUEST['p_id']))
                {
                    $p_id=$_REQUEST['p_id'];
                    $query="select * from comment where comment_post_id='$p_id' and comment_status='Approved' order by comment_id DESC";
                    $select_comment=mysqli_query($con,$query);
                    while($row=mysqli_fetch_assoc($select_comment))
                    { 
                       $comment_author=$row['comment_author'];
                       $comment_date=$row['comment_date'];
                    $comment_content=$row['comment_content'];
                
                
                
                
                ?>
                        <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $comment_author;?>
                            <small><?php echo $comment_date;?></small>
                        </h4>
                        <?php echo $comment_content;?>
                    </div>
                </div>
                    <?php }
                }
                ?>
                
                
                
                
                
                
                
                

               
               
                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
<!--
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
-->
                        <!-- Nested Comment -->
<!--
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested Start Bootstrap
                                    <small>August 25, 2014 at 9:30 PM</small>
                                </h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
-->
                        <!-- End Nested Comment -->
<!--                    </div>-->
               
                
                  </div>
         
               
               
               
               
<!--
                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>
-->

                <!-- First Blog Post -->
<!--
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
-->

                <!-- Second Blog Post -->
                
                <!-- Third Blog Post -->
                
                <!-- Pager -->
                

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/bar2.php";?>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
      <?php include "includes/footer.php";?>