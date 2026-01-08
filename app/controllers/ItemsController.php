<?php 
require_once __DIR__ . '/../models/Items.php';

class ItemsController {
    private $items;

    public function __construct() {
        $itm = new Items();
        $this->items = $itm;
    }

    public function ShowRecommendedItems() {
        $datas = $this->items->ReadRecommendedItem();

        require __DIR__ . '/../views/items/RecCard.php';
    }

    public function ShowNewItems() {
        $datas = $this->items->ReadNewItem();

        require __DIR__ . '/../views/items/NewCard.php';
    }
    
    public function ShowHotItems() {
        $datas = $this->items->ReadHotItem();

        require __DIR__ . '/../views/items/HotCard.php';
    }
}
?>