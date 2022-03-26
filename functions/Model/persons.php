<?php

namespace App\Model;

use App\Database\DB;

class Person extends DB{

     public function getAllPersons(){

          $sql = "SELECT * FROM persons";

          $stmt = $this->pdo->query($sql);
          $data = $stmt->fetchAll();

          return $data;

     }

}

?>