<?php

    class Healthy{
        public $height;    //กำหนด ตัวแปรไว้สำหรับเก็บค่า ความสูง
        protected $weight;   //กำหนด ตัวแปรไว้สำหรับเก็บค่า น้ำหนัก
        
        function __construct($h, $w){  //กำหนดให้มีการป้อนค่าเข้าไปทำงานได้เลย
            $this->height = $h;
            $this->weight = $w;

        }

        public function cal_BMI(){
            $h = $this->height / 100;
            $bmi = $this->weight/($h*$h);

            return number_format($bmi,2);  //ส่งค่า ที่เก็บในตัวแปร $bmi ออกไปใช้งาน
        }

        public function fat(){

            $bmi = $this->cal_BMI();  //เรียกใช้งาน ข้อมูลที่ถูกส่งมากจาก function cal_BMI
            if ($bmi >= 30) {
                $result = "อ้วนมาก";
            }else if($bmi >= 25){
                $result = "อ้วน";
            }else if($bmi >= 23){
                $result = "ค่อนข้างอ้วน";
            }else if($bmi >= 18.5){
                $result = "สมส่วน";
            }else{
                $result = "ผอมเกินไป";
            }

            return $result;  //ส่งค่า ที่เก็บในตัวแปร $result ออกไปใช้งาน

        }
    }

    class Dietary extends Healthy{   // เป็นการสืบทอด class มาจาก class Healthy 

        public $nickname;
        private $age;
        public $gender;


        public function setAge($age)  //seter ทำหน้าที่ในการ เซทค่าข้อมูล
        {
            if ($age <= 0) {
                throw new Exception("อายุมึงเท่าไหร่ไอ้เวรเอ้ยย"); //trow คือการแจ้งเตือน 
                
            }
            $this->age = $age;
            // return $age;
        }
        public function getAge()  //geter ทำหน้าที่เอาข้อมูลออกมาใช้งาน
        {
            return $this->age;
        }

        public function getWeight()  //geter ทำหน้าที่เอาข้อมูลออกมาใช้งาน
        {
            return $this->weight;
        }
        

        public function bmr()
        {
            # code...
            if ($this->gender == 'm') {
                $bmr = 66 + (13.7 * $this->weight) + (5 * $this->height) - (6.8 * $this->age) ;
            }else{
                $bmr = 655 + (9.6 * $this->weight) + (1.8 * $this->height) - (4.7 * $this->age) ;
            }

            return $bmr; //ส่งข้อมูลที่อยู่ในตัวแปร bmr ออกไปใช้งาน
        }

        public function tdee($exerise)
        {
            # code...
            /*
                Case 
                1. นั่งทำงารอยู่กับที่และไม่ได้ออกกำลังกายเลย = BMR * 1.2
                2. ออกกำลังกายหรือเล่นกีฬาเล็กน้อย ประมาณอาทิตย์ละ 1-3 วัน = BMR * 1.375
                3. ออกกำลังกายหรือเล่นกีฬาปานกลาง ประมาณอาทิตย์ละ 3-5 วัน = BMR * 1.55
                4. ออกกำลังกายหรือเล่นกีฬาอย่างหนัก ประมาณอาทิตย์ละ 6-7 วัน = BMR *1.725
                5. ออกกำลังกายหรือเล่นกีฬาอย่างหนักทุกวันเช้าเย็น = BMR * 1.9
            
            */

            switch ($exerise) {
                case '1':
                    # code...
                    $tdee = $this->bmr() * 1.2;
                    break;
                case '2':
                    # code...
                    $tdee = $this->bmr() * 1.375;
                    break;
                case '3':
                    # code...
                    $tdee = $this->bmr() * 1.55;
                    break;
                case '4':
                    # code...
                    $tdee = $this->bmr() * 1.725;
                    break;
                case '5':
                    # code...
                    $tdee = $this->bmr() * 1.9;
                    break;

                default:
                    # code...
                    $tdee = $this->bmr() * 1.2;

                    break;
                
                    
                }
                return number_format($tdee,2);
            
        }

    }






?>