<?php
/*
Lakshita Madhavan November 1, 2024 lm66@njit.edu
IT 202 001  || Phase 3 Assignment*/


if (!isset($_POST['ToolProductID']) or (!is_numeric($_POST['ToolProductID']))) {
?>
   <h2>You did not select a valid ToolProductID value</h2>
   <a href="index.php?content=listgardentoolsproducts">List items</a>
   <?php
} else {
   $ToolProductID = $_POST['ToolProductID'];
   $item = Item::findItem($ToolProductID);
   if ($item) {
   ?>
       <h2>Update Item <?php echo $item->ToolProductID; ?></h2><br>
       <form name="items" action="index.php" method="post">
           <table>
               <tr>
                   <td>ToolProductID</td>
                   <td><?php echo $item->ToolProductID; ?></td>
               </tr>
               <tr>
                   <td>Product Code</td>
                   <td><input type="text" name="ToolProductCode" value="<?php echo $item->ToolProductCode; ?>"></td>
               </tr>
               <tr>
                   <td>Name</td>
                   <td><input type="text" name="ToolProductName" value="<?php echo $item->ToolProductName; ?>"></td>
               </tr>
               <tr>
                   <td>Product Color</td>
                   <td><input type="text" name="ToolProductColor" value="<?php echo $item->ToolProductColor; ?>"></td>
               </tr>
               <tr>
                   <td>Description</td>
                   <td><input type="text" name="ToolDescription" value="<?php echo $item->ToolDescription; ?>"></td>
               </tr>
               <tr>
                   <td>Category ID</td>
                   <td><input type="text" name="ToolCategoryID" value="<?php echo $item->ToolCategoryID; ?>"></td>
               </tr>
               <tr>
                   <td>Wholesale Price</td>
                   <td><input type="text" name="ToolWholesalePrice" value="<?php echo $item->ToolWholesalePrice; ?>"></td>
               </tr>
               <tr>
                   <td>List Price</td>
                   <td><input type="text" name="ToolListPrice" value="<?php echo $item->ToolListPrice; ?>"></td>
               </tr>
               <tr>
                   <td>Date Created</td>
                   <td><input type="text" name="DateCreated" value="<?php echo $item->DateCreated; ?>" readonly></td>
               </tr>
           </table><br><br>
           <input type="submit" name="answer" value="Update Item">
           <input type="submit" name="answer" value="Cancel">
           <input type="hidden" name="ToolProductID" value="<?php echo $ToolProductID; ?>">
           <input type="hidden" name="content" value="changegardentoolsproduct">
       </form>
   <?php
    } else {
        ?>
            <h2>Sorry, item <?php echo $ToolProductID; ?> not found</h2>
            <a href="index.php?content=listgardentoolsproducts">List items</a>
     <?php
        }
     }
?>
