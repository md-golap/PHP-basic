
<?php
    $str =1;

    while($str<=10){
        echo '2*'.$str.'='. 2*$str.'</br>';

        $str++;
    }

echo '</br>';
//for loop;

for($str=1; $str<=10; $str++)
{

    echo '2*'.$str.'='. 2*$str. '</br>';
}


// array element;

$arr=[11,34,46,57,344,96];

$str=0;

while($str<=5){
    echo $arr[$str].'</br>';
    $str++;
}
 


//for loop;

for($sta=0; $sta<=5; $sta++){
    echo $arr[$sta].'</br>';

}


//foreach;

$arry=[66,78,87,98,749,793];

foreach($arry as $key => $value){
    echo $key.' ' .$value.'</br>';
}



//foreach;

foreach($arry as $key => $value){
    echo $key . ' ' . $value . '</br>';
}


// asoceative array;

$array=[
    'fast_name' => 'golap',
    'last_name' => 'mondol',
    'age' => 22,
];

foreach($array as $key => $value){
    echo $key . ' ' . $value . '</br>';
};




$array =[
    'fast_name' => 'golap',
    'last_name' => 'mondol',
    'rol' => 703904,
    'location' => [
        'city' => 'rangpur',
        'country' => 'Bangladesh',
    ]

    ];

foreach($array as $key => $value){
    if(is_array($value)){
        foreach($value as $key => $value){
            echo $key .' '. $value .'</br>';
        }
    }else
    
    echo $key .' '.  $value .'</br>';
}

$array_multidimention = [

    'fast_name'=> 'jaed',
    'last_name' => 'Mossharop',
    'roll' => 3485,
    'location' => [
        'village'=> 'shoshalpur',
        'zip_code'=> 5460,
    ]

];





foreach($array_multidimention as $key=> $multidimention){

    if(is_array($multidimention)){

        foreach($multidimention as $key=> $value){
            echo $key . ' '. $value.'</br>';
        }
    }else{
        echo $key. ' '. $multidimention.'</br>';

    }

   
}


for($str=1; $str<=10; $str++){
    echo '2x'. $str . "=". 2*$str .'</br>';
};




for($strr=1; $strr<=50; $strr++){
    if($strr%2 == 0){
        echo 'this number is even:' . $strr. '</br>';
    }
        
    
};


//not check data type;
$x = "";  
$y = 100;

var_dump($x == $y); 








?>