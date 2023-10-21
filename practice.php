<?php



class Calculator{
  
    public  $a ;
    public $b ;
    public $result ;


    function getA()  {
        return $this->a;
    }
    function setA( $a ){
        $this->a = $a;
    }

    function getB()  {
        return $this->b;
    }
    function setB( $b ){
        $this->b = $b;
    }
    function getResult($a , $b)  {
        $result= $this->a +$this->b ; 
        return $this->result;
    }
    function setResult( $result ){
        $this->result = $result;
    }

    function printDetails() {

        echo " result $this->result BEST." ."\n";

    }

}
    $Myresult = new Calculator();
    $Myresult ->setResult(2, 3);
      $Myresult ->printDetails();
    // $student2 = new Student();

    // $student1 ->setName("rala");
    // $student1 ->setClass("2nd");




    //  $student2 ->setName("manik chan");
    //  $student2 ->setClass("5th");



    //  $student2 ->printDetails();
     $Myresult ->printDetails();