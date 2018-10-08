<?php
    namespace dev\megahamster\com\classes\flat;
    use dev\megahamster\com\classes\product\Product;

    require_once 'product.php';
    class Flat extends Product {
        private $width;
        private $height;

        function __construct($length,$width,$height,$price){
            parent::__construct($price,$length);
            $this->width=$width;
            $this->height=$height;
            $this->equip=["Food jars"];
        }

        public function outputProductInfo(){
            echo "Our Domain 'The Flat' is the basic choice of real estate for a hamster owner. It features a length of ".$this->length." cm, a width of ".$this->width." cm and a height of ".$this->height." cm.\nIt is available for the for the low price of EUR ".$this->price.",-\n";
        }

        public function getSpecialEquipment(){
            return $this->equip;
        }

        public function calculateArea(){
            return $this->width * $this->length;
        }
    }
?>
