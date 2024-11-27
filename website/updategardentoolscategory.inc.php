<style>

        /*
    Lakshita Madhavan November 26, 2024 lm66@njit.edu
    IT 202 001  || Phase 5 Assignment
    */


   form[name="category"] {
       display: grid;
       grid-template-columns: 125px 1fr;
       gap: 10px 5px;
       align-items: left;
       max-width: 300px;
       margin: 0px;
   }
   form[name="category"] label {
       text-align: left;
       padding-right: 5px;
   }
   form[name="category"] input[type="text"] {
       width: 100%;
   }
   form[name="category"] input[type="submit"] {
       grid-column: 2;
       justify-self: start;
   }
</style>
<?php
$ToolCategoryID = $_POST['ToolCategoryID'];
$category = Category::findCategory($ToolCategoryID);
if ($category) {
?>
   <h2>Update Category <?php echo $ToolCategoryID; ?></h2><br>
   <form name="category" action="index.php" method="post">
       <label for="ToolCategoryCode">Category Code:</label>
       <input type="text" name="ToolCategoryCode" id="ToolCategoryCode" value="<?php echo $category->ToolCategoryCode; ?>">
       <label for="ToolCategoryName">Category Name:</label>
       <input type="text" name="ToolCategoryName" id="ToolCategoryName" value="<?php echo $category->ToolCategoryName; ?>">
       <label for="ToolShelfNumber">Tool Shelf Number:</label>
       <input type="text" name="ToolShelfNumber" id="ToolShelfNumber" value="<?php echo $category->ToolShelfNumber; ?>">
       <label for="DateCreated">Date Created:</label>
       <input type="text" name="DateCreated" id="DateCreated" value="<?php echo $category->DateCreated; ?>">




       <input type="submit" name="answer" value="Update Category">
       <input type="submit" name="answer" value="Cancel">
       <input type="hidden" name="ToolCategoryID" value="<?php echo $ToolCategoryID; ?>">
       <input type="hidden" name="content" value="changegardentoolscategory">
   </form>
<?php
} else {
?>
   <h2>Sorry, category <?php echo $ToolCategoryID; ?> not found</h2>
<?php
}
?>
<script language="javascript">
   document.category.ToolCategoryCode.focus();
   document.category.ToolCategoryCode.select();
</script>
