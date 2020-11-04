<?php
    class Employee
    {
      public $name;
      public $title;
      public $salary;

      public function setEmployeeName($name){
        $this->name = $name;
      }

      public function getEmployeeTitle(){
        return $this->title;
      }

      public function getEmployeeMonthlySalary($day){
        return intval($day/30)*$this->salary;
      }

      public function getEmployeeProfile(){
        $profile = "
          <b>Employee Profile</b></br>
          Name: $this->name </br>
          Title: ".$this->getEmployeeTitle()."
        ";
        return $profile;
      }
    }
?>
