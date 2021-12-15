<?php

require './models/linkModel.php';


 class MvcTemplate{
     public function mostraTemplate(){
         
        include 'views/template.php';

     }

public function collegamenti_Pages(){

$link = $_GET['page'];
     
$linkPagina = Pagemodel::paginaModel( $link );

echo $linkPagina;

}

 }