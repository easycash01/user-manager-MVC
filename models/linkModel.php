<?php


class Pagemodel {
    public static function paginaModel( $link ){
        $response = '';

       if ( $link == 'home' || 
           $link == 'utenti' || 
           $link == 'addUtenti') {
           
            $response = $link;
      
        
        
        return $response;
    }
    }
}



?>