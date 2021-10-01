<?php
$laptop = (object) [
        'name'=>'XPS',
        'width'=>'15inch',
        'price'=>50000000,
        'color'=>[
            'available'=>'hitam',
            'available'=>'grey',   
            'available'=>'silver',  
        ],
        'specs'=>[
            'processors'=>'i711800h',
            'gpu'=>'3060ti',
            'ram'=>'32gb',
        ],
        'included'=>[
            'charger'=>'yes',
            'bag'=>'yes',
            'warranty'=>'yes',
        ]


            
];
$laptop->color= (object)$laptop->color;

$laptop->specs= (object)$laptop->specs;

$laptop->included= (object)$laptop->included;

echo "<pre>";
print_r($laptop);
echo "</pre>";
?>