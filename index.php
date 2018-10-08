<?php
    /**
     * Created by PhpStorm.
     * User: Mathias
     * Date: 17.09.2018
     * Time: 13:19
     */
    //namespace dev\megahamster\com;
    namespace Riedl\Megahamstercom;
    use dev\megahamster\com\classes\flat\Flat;
    use dev\megahamster\com\classes\pit\Pit;
    use dev\megahamster\com\classes\room\Room;

    ini_set('max_execution_time',60);
    //echo "Hello Console Hamster!"
    include 'Classes/room.php';
    include 'Classes/pit.php';
    include 'Classes/flat.php';
    require_once 'Classes/product.php';

    $room1 = new Room(10,12,3,7);
    $flat1 = new Flat(100,25,10,120);
    $pit1 = new Pit(80,200);
?>
<html>
    <body>
    <?php
    echo '<h2>Hallo Web Hamster!</h2>';

    #The Room#
    echo '<hr /><h2>The Room</h2>';
    $room1->outputProductInfo();
    echo '<br>';
    echo 'Special Equipment: ';
    foreach ($room1->getSpecialEquipment() as $a){
        echo $a;
    }
    echo '<br>';
    echo 'Area: '.$room1->calculateArea().' square cm';

    #The Flat#
    echo '<hr /><h2>The Flat</h2>';
    $flat1->outputProductInfo();
    echo '<br>';
    echo 'Special Equipment: ';
    foreach ($flat1->getSpecialEquipment() as $a){
        echo $a;
    }
    echo '<br>';
    echo 'Area: '.$flat1->calculateArea().' square cm';

    #The Pit#
    echo '<hr /><h2>The Pit</h2>';
    $pit1->outputProductInfo();
    echo '<br>';
    echo 'Special Equipment: ';
    foreach ($pit1->getSpecialEquipment() as $a){
        echo $a."; ";
    }
    echo '<br>';
    echo 'Area: '.$pit1->calculateArea().' square cm';
    ?>
    </body>
</html>
