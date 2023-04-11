<?php 

//while loop

$start=1;
while($start<=10){
    echo '2*'.$start. '='. 2*$start.'</br>';
    $start++;

}

// for loop;


for($start=1; $start<=10; $start++){

    echo '8*'.$start.'='. 8*$start. '</br>';
}


//array element while;

$arry=[1,3,2,5,6,87,53,54];

$arry_start=0;

while($arry_start<=5){

    echo $arry[$arry_start].'</br>';
    $arry_start++;

}

echo '</br>';

//for

for($array_ele=0; $array_ele<=7; $array_ele++){
    echo $arry[$array_ele].'</br>';
}



echo '</br>';
// array_foreach:


$array_foreach =['sumon', 33, 'akbor', 66, 'akramuk', 99, 'locacation'];



foreach($array_foreach as $value){

    echo $value. '</br>';
}


echo '</br>';
// array_foreach multidimention;

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




?>