<?php

class Route{

    private $_uri=array();
    private $_method=array();
    private $_function=array();

    public function add($uri,$method,$function=null){

        $this->_uri[]='/'.trim($uri,'/');
        $this->_method[]=$method;
        $this->_function[]=$function;


    }
    public function run(){
        $uri_get=isset($_GET['uri']) ? '/'.$_GET['uri'] : '/';

        foreach($this->_uri as $key=>$value){

            if(preg_match("#^$value$#" ,$uri_get)){

                $method=$this->_method[$key];
                $obj=new $method();
                $function=$this->_function[$key];
                $obj->$function();



            }


        }

    }


}
