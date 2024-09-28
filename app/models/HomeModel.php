<?php
class HomeModel
{
    private $__conn;
    public function __construct($conn)
    {
        $this->__conn = $conn;
    }

    public function getAllItems($limit = 10, $offset = 0, $order = "DESC")
    {
        try {
            if (isset($this->__conn)) {
                $sql = "SELECT * FROM item_sale  LIMIT :limit  OFFSET :offset";
                $stmt = $this->__conn->prepare($sql);
                $stmt->bindParam("limit", $limit, PDO::PARAM_INT);
                $stmt->bindParam("offset", $offset, PDO::PARAM_INT);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            echo "No connection ";
            return null;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
