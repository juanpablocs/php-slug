<?php

require 'func.slug.php';

$string = "probando ñ Ñ _ la información tiene 2 partes";

print slug($string,"-", 35);
//result >> probando-n-n-la-informacion-tiene
print '<hr>';
print slug($string, "_", 45);
//result >> probando_n_n_la_informacion_tiene_2_partes
