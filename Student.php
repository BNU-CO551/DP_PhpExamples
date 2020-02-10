<?php

class Student
{
    public $name = "Derek";
    public $course = "BSc Computing";

    function doSomething()
    {
        echo "Student Class";
    }
}

$class = new Student();

foreach($class as $key => $value)
{
    print "$key => $value<br/>";
}

?>