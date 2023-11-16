<?php


namespace App\classes;


class Student
{
 public $students;
 public function __construct()
 {
     $this->students=[
         0=>[
             "rol"=>1,
             "name"=>"Tonmoy"
         ],
         1=>[
             "rol"=>2,
             "name"=>"Tariqul"
         ],
         2=>[
             "rol"=>3,
             "name"=>"Foysla"
         ],
     ];
 }
 public function getAllStudent(){
     return $this->students;
 }
}