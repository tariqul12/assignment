<?php


namespace App\classes;
use App\classes\Result;

class Welcome
{
 public $message,$result,$results;
 public function __construct()
 {
     $this->message="hello";
 }
 public function index(){
     $this->result=new Result();
     $this->results=$this->result->getAllResult();
     view("home",["results"=>$this->results]);
 }
}