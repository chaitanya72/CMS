<?php //include "includes/method.php";?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin CMS</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
              
              <script>
//              function loadonlineuser()
//{
//    var x=document.getElementById("userc").value;
//    var y=<?php //echo loadOnlineUser();?>;
//        document.getElementById("userc").innerHTML=y;
//    //alert("hello");
//    //$.get("method.php?online=rel", function(data){
//      //  $(".usercount").text(data);
//    //});
//}
////loadonlineuser()
//setInterval(function(){
//loadonlineuser();    
//},500);
  
              </script>
                
               <li><a href="../index.php">Home</a></li>
               
               <li><a href="">Users Online <?php echo loadOnlineUser();?><label for="" id="userc"></label><span class="usercount"><?php 
//                   $time=time();
//                   $timelog=$time-30;
//                   $query="select * from userlog where time>$timelog";
//                    $online_user_count=mysqli_query($con,$query);
//                   $online_co=mysqli_num_rows($online_user_count);
//                   echo $online_co;
                   
                   
                   
                   ?></span></a></li>
               
                <script>
//              function loadonlineuser()
//{
//    
//    
//    //alert("in");
//    //var x=document.getElementById("userc").value;
//    var y=<?php //$time=time();$timelog=$time-30;
//                   $query="select * from userlog where time>$timelog";
//                    $online_user_count=mysqli_query($con,$query);
//                   $online_co=mysqli_num_rows($online_user_count);
//                 echo $online_co;  ?>;
//        document.getElementById("userc").innerHTML=y;
//    //alert("hello");
//    //$.get("method.php?online=rel", function(data){
//      //  $(".usercount").text(data);
//    //});
//}
////loadonlineuser();
//setInterval(loadonlineuser,500);
  
              </script>

              <?php 
                 $pagename=basename($_SERVER['PHP_SELF']);
                 $index='';
                 $comment='';
                 $category='';
                 if($pagename=="index.php")
                 {
                    $index='active';
                 }
                 if($pagename=="comment.php")
                 {
                    $comment='active';
                 }
                 if($pagename=="category.php")
                 {
                    $category='active';
                 }
              ?>
               
                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="log.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class='<?php echo $index;?>'>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
<!--
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
-->
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#ost"><i class="fa fa-fw fa-arrows-v"></i> Post <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="ost" class="collapse">
                            <li>
                                <a href="post.php">View All Post</a>
                            </li>
                            <li>
                                <a href="post.php?source=2">Add Post</a>
                            </li>
                        </ul>
                    </li>
<!--
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
-->
                    <?php if(is_admin()){?>
                    <li class="<?php echo $category;?>">
                        <a href="category.php"><i class="fa fa-fw fa-wrench"></i> Categories</a>
                    </li>
                    <?php }?>
                    <?php if(is_admin()){?>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="user.php">View All Users</a>
                            </li>
                            <li>
                                <a href="user.php?source=2">Add User</a>
                            </li>
                        </ul>
                    </li>
                    <?php }?>
                    <li class="<?php echo $comment;?>">
                        <a href="comment.php"><i class="fa fa-fw fa-file"></i> Comments</a>
                    </li>
                    <li>
                        <a href="q.php"><i class="fa fa-fw fa-dashboard"></i> Profile</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>