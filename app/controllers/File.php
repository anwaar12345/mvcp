<?php

class File extends Controller{

public function __construct()
{
    echo "Files Page";
}

public function index(){

    $this->view('hello',['title'=>'shah']);

}


}

?>
