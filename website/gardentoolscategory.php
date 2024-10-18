<?php
/*
Lakshita Madhavan October 17, 2024 lm66@njit.edu
IT 202 001  || Phase 2 Assignment*/
require_once('database.php');
class Category
{

   public $ToolCategoryID;
   public $ToolCategoryCode;
   public $ToolCategoryName;
   public $ToolShelfNumber;
   public $DateCreated;

   function __construct($ToolCategoryID, $ToolCategoryCode, $ToolCategoryName, $ToolShelfNumber, $DateCreated)
   {
       $this->ToolCategoryID = $ToolCategoryID;
       $this->ToolCategoryCode = $ToolCategoryCode;
       $this->ToolCategoryName = $ToolCategoryName;
       $this->ToolShelfNumber = $ToolShelfNumber;
       $this->DateCreated = $DateCreated;
   }
   function __toString()
   {
       $output = "<h2>Category Number: $this->ToolCategoryID</h2>\n" .
           "<h2>$this->ToolCategoryCode, $this->ToolCategoryName</h2>\n".
           "<h2>$this->ToolShelfNumber, $this->DateCreated</h2>\n";
       return $output;
   }
   function saveCategory()
   {
       $db = getDB();
       $query = "INSERT INTO SmartGardeningToolsCategories VALUES (?, ?, ?,?,?)";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "issis",
           $this->ToolCategoryID,
           $this->ToolCategoryCode,
           $this->ToolCategoryName,
           $this->ToolShelfNumber,
           $this->DateCreated
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
   static function getCategories()
   {
       $db = getDB();
       $query = "SELECT * FROM SmartGardeningToolsCategories";
       $result = $db->query($query);
       if (mysqli_num_rows($result) > 0) {
           $categories = array();
           while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
               $category = new Category(
                   $row['ToolCategoryID'],
                   $row['ToolCategoryCode'],
                   $row['ToolCategoryName'],
                   $row['ToolShelfNumber'],
                   $row['DateCreated']
               );
               array_push($categories, $category);
               unset($category);
           }
           $db->close();
           return $categories;
       } else {
           $db->close();
           return NULL;
       }
   }

   static function findCategory($ToolCategoryID)
   {
       $db = getDB();
       $query = "SELECT * FROM SmartGardeningToolsCategories WHERE ToolCategoryID = $ToolCategoryID";
       $result = $db->query($query);
       $row = $result->fetch_array(MYSQLI_ASSOC);
       if ($row) {
           $category = new Category(
            $row['ToolCategoryID'],
            $row['ToolCategoryCode'],
            $row['ToolCategoryName'],
            $row['ToolShelfNumber'],
            $row['DateCreated']
           );
           $db->close();
           return $category;
       } else {
           $db->close();
           return NULL;
       }
   }
   function updateCategory()
   {
       $db = getDB();
       $query = "UPDATE SmartGardeningToolsCategories SET ToolCategoryCode = ?, " .
       "ToolCategoryName = ?, ToolShelfNumber = ?, DateCreated = ? " .
       "WHERE ToolCategoryID = ?";
       $stmt = $db->prepare($query);
       $formattedDate = date('Y-m-d H:i:s', strtotime($this->DateCreated));
       $stmt->bind_param(
           "ssisi",

           $this->ToolCategoryCode,
           $this->ToolCategoryName,
           $this->ToolShelfNumber,
           $formattedDate,
           $this->ToolCategoryID
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
   function removeCategory()
   {
       $db = getDB();
       $query = "DELETE FROM SmartGardeningToolsCategories WHERE ToolCategoryID = $this->ToolCategoryID";
       $result = $db->query($query);
       $db->close();
       return $result;
   }
}


