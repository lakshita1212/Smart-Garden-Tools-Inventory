<table width="100%" cellpadding="3">
   <?php
 /*
Lakshita Madhavan November 15, 2024 lm66@njit.edu
IT 202 001  || Phase 4 Assignment
*/

   if (!isset($_SESSION['login'])) {
   ?>
       <tr>
           <td>
               <hr />
           </td>
       </tr>
   <?php
   } else {
    echo "<td><h3>Welcome, {$_SESSION['login']}</h3></td>\n";
?>
     <tr>
         <td><img src="images/home.png" alt="Home Icon" width="12" height="12">&nbsp;
             <a href="index.php"><strong>Home</strong></a>
         </td>
     </tr>
     <tr>
         <td><img src="images/categories.png" alt="Categories Icon" width="12" height="12">&nbsp;
             <strong>Categories</strong>
         </td>
     </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listgardentoolscategories">
                   <strong>List Categories</strong></a></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newgardentoolscategory">
                   <strong>Add New Category</strong></a></td>
       </tr>
       <tr><img src="images/items.png" alt="Items Icon" width="12" height="12">&nbsp;
           <td><strong>Items</strong></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listgardentoolsproducts">
                   <strong>List Items</strong></a></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newgardentoolsproduct">
                   <strong>Add New Item</strong></a></td>
       </tr>
       <tr>
           <td>
               <hr />
           </td>
       </tr>
       <tr>
       <td><a href="index.php?content=logout">
                   <img src="images/logout.png" alt="Logout Icon" width="12" height="12"></a>&nbsp;
               <a href="index.php?content=logout">
                   <strong>Logout</strong></a>
           </td>
       </tr>
       <tr>
           <td>&nbsp;</td>
       </tr>
       <tr>
           <td>
               <form action="index.php" method="post">
                   <label>Search for Item:</label><br>
                   <input type="text" name="ToolProductID" size="14" />
                   <input type="submit" value="find" />
                   <input type="hidden" name="content" value="updategardentoolsproduct">

                   </form>
           </td>
       </tr>
       <tr>
           <td>
               <form action="index.php" method="post">
                   <label>Search for Category:</label><br>
                   <input type="text" name="ToolCategoryID" size="14" />
                   <input type="submit" value="find" />
                   <input type="hidden" name="content" value="displaygardentoolscategory">
               </form>
           </td>
       </tr>
   <?php
   }
   ?>
</table>
