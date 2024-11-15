<!--
Lakshita Madhavan November 15, 2024 lm66@njit.edu
IT 202 001  || Phase 4 Assignment
-->
<h2>Enter New Category Information</h2>

<form name="newcategory" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Category ID:</td>
           <td>
               <input type="number" name="ToolCategoryID" size="4" min="100" max="999" 
                      placeholder="100-999" required>
           </td>
       </tr>
       <tr>
           <td>Category Code:</td>
           <td>
               <input type="text" name="ToolCategoryCode" size="20" 
                      placeholder="Enter Code" minlength="3" maxlength="10" required>
           </td>
       </tr>
       <tr>
           <td>Category Name:</td>
           <td>
               <input type="text" name="ToolCategoryName" size="50" minlength="10" 
                      maxlength="100" placeholder="Enter Name" required>
           </td>
       </tr>
       <tr>
           <td>Shelf Number:</td>
           <td>
               <input type="text" name="ToolShelfNumber" size="20" minlength="1" 
                      maxlength="20" placeholder="Enter Shelf Number" required>
           </td>
       </tr>
       <tr>
           <td>Date Created:</td>
           <td>
               <input type="date" name="DateCreated" required>
           </td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Category">
   <input type="hidden" name="content" value="addgardentoolscategory">
</form>
