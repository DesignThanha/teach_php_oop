<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP in PHP</title>

    <link rel="stylesheet" href="./theme/css/bootstrap-theme.css">
</head>
<body>
    <div class="container mt-5 font-mali">
        <div class="card">
            <div class="card-header bg-success widht-100-vh  text-center">
                <h2>PHP - OOP </h2>
            </div>
            <div class="card-body">
                <?php
                
                   require ('functions/bmi_calculate.php');

                    $peak = new Dietary(171, 79);

                    $champ = new Dietary(180, 70);

                    $jane = new Dietary(165, 58, "เจน", 22, "f");
                    // $jane->nickname = "เจน";
                    // $jane->setAge(22);
                    // $jane->gender = "f";

                    
                    echo "Peak มีความสูง {$peak->height} Cm. และมีน้ำหนัก {$peak->getWeight()} กก. BMI: {$peak->cal_BMI()} อยู่ในเกณฑ์: {$peak->fat()} <hr>";

                    echo "Champ มีความสูง {$champ->height} Cm. และมีน้ำหนัก {$champ->getWeight()} กก. BMI: {$champ->cal_BMI()} อยู่ในเกณฑ์: {$champ->fat()} <hr >";

                    echo "{$jane->nickname} อายุ: {$jane->getAge()}ปี เพศ: {$jane->gender} มีความสูง: {$jane->height} Cm. และมีน้ำหนัก: {$jane->getWeight()} กก. BMI: {$jane->cal_BMI()}  BMR: {$jane->bmr()} อยู่ในเกณฑ์: {$jane->fat()} TDEE: {$jane->tdee(1)} <hr >";
                    
                ?>
            </div>
        </div>
    </div>
</body>
</html>