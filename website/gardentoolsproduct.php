<?php
/*
Lakshita Madhavan November 1, 2024 lm66@njit.edu
IT 202 001  || Phase 3 Assignment*/
require_once('database.php');

class Item
{
    public $ToolProductID;
    public $ToolProductCode; 
    public $ToolProductName; 
    public $ToolProductColor; 
    public $ToolDescription; 
    public $ToolCategoryID; 
    public $ToolWholesalePrice; 
    public $ToolListPrice; 
    public $DateCreated;

    function __construct(
        $ToolProductID,
        $ToolProductCode,
        $ToolProductName,
        $ToolProductColor,
        $ToolDescription,
        $ToolCategoryID,
        $ToolWholesalePrice,
        $ToolListPrice,
        $DateCreated
    ) {
        $this->ToolProductID = $ToolProductID;
        $this->ToolProductCode = $ToolProductCode;
        $this->ToolProductName = $ToolProductName;
        $this->ToolProductColor = $ToolProductColor;
        $this->ToolDescription = $ToolDescription;
        $this->ToolCategoryID = $ToolCategoryID;
        $this->ToolWholesalePrice = $ToolWholesalePrice;
        $this->ToolListPrice = $ToolListPrice;
        $this->DateCreated = $DateCreated;
    }

    function __toString()
    {
        $output = "<h2>Tool Product: $this->ToolProductID</h2>" .
                  "<h2>Name: $this->ToolProductName</h2>\n" .
                  "<h2>Color: $this->ToolProductColor</h2>\n" .
                  "<h2>Description: $this->ToolDescription</h2>\n" .
                  "<h2>Category ID: $this->ToolCategoryID</h2>\n" .
                  "<h2>Wholesale Price: $this->ToolWholesalePrice</h2>\n" .
                  "<h2>List Price: $this->ToolListPrice</h2>\n" .
                  "<h2>Date Created: $this->DateCreated</h2>\n";
        return $output;
    }

    function saveItem()
    {
        $db = getDB();
        $query = "INSERT INTO SmartGardeningToolsProducts (ToolProductID, ToolProductCode, ToolProductName, ToolProductColor, ToolDescription, ToolCategoryID, ToolWholesalePrice, ToolListPrice, DateCreated) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "isssisdds",
            $this->ToolProductID,     
            $this->ToolProductCode,  
            $this->ToolProductName,  
            $this->ToolProductColor,  
            $this->ToolDescription,   
            $this->ToolCategoryID,   
            $this->ToolWholesalePrice, 
            $this->ToolListPrice,    
            $this->DateCreated      
        );
        $result = $stmt->execute();
        $db->close();
        return $result;
    }

    static function getItems()
    {
        $db = getDB();
        $query = "SELECT * FROM SmartGardeningToolsProducts";
        $result = $db->query($query);
        if (mysqli_num_rows($result) > 0) {
            $items = array();
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $item = new Item(
                    $row['ToolProductID'],
                    $row['ToolProductCode'],
                    $row['ToolProductName'],
                    $row['ToolProductColor'],
                    $row['ToolDescription'],
                    $row['ToolCategoryID'],
                    $row['ToolWholesalePrice'],
                    $row['ToolListPrice'],
                    $row['DateCreated']
                );
                array_push($items, $item);
            }
            $db->close();
            return $items;
        } else {
            $db->close();
            return NULL;
        }
    }

    static function findItem($ToolProductID)
    {
        $db = getDB();
        $query = "SELECT * FROM SmartGardeningToolsProducts WHERE ToolProductID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $ToolProductID); 
        $stmt->execute();
        $result = $stmt->get_result(); 
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if ($row) {
            $item = new Item(
                $row['ToolProductID'],
                $row['ToolProductCode'],
                $row['ToolProductName'],
                $row['ToolProductColor'],
                $row['ToolDescription'],
                $row['ToolCategoryID'],
                $row['ToolWholesalePrice'],
                $row['ToolListPrice'],
                $row['DateCreated']
            );
            $db->close();
            return $item;
        } else {
            $db->close();
            return NULL;
        }
    }

    function updateItem()
    {
        $db = getDB();
        $query = "UPDATE SmartGardeningToolsProducts SET ToolProductCode = ?, ToolProductName = ?, ToolProductColor = ?, ToolDescription = ?, ToolCategoryID = ?, ToolWholesalePrice = ?, ToolListPrice = ?, DateCreated = ? WHERE ToolProductID = ?";
        $stmt = $db->prepare($query);
        $formattedDate = date('Y-m-d H:i:s', strtotime($this->DateCreated));        
        $stmt->bind_param(
            "ssssiddsi",  
            $this->ToolProductCode,  
            $this->ToolProductName,  
            $this->ToolProductColor,  
            $this->ToolDescription,   
            $this->ToolCategoryID,   
            $this->ToolWholesalePrice, 
            $this->ToolListPrice,    
            $formattedDate,
            $this->ToolProductID

        );
        $result = $stmt->execute();
        $db->close();
        return $result;
    }

    function removeItem()
    {
        $db = getDB();
        $query = "DELETE FROM SmartGardeningToolsProducts WHERE ToolProductID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $this->ToolProductID); 
        $result = $stmt->execute();
        $db->close();
        return $result;
    }
}
?>
