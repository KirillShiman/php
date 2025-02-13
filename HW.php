<?php
$array1 = [1, 2, 3];
function Math_pow($k)
{
return $k*$k;
}
$res1=array_map('Math_pow',$array1);
print_r($res1);
echo "<br>";

$array2 = [1, 2, 3, 4, 5,-12,-3,-1,-5];
function sortArray($k){
    return ($k>-5&&$k<5);
}
$res2=array_filter($array2,'sortArray');
print_r($res2);
echo "<br>";

$array3 = ['s','a','s','q','w','q'];
$arrayChunk=array_chunk($array3,3);
print_r($arrayChunk);
echo "<br>";

$array4=["iphone","xiaomi","honor","motorola"];
if(in_array("iphone",$array4)){
    echo "iphone";
}
else
    echo "no matches";
echo "<br>";

$student = [
    [
        'name' => 'Yasha 1',
        'email' => 'yasha@yasha.ru',
        'age' => 23,
    ],
    [
        'name' => 'Yasha 2',
        'email' => 'yasha@yasha.ru',
        'age' => 21,
    ],
    [
        'name' => 'Yasha 3',
        'email' => 'yasha@yasha.ru',
        'age' => 26,
    ],
];
foreach($student as $k){
    echo $k['name']."<br>";
}
echo "<br>";
usort($student, function($a, $b) {
    return $a['age'] <=> $b['age'];
});
foreach ($student as $stud) {
    echo "Имя: " . $stud['name'] . "<br>";
    echo "Email: " . $stud['email'] . "<br>";
    echo "Возраст: " . $stud['age'] . "<br>";
}
echo "<br>";
$array5 = ['телефон', 'ноутбук', 'стол'];
$string = implode(', ', $array5);
echo $string;
echo "<br>";

$line='телефон, ноутбук, стол';
$array6 = explode(', ', $line);
print_r($array6);
echo "<br>";
$array6 = [
    'name' => 'Kirill',
    'age' => 20,

];

$jsonString = json_encode($array6);
echo $jsonString;
echo "<br>";
$array7 = json_decode($jsonString, true);

print_r($array7);
echo "<br>";
$array8 = [1, 2, 3, 4, 5,-12,-3,-1,-5];
for($i = 0; $i < count($array8); $i++){
    for($j = 0; $j < count($array8); $j++){
        if($array8[$j]>$array8[$j+1]){
            $temp = $array8[$j];
            $array8[$j] = $array8[$j + 1];
            $array8[$j + 1] = $temp;

        }
    }
}
print_r($array8);