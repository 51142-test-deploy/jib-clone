<?php 
require_once __DIR__ . '/../core/Database.php';

class Items {
    private $conn;
    private $readQueryOrderByPrice = 'SELECT * FROM items ORDER BY price ASC LIMIT 6';
    private $readQueryOrderBySales = 'SELECT * FROM items ORDER BY sales DESC LIMIT 5';
    private $readQueryOrderById = 'SELECT * FROM items ORDER BY id DESC LIMIT 5';

    public function __construct() {
        $db = new Database();
        $this->conn = $db->Connect();
    }

    public function ReadRecommendedItem() {
        $stmt = $this->conn->prepare($this->readQueryOrderByPrice);
        $stmt->execute();

        $res = $stmt->get_result();
        $datas = $res->fetch_all(MYSQLI_ASSOC);
        $stmt->close();

        return $datas;
    }

    public function ReadHotItem() {
        $stmt = $this->conn->prepare($this->readQueryOrderBySales);
        $stmt->execute();

        $res = $stmt->get_result();
        $datas = $res->fetch_all(MYSQLI_ASSOC);
        $stmt->close();

        return $datas;
    }

    public function ReadNewItem() {
        $stmt = $this->conn->prepare($this->readQueryOrderById);
        $stmt->execute();

        $res = $stmt->get_result();
        $datas = $res->fetch_all(MYSQLI_ASSOC);
        $stmt->close();

        return $datas;
    }
}
?>