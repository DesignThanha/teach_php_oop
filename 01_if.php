<?php 



$grade = '';
$score = 76;

if ($score >= 80) {
    $grade = 'A';
}else if($score >= 70){
    $grade = 'B';
}else if($score >= 60){
    $grade = 'C';
}else if($score >= 50){
    $grade = 'D';
}else{
    $grade = 'F';
}

$total = ($score>=50) 
                ?"ผ่าน"
                :"ไม่ผ่าน";



echo "<h1>คะแนน : {$score} เกรดที่ได้ :{$grade}  {$total}</h1>";
















?>