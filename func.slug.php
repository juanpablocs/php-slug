<?php
//function slug
function slug($string, $slug='-', $maxlength=50){
        $string = strip_tags($string);
        $seo = strtolower(trim(preg_replace('~[^0-9a-z]+~i', $slug, html_entity_decode(preg_replace('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities($string, ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8')), $slug));
        
        if(strlen($seo) > $maxlength)
        {
        	$seo = substr($seo, 0, $maxlength);
        	$pos = (int)strrpos($seo, $slug); //ultima posicion de la busqueda
        	if($pos)
        		$seo = substr($seo, 0, $pos);       	
        }

        	
        return $seo;
}
