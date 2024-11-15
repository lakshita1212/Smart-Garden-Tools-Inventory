<!-- 
Lakshita Madhavan November 15, 2024 lm66@njit.edu
IT 202 001  || Phase 4 Assignment
-->
<h2>Enter New Item Information</h2>

<form name="newgardentoolsproduct" action="index.php" method="post">
   <table >
       <tr>
           <td>Item ID:</td>
           <td>
               <input type="text" name="ToolProductID" minlength="3" maxlength="10" 
                      placeholder="Enter Item ID" required>
           </td>
       </tr>
       <tr>
           <td>Product Code:</td>
           <td>
               <input type="text" name="ToolProductCode" minlength="3" maxlength="10" 
                      placeholder="Enter Code" required>
           </td>
       </tr>
       <tr>
           <td>Name:</td>
           <td>
               <input type="text" name="ToolProductName" minlength="10" maxlength="100" 
                      placeholder="Enter Product Name" required>
           </td>
       </tr>
       <tr>
           <td>Color:</td>
           <td>
               <input type="text" name="ToolProductColor" minlength="3" maxlength="20" 
                      placeholder="Enter Color" required>
           </td>
       </tr>
       <tr>
           <td>Description:</td>
           <td>
               <input type="text" name="ToolDescription" minlength="100" maxlength="255" 
                      placeholder="Enter Description" required>
           </td>
       </tr>
       <tr>
           <td>Category ID:</td>
           <td>
               <input type="text" name="ToolCategoryID" minlength="3" maxlength="10" 
                      placeholder="Enter Category ID" required>
           </td>
       </tr>
       <tr>
           <td>Wholesale Price:</td>
           <td>
               <input type="number" name="ToolWholesalePrice" step="0.01" min="0" max="10000" 
                      placeholder="Enter Wholesale Price" required>
           </td>
       </tr>
       <tr>
           <td>List Price:</td>
           <td>
               <input type="number" name="ToolListPrice" step="0.01" min="0" max="20000" 
                      placeholder="Enter List Price" required>
           </td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Item">
   <input type="hidden" name="content" value="addgardentoolsproduct">
</form>
