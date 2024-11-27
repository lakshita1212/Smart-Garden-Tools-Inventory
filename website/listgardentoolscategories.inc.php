
<script language="javascript">
     /*
    Lakshita Madhavan November 26, 2024 lm66@njit.edu
    IT 202 001  || Phase 5 Assignment
    */


   function listbox_dblclick() {
       document.categories.displaycategory.click()
   }
   function button_click(target) {
       var userConfirmed = true;
       if (target == 1) {
           userConfirmed = confirm("Are you sure you want to remove this category?");
       }
       if (userConfirmed) {
           if (target == 0) categories.action = "index.php?content=displaygardentoolscategory";
           if (target == 1) categories.action = "index.php?content=removegardentoolscategory";
           if (target == 2) categories.action = "index.php?content=updategardentoolscategory";
       } else {
           alert("Action canceled.");
       }
   }
</script>
h2>Select Category</h2>
<form name="categories" method="post">
   <select ondblclick="listbox_dblclick()" name="ToolCategoryID" size="20">
       <?php
   //    include("category.php");
       $categories = Category::getCategories();
       foreach ($categories as $category) {
           $ToolCategoryID = $category->ToolCategoryID;
           $name = $ToolCategoryID . " - " . $category->ToolCategoryCode . ", " . $category->ToolCategoryName;
           echo "<option value=\"$ToolCategoryID\">$name</option>\n";
       }
       ?>
   </select>
   <br>
   <input type="submit" onClick="button_click(0)" name="displaygardentoolscategory" value="View Category">
   <input type="submit" onClick="button_click(1)" name="removegardentoolscategory" value="Delete Category">
   <input type="submit" onClick="button_click(2)" name="changegardentoolscategory" value="Update Category">
</form>
