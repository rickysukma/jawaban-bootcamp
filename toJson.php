<?php
$produk = array('itemId' => 12341822, 
                'itemName'=> 'desk',
                'price' => 70000,
                'ratings' => array(
                    array('rater' => 'akmal', 'score' => 4),
                    array('rater' => 'andi', 'score' => 5)),
                'freeShipping' => TRUE,
                'color' => array('brown','black'));

function toJson($parameter){
    echo json_encode($parameter);
}

toJson($produk);
?>