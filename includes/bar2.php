<div class="col-md-4">

                <!-- Blog Search Well -->
                
                
                <div class="well">
                    <h4>Blog Search</h4>
                    <form action="search.php">
                       <div class="input-group">
                        
                        <input type="text" name="search" class="form-control">
                        <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                        
                    </div>
                    </form>
                    <!-- /.input-group -->
                </div>
                
                <div class="well">
                    <h4>Login</h4>
                    <form action="includes/login.php">
                       <div class="form-group">
                            <input type="text" placeholder="Enter The Username" name="username" class="form-control">
                       </div>
                        <div class="input-group">
                            <input type="password" placeholder="Enter The Password" name="password" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" name="login" value="login">Login</button>
                            </span>
                        </div>
                        
                                
                        
                        
                        
                    
                    </form>
                    <!-- /.input-group -->
                </div>


               
                
                 
                <!-- Blog Categories Well -->
                <div class="well">
                   
                   <?php 
                    $select_category="select * from category";
                     $selected_category=mysqli_query($con,$select_category);
                     
                    ?>
                   
                   
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                                
                      <?php          while($row=mysqli_fetch_assoc($selected_category))
                     {
                         $title=$row['cat_title'];
                         $id=$row['cat_id'];
                         echo "<li><a href='category.php?category=$id'>$title</a></li>";
                     }
                    ?>
                                
<!--
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
-->
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
<!--
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
-->
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                 <?php include "widget.php";?>
<!--
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>
-->

            </div>
