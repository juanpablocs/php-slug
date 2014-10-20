<?php

require 'func.slug.php';

$string = "probando texto _ la información tiene 2 partes";

print slug($string,"-", 25);
//result >> probando-texto---la-informacion-tiene
print '<hr>';
print slug($string, "_", 25);
//result >> probando_texto_-_la_informacion_tiene
