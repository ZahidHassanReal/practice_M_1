<?php



class Student{
  
    public  $name ;
    public $class ;
      


    function getName()  {
        return $this->name;
    }
    function setName( $name ){
        $this->name = $name;
    }

    function getClass()  {
        return $this->class;
    }
    function setClass( $class ){
        $this->class = $class;
    }


    function printDetails() {

        echo "$this->name is styding in $this->class class." ."\n";

    }

}
    $student1 = new Student();

    $student2 = new Student();

    $student1 ->setName("rala");
    $student1 ->setClass("2nd");




     $student2 ->setName("manik chan");
     $student2 ->setClass("5th");



     $student2 ->printDetails();
     $student1 ->printDetails();