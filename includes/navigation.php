<?php include "con_z.php";?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                     <?php 
                     $sql="select * from category";
                     $result=mysqli_query($con,$sql);
                     while($row=mysqli_fetch_assoc($result))
                     {
                         $category_class='';
                         $registration='';
                         $title=$row['cat_title'];
                         $id_cat=$row['cat_id'];
                         if(isset($_REQUEST['category']) && $_REQUEST['category']==$id_cat)
                            {$category_class='active';}

                         echo "<li class='$category_class'><a href='category.php?category=$id_cat' class=''>$title</a></li>";
                     }
                     $pagename=basename($_SERVER['PHP_SELF']);
                     if($pagename=='registration.php')
                     {
                        $registration='active';
                     }
                     echo "<li class='$registration'><a href='registration.php' class=''>Registration</a></li>";
                     ?>
                   
                        
<!--
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
-->
                </ul>
                 <ul class="nav navbar-nav navbar-right">
                 <li class="nav navbar-right"><a href="admin/index.php">Admin</a></li>
                </ul>  
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>