<?php
class ItemsModel
{
    private $__conn;
    public function __construct($conn)
    {
        $this->__conn = $conn;
    }
    public function create($table, $cols, $values)
    {

        $values = $values["data"];
        try {
            $sql = "INSERT INTO $table ($cols) values ($values);";
            $stmt = $this->__conn->prepare($sql);
            $stmt->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
            return null;
        }
    }

    public function edit($data)
    {

        $itemCode = $data["ItemCode"];
        $itemName = $data["ItemName"];
        $itemQuantity = $data["ItemQuantity"];
        $itemExpriedDate = $data["ItemExpriedDate"];
        $itemNote = $data["ItemNote"];
        $ID = $data["ID"];
        try {
            $sql = "UPDATE item_sale SET item_code = :itemCode,  item_name = :itemName, quantity = :itemQuantity, expried_date = :itemExpriedDate, note = :itemNote WHERE id = :ID";
            // var_dump($sql);
            // die();
            $stmt = $this->__conn->prepare($sql);
            $stmt->bindParam('itemCode', $itemCode, PDO::PARAM_STR);
            $stmt->bindParam('itemName', $itemName, PDO::PARAM_STR);
            $stmt->bindParam('itemQuantity', $itemQuantity, PDO::PARAM_INT);
            $stmt->bindParam('itemExpriedDate', $itemExpriedDate, PDO::PARAM_STR);
            $stmt->bindParam('itemNote', $itemNote, PDO::PARAM_STR);
            $stmt->bindParam('ID', $ID, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
            return null;
        }
    }

    public function delete($id)
    {
        $sql = "DELETE FROM item_sale WHERE ID = $id";
        $stmt = $this->__conn->prepare($sql);
        $stmt->execute();
    }
}
