<!-- Lakshita Madhavan November 1, 2024 lm66@njit.edu
IT 202 001  || Phase 3 Assignment-->
<h2>Enter New Item Information</h2>
<form name="newgardentoolsproduct" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Item ID:</td>
           <td><input type="number" name="ToolProductID" size="4" min="100" max="99999" required></td>
       </tr>
       <tr>
           <td>Product Code:</td>
           <td><input type="text" name="ToolProductCode" size="20" placeholder="Enter code" required></td>
       </tr>
       <tr>
           <td>Name:</td>
           <td><input type="text" name="ToolProductName" size="50" required></td>
       </tr>
       <tr>
           <td>Color:</td>
           <td><input type="text" name="ToolProductColor" size="20" required></td>
       </tr>
       <tr>
           <td>Description:</td>
           <td><input type="text" name="ToolDescription" size="100" required></td>
       </tr>
       <tr>
           <td>Category ID:</td>
           <td><input type="number" name="ToolCategoryID" size="4" required></td>
       </tr>
       <tr>
           <td>Wholesale Price:</td>
           <td><input type="text" name="ToolWholesalePrice" size="10" required></td>
       </tr>
       <tr>
           <td>List Price:</td>
           <td><input type="text" name="ToolListPrice" size="10" required></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Item">
   <input type="hidden" name="content" value="addgardentoolsproduct">
</form>
