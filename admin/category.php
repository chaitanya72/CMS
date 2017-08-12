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
                    
                       <?php //ADD CATEGORY
                        create_category();
                       ?>
                       
                       
                        <div class="col-xs-6">
                            <label for="Add Category">Add Category</label>
                            <form action="" method="post">
                            <div class="form-group">
                                <input type="text"  name="category_title" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <input type="submit"  name="Submit" value="Add Category" class="btn btn-primary">
                            </div>
                            <!--For Editing The Values-->
                            
                            <?php
                            if(isset($_REQUEST['edit']))
                            {
                                $cat_i=$_REQUEST['edit'];
                                include "includes/edit.php";
                            }
                            
                            ?>
                            </form>
                        </div>
                        <div class="col-xs-6">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <th>Id</th>
                                    <th>Category</th>
                                </thead>
                            <?php //TO INSERT ROWS IN TABLE
                            findAllCategory();
                            ?>    
                                
                            </table>
                        </div> 
                               
                        
                        
                                  
                        
                        <?php //DEL CATEGOR
                        deleteCategory();
                        ?>        
                                    
                                        
                                                
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    <?php include "includes/footer.php";?>