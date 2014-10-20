##php-slug
snippet para formatear tu texto de manera optima, esta funcion remplaza caracteres con tildes, enies y otros caracteres que no sean letras o numeros remplazandolo por un caracter que tu elijas en el 2 parametro de la funcion (por defecto guion) ademas te permite cortar un limite de caracteres cortando en la ultima posicion de la palabra, esto evita que corte palabras a medias por ejemplo `esto es una cadena larga` un acortador normal `esto-es-una-caden..` con **php-slug** `esto-es-una-cadena`

###modo de uso
la funcion recibe 3 parametros `slug(param1,param2,param3)` 
- el string a formatear
- el caracter remplazante
- limite de caracteres

###ejemplo
```
<?php

require 'func.slug.php';

$string = "probando texto";

print slug($string,"-", 10);

//result >> probando-texto

```
