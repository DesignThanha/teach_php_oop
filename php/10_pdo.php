<?php require $_SERVER['DOCUMENT_ROOT']."/lawpor_teach_php/vendor/autoload.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP in PHP</title>

    <link rel="stylesheet" href="../theme/css/bootstrap-theme.css">
</head>
<body>
    <div class="container mt-5 font-mali">
        <div class="card">
            <div class="card-header bg-success widht-100-vh  text-center">
                <h2>PHP - OOP </h2>
            </div>
            <div class="card-body">
               <table class="table">
                    <thead>
                         <tr>
                              <th>#</th>
                              <th>FirstName</th>
                              <th>Nickname</th>
                              <th>DOB</th>
                              <th>Gender_id</th>
                              <th>Club_id</th>
                              <th>Salary</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php  
                              use App\Model\Person; 

                              // $personObj = new Person();
                              $p = new Person();
                              $persons = $p->getAllPersons();
                              $n = 0;

                              foreach ($persons as $person) {
                                   $n++;
                                   echo "
                                         <tr>
                                             <td>{$n}</td>
                                             <td>{$person['firstname']}</td>
                                             <td>{$person['nickname']}</td>
                                             <td>{$person['dob']}</td>
                                             <td>{$person['gender_ig']}</td>
                                             <td>{$person['club_ig']}</td>
                                             <td>{$person['salary']}</td>
                                        </tr>
                                   ";

                              }
                         ?>
                        
                    </tbody>
               </table>
          </div>
        </div>
    </div>
</body>
</html>