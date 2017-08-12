<table class="table table-bordered table-hover">
                           <thead>
                               <tr>
                               <th>Id</th>
                               <th>Author</th>
                               <th>Content</th>
                               <th>Date</th>
                               <th>Email</th>
                               <th>Status</th>
                               <th>Response To</th>
                               <th>Approve</th>
                               <th>Unapprove</th>
                               </tr>
                           </thead>
                           <tbody>
                    <?php 
                    $id=$_REQUEST['p_id'];
                    $query="select * from comment where comment_post_id=$id";
                    $selected=mysqli_query($con,$query);
                    while($row=mysqli_fetch_assoc($selected))
                    {
                        $comment_id=$row['comment_id'];
                        $comment_author=$row['comment_author'];
                        $comment_content=$row['comment_content'];
                        $comment_date=$row['comment_date'];
                        $comment_email=$row['comment_email'];
                        $comment_status=$row['comment_status'];
                        $comment_post_id=$row['comment_post_id'];
                                                       
                               echo "<tr>";
                               echo "<td>$comment_id</td>";
                               echo "<td>$comment_author</td>";
                               echo "<td>$comment_content</td>";
                               echo "<td>$comment_date</td>";
                               echo "<td>$comment_email</td>";
                               echo "<td>$comment_status</td>";
                        
                 //RELATING TO POST TABLE 
                
                $query2="select * from post where post_id=$comment_post_id";
                $rel=mysqli_query($con,$query2);
                if(!$rel){echo mysqli_error($con);}
                
                while($row=mysqli_fetch_assoc($rel))
                {
                $post_id=$row['post_id'];
                $post_title=$row['post_title'];
                    echo "<td><a href='../post.php?p_id=$post_id'>$post_title</a></td>";                
                
                //<!--        <option value="">Hello</option>-->
                 }
                
                        
                               
                               
                        echo "<td><a href='comment_q.php?approved=$comment_id&p_id=$comment_post_id'>Approve</a></td>";
                        echo "<td><a href='comment_q.php?unapproved=$comment_id&p_id=$comment_post_id'>Unapprove</a></td>";
                        echo "<td><a href='comment_q.php?delete=$comment_id&p_id=$comment_post_id'>Delete</a></td>";
                        
                               echo "</tr>";
                    }
                               
                               


                    ?>          
                              
                              
                              
                              
                              
                              
                              
                           </tbody>
                       </table>