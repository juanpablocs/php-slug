##php-slug
snippet para formatear tu texto de manera optima, esta funcion remplaza caracteres con tildes, enies y otros caracteres que no sean letras o numeros remplazandolo por un caracter que elijas en el 2 parametro de la funcion (por defecto guion) ademas te permite cortar un limite de caracteres cortando entre el espacio de cada palabra en la ultima posicion de la palabra para ser mas exacto, esto evita que corte palabras a medias 
por ejemplo `esto es una cadena larga` un acortador normal `esto-es-una-caden..` con **php-slug** `esto-es-una-cadena`

###modo de uso
la funcion recibe 3 parametros `slug(param1,param2,param3)` 
- param1: (string) el string a formatear
- param2: (string) el caracter remplazante
- param3: (int) limite de caracteres

###ejemplo
```
<?php

require 'func.slug.php';

$string = "probando texto _ la información tiene 2 partes";

print slug($string,"-", 25);
//result >> probando-texto---la-informacion-tiene

print '<hr>';

print slug($string, "_", 25);
//result >> probando_texto_-_la_informacion_tiene

```
