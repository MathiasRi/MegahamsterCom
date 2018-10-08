<?php
    namespace dev\megahamster\com\classes\room;
    use dev\megahamster\com\classes\product\Product;

    require_once 'product.php';
    class Room extends Product {
        private $width;
        private $height;

        function __construct($length,$width,$height,$price){
            parent::__construct($price,$length);
            $this->width=$width;
            $this->height=$height;
            $this->equip=['none'];
        }

        public function outputProductInfo(){
            echo "Our Domain 'The Room' is the basic choice of real estate for a hamster owner. It features a length of ".$this->length." cm, a width of ".$this->width." cm and a height of ".$this->height." cm.\nIt is available for the for the low price of EUR ".$this->price.",-\n";
        }

        public function getSpecialEquipment(){
            return $this->equip;
        }

        public function calculateArea(){
            return $this->width * $this->length;
        }
    }
?>
