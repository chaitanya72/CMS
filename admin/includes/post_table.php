
<?php 
if(isset($_REQUEST['checkboxarray']))
{
    if(isset($_REQUEST['apply']))
    {
        foreach($_REQUEST['checkboxarray'] as $checkbox)
        {
            $op=$_REQUEST['op'];
                switch($op)
                {
                    case 'publish':
                        $query="update post set post_status='publish' where post_id=$checkbox";
                        $post_check=mysqli_query($con,$query);
                        break;
                    case 'draft':
                        $query="update post set post_status='draft' where post_id=$checkbox";
                        $post_check=mysqli_query($con,$query);
                        break;
                    case 'delete':
                        $query="delete from post where post_id=$checkbox";
                        $post_check=mysqli_query($con,$query);
                        break;
                        
                }
        }
    }
}
?>




<form action="" method="post">
<div id="bulkoption" style="padding:0" class="col-xs-4">
    <select name="op" id="" style="" class="form-control">
        <option value="">Select An Operation</option>
        <option value="publish">Publish</option>
        <option value="draft">Draft</option>
        <option value="delete">Delete</option>
    </select>
</div>
<div class="col-xs-4">
    <input type="submit" class="btn btn-success" value="Apply" name="apply">
    <input type="submit" class="btn btn-primary" value="Add New" name="add_new">
</div>
                          

                          
                          
                          
                          <table class="table table-bordered table-hover">
                           <thead>
                               <tr>
                               <th><input type="checkbox" class="checkBox" id="selectall"></th>
                               <th>Id</th>
                               <th>Author</th>
                               <th>Title</th>
                               <th>Category</th>
                               <th>Status</th>
                               <th>Image</th>
                               <th>Tags</th>
                               <th>Comments</th>
                               <th>Date</th>
                               <th>Delete</th>
                               <th>Edit</th>
                               <th>View Post</th>
                               <th>Views</th>
                               </tr>
                           </thead>
                           <tbody>
                    <?php 
                      $user_id=$_SESSION['user_id'];
                    if(is_admin())
                    {
                    $query="select * from post";
                    }
                    else
                    {
                     $query="select * from post where post_userid=$user_id"; 
                    }
                    $selected=mysqli_query($con,$query);
                    while($row=mysqli_fetch_assoc($selected))
                    {
                        $post_id=$row['post_id'];
                        $post_author=$row['post_author'];
                        $post_title=$row['post_title'];
                        $post_category_id=$row['post_category_id'];
                        $post_status=$row['post_status'];
                        $post_image=$row['post_image'];
                        $post_tag=$row['post_tag'];
                        $post_comment_count=$row['post_comment_count'];
                        $post_date=$row['post_date'];
                        $post_view=$row['post_view'];
                               
                               echo "<tr>";
                               echo "<th><input type='checkbox' class='checkBox' id='' value='$post_id' name='checkboxarray[]'></th>";
                               echo "<td>$post_id</td>";
                               echo "<td>$post_author</td>";
                               echo "<td>$post_title</td>";
                        
                 //RELATING TO CATEGORY TABLE 
                
                $query2="select * from category where cat_id=$post_category_id";
                $rel=mysqli_query($con,$query2);
                if(!$rel){echo mysqli_error($con);}
                
                while($row=mysqli_fetch_assoc($rel))
                {
                $cat_id=$row['cat_id'];
                $cat_title=$row['cat_title'];
                    echo "<td>$cat_title</td>";                
                
                //<!--        <option value="">Hello</option>-->
                 }
                
                        
                               //echo "<td>$post_category_id</td>";
                        
                        
                               echo "<td>$post_status</td>";
                               echo "<td><img width='100' src='../images/$post_image' alt='Image'></td>";
//                               echo "<td>$post_image</td>";
                               echo "<td>$post_tag</td>";
                               echo "<td><a href='comment_q.php?p_id=$post_id'>$post_comment_count</a></td>";
                               echo "<td>$post_date</td>";
                               echo "<td><a rel='$post_id' href='javascript:void(0)' class='delete_link'>Delete</a>";
                               //echo "<td><a href='post.php?delete=$post_id'>Delete</a></td>";
                               echo "<td><a href='post.php?source=edit&p_id=$post_id'>Edit</a></td>";
                               echo "<td><a href='../post.php?p_id=$post_id'>View Post</a></td>";
                               echo "<td>$post_view</td>";
                               echo "</tr>";
                    }
                    ?>          
                              
                              <script>
                                  $(document).ready(function(){
                                         //alert("In Jquery");
                                     $(".delete_link").on('click', function(){
                                        var id= $(this).attr("rel");
                                        var url="post.php?delete="+id;
                                        //alert(url);
                                        $(".model_delete_link").attr("href",url);
                                        $("#myModal").modal('show');

                                     });

                                  });

                              </script>
                              
                              
                              
                              
                              
                           </tbody>
                       </table>
                       </form>