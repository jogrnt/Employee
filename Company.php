<?php
    class Company
    {
      public $name;

      public function setCompanyName($name){
        $this->name = $name;
      }
      public function getCompanyName(){
        return $this->name;
      }
    }
?>
