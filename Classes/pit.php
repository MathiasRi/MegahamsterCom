<?php
    namespace dev\megahamster\com\classes\pit;
    use dev\megahamster\com\classes\product\Product;

    require_once 'product.php';
    class Pit extends Product {
        function __construct($length,$price){
            parent::__construct($price,$length);
            $this->equip=['Hamster training gloves','Hamster punching sack'];
        }

        public function outputProductInfo(){
            echo "Our Domain 'The Pit' is the basic choice of real estate for a hamster owner. It features a side-length of ".$this->length." cm.\nIt is available for the for the low price of EUR ".$this->price.",-\n";
        }

        public function getSpecialEquipment(){
            return $this->equip;
        }

        public function calculateArea(){
            return pow($this->length, 2) * (2 + 2 * sqrt(2));
        }
    }
?>
