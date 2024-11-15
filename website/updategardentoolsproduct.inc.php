<?php
/*
Lakshita Madhavan November 15, 2024 lm66@njit.edu
IT 202 001  || Phase 4 Assignment
*/

if (!isset($_POST['ToolProductID']) || !is_numeric($_POST['ToolProductID'])) {
    echo '<h2>You did not select a valid ToolProductID value</h2>';
    echo '<a href="index.php?content=listgardentoolsproducts">List items</a>';
} else {
    $ToolProductID = $_POST['ToolProductID'];
    $item = Item::findItem($ToolProductID);
    if ($item) {
        ?>
        <h2>Update Item <?php echo htmlspecialchars($item->ToolProductID); ?></h2>
        <form name="items" action="index.php" method="post">
            <table>
                <tr>
                    <td>ToolProductID</td>
                    <td><?php echo htmlspecialchars($item->ToolProductID); ?></td>
                </tr>
                <tr>
                    <td>Product Code</td>
                    <td><input type="text" name="ToolProductCode" value="<?php echo htmlspecialchars($item->ToolProductCode); ?>" required></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="ToolProductName" value="<?php echo htmlspecialchars($item->ToolProductName); ?>" required></td>
                </tr>
                <tr>
                    <td>Product Color</td>
                    <td><input type="text" name="ToolProductColor" value="<?php echo htmlspecialchars($item->ToolProductColor); ?>" required></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><input type="text" name="ToolDescription" value="<?php echo htmlspecialchars($item->ToolDescription); ?>" required></td>
                </tr>
                <tr>
                    <td>Category ID</td>
                    <td><input type="text" name="ToolCategoryID" value="<?php echo htmlspecialchars($item->ToolCategoryID); ?>" required></td>
                </tr>
                <tr>
                    <td>Wholesale Price</td>
                    <td><input type="text" name="ToolWholesalePrice" value="<?php echo htmlspecialchars($item->ToolWholesalePrice); ?>" required></td>
                </tr>
                <tr>
                    <td>List Price</td>
                    <td><input type="text" name="ToolListPrice" value="<?php echo htmlspecialchars($item->ToolListPrice); ?>" required></td>
                </tr>
                <tr>
                    <td>Date Created</td>
                    <td><input type="text" name="DateCreated" value="<?php echo htmlspecialchars($item->DateCreated); ?>" readonly></td>
                </tr>
            </table>
            <br><br>
            <input type="submit" name="answer" value="Update Item">
            <input type="submit" name="answer" value="Cancel">
            <input type="hidden" name="ToolProductID" value="<?php echo htmlspecialchars($ToolProductID); ?>">
            <input type="hidden" name="content" value="changegardentoolsproduct">
        </form>
        <?php
    } else {
        echo '<h2>Sorry, item ' . htmlspecialchars($ToolProductID) . ' not found</h2>';
        echo '<a href="index.php?content=listgardentoolsproducts">List items</a>';
    }
}
?>
