<?php
    namespace dev\megahamster\com\classes\product;

    abstract class Product implements productMethods {
        protected $price;
        protected $length;
        protected $equip;

        function __construct($price,$length){
            $this->price = $price;
            $this->length = $length;
        }
    }

    interface productMethods{
        function outputProductInfo();
        function getSpecialEquipment();
        function calculateArea();
    }
?>


