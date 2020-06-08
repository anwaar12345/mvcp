<?php

class Pages extends Controller{

public function __construct()
{
    // echo "Default Page";
}

public function index(){

   

}



public function about($id)
{
    echo "about method".$id;
}


}

?>
