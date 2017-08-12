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
                    case 'ToAdmin':
                        $query="update user set user_role='Admin' where user_id=$checkbox";
                        $user_check=mysqli_query($con,$query);
                        break;
                    case 'Tosubscriber':
                        $query="update user set user_role='subscriber' where user_id=$checkbox";
                        $user_check=mysqli_query($con,$query);
                        //if(!$user_check){echo "query";}
                        break;
                    case 'delete':
                        $query="delete from user where user_id=$checkbox";
                        $user_check=mysqli_query($con,$query);
                        break;
                        
                }
        }
    }
}
 ?>









<form method="post">
<div id="bulkoption" style="padding:0" class="col-xs-4">
    <select name="op" id="" style="" class="form-control">
        <option value="">Select An Operation</option>
        <option value="ToAdmin">To Admin</option>
        <option value="Tosubscriber">To subscriber</option>
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
                               <th><input type="checkbox" class="checkBox"  id="selectall"></th>
                               <th>Id</th>
                               <th>Username</th>
                               <th>Firstname</th>
                               <th>lastname</th>
                               <th>Email</th>
<!--                               <th>Image</th>-->
                               <th>Role</th>
                               <th>Approve</th>
                               <th>Unapprove</th>
                               </tr>
                           </thead>
                           <tbody>
                    <?php 
                    $query="select * from user";
                    $selected=mysqli_query($con,$query);
                    while($row=mysqli_fetch_assoc($selected))
                    {
                        $user_id=$row['user_id'];
                        $username=$row['username'];
                        $user_firstname=$row['user_firstname'];
                        $user_lastname=$row['user_lastname'];
                        $user_email=$row['user_email'];
                        $user_role=$row['user_role'];
                        //$comment_post_id=$row['comment_post_id'];
                                                       
                               echo "<tr>";
                               echo "<td><input type='checkbox' class='checkBox' name='checkboxarray[]' value='$user_id'></td>";
                               echo "<td>$user_id</td>";
                               echo "<td>$username</td>";
                               echo "<td>$user_firstname</td>";
                               echo "<td>$user_lastname</td>";
                               echo "<td>$user_email</td>";
                               echo "<td>$user_role</td>";
                        
                 //RELATING TO POST TABLE 
                
//                $query2="select * from post where post_id=$comment_post_id";
//                $rel=mysqli_query($con,$query2);
//                if(!$rel){echo mysqli_error($con);}
//                
//                while($row=mysqli_fetch_assoc($rel))
//                {
//                $post_id=$row['post_id'];
//                $post_title=$row['post_title'];
//                    echo "<td><a href='../post.php?p_id=$post_id'>$post_title</a></td>";                
//                
//                //<!--        <option value="">Hello</option>-->
//                 }
                
                        
                               
                               
                        echo "<td><a href='user.php?admin=$user_id'>To Admin</a></td>";
                        echo "<td><a href='user.php?subscriber=$user_id'>To Subscriber</a></td>";
                        echo "<td><a href='user.php?delete=$user_id'>Delete</a></td>";
                        echo "<td><a href='user.php?source=edit&p_id=$user_id'>Edit</a></td>";
                        //echo "<td><t";
                               echo "</tr>";
                    }
                               
                               


                    ?>          
                              
                              
                              
                              
                              
                              
                              
                           </tbody>
                       </table>
                       </form>