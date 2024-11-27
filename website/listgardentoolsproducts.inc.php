<script language="javascript">
    /*
    Lakshita Madhavan November 26, 2024 lm66@njit.edu
    IT 202 001  || Phase 5 Assignment
    */


   function listbox_dblclick() {
       document.items.updateitem.click()
   }


   function button_click(target) {
       var userConfirmed = true;
       if (target == 1) {
           userConfirmed = confirm("Are you sure you want to remove this item?");
       }
       if (userConfirmed) {
           if (target == 1) items.action = "index.php?content=removegardentoolsproduct";
           if (target == 2) items.action = "index.php?content=updategardentoolsproduct";
       } else {
           alert("Action canceled.");
       }
   }
</script>

<h2>Select Item</h2>

<form name="items" method="post">
   <select ondblclick="listbox_dblclick()" name="ToolProductID" size="20">
       <?php
       //include_once("gardentoolsproduct.php");

       $items = Item::getItems();
       foreach ($items as $item) {
           $itemID = $item->ToolProductID; 
           $itemName = $item->ToolProductName; 
           $option = $itemID . " - " . $itemName;
           echo "<option value=\"$itemID\">$option</option>\n";
       }
       ?>
   </select>
   <br>
   <input type="submit" onClick="button_click(1)" name="deleteitem" value="Delete Item">
   <input type="submit" onClick="button_click(2)" name="updateitem" value="Update Item">
</form>
