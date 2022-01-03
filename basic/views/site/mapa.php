<?php

$apiKey="AIzaSyAPd00A2M_o7bbWo7fJvO-cwLUHaLaIOjU";
function sanear_string($string) {
    $string = trim($string);

    $string = str_replace(
        array('à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
        array('a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
        $string
    );

    $string = str_replace(
        array('è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
        array('e', 'e', 'e', 'E', 'E', 'E', 'E'),
        $string
    );

    $string = str_replace(
        array('ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
        array('i', 'i', 'i', 'I', 'I', 'I', 'I'),
        $string
    );

    $string = str_replace(
        array('ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
        array('o', 'o', 'o', 'O', 'O', 'O', 'O'),
        $string
    );

    $string = str_replace(
        array('ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
        array('u', 'u', 'u', 'U', 'U', 'U', 'U'),
        $string
    );
    /*
       $string = str_replace(
           array('ñ', 'Ñ', 'ç', 'Ç'),
           array('n', 'N', 'c', 'C',),
           $string
       );
    */
    $string = str_replace(
        array('ç', 'Ç'),
        array('c', 'C',),
        $string
    );

    //Esta parte se encarga de eliminar cualquier caracter extraño
    $string = str_replace(
        array("\\", "¨", "º", "-", "~",
            "#", "@", "|", "!", "\"",
            "·", "$", "%", "&", "/",
            "(", ")", "?", "'", "¡",
            "¿", "[", "^", "`", "]",
            "+", "}", "{", "¨", "´",
            ">", "<", ";", ",", ":",
            "."),
        '',
        $string
    );

    //PARA ANIDAR TERMINOS DE LA CONSULTA MEDIANTE EL SIMBOLO +
    $string = str_replace(
        array(" "),
        '+',
        $string
    );

    return $string;
}

$url="https://www.google.com/maps/embed/v1/place?key=".$apiKey."&q=".sanear_string($direccion);

?>
<h2>MAPA</h2>
<button class="btn btn-verde my-3"><?php echo $direccion?></button>
<iframe
    width="100%"
    height="500px"
    style="border:0"
    loading="lazy"
    allowfullscreen
    src=<?php echo $url;?>>
</iframe>
