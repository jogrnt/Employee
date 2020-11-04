<?php
    class Department
    {
      public $name;

      public function setDepartmentName($name){
        $this->name = $name;
      }
      public function getDepartmentName(){
        return $this->name;
      }
    }
?>
