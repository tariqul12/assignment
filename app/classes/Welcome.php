<?php


namespace App\classes;
use App\classes\Result;
use App\classes\Student;

class Welcome
{
 public $message,$result,$results,$student,$students;
 public function __construct()
 {
     $this->message="hello";
 }
 public function index(){
     $this->result=new Result();
     $this->results=$this->result->getAllResult();
     return view("home",["results"=>$this->results]);
 }
    public function home(){
        return view("home");
    }
    public function about(){
//     $this->student=new Student();
//     $this->students=$this->student->getAllStudent();
     return view("about",["students"=>$this->students]);
 }
 public function protfolio(){
     return view("protfolio");
 }
 public function services(){
     return view("services");
 }
 public function blog(){
     return view("blog");
 }
 public function contact(){
     return view("contact");
 }
}