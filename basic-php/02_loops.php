<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lops</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../theme/css/bootstrap-theme.css">
</head>
<body class="font-mali ">

    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h1>
                    Hello PHP Loops
                </h1>
            </div>
            <div class="col bg-d rounded p-3 text-l">
                <h3 class="text-l">Foreach</h3>
                <div class="fs-24">
                    
                    
                        <?php
                            $myFamilys = ['พ่อ','แม่','พี่','น้อง','หมา'];
                            $n_loops = 0;


                            foreach ($myFamilys as $myFamily) {
                                $n_loops++;
                                echo "<p>{$myFamily}</p>";
                            }

                            

                        ?>
                        
                   
                </div>
            </div>
        </div>
    </div>

</body>
</html>