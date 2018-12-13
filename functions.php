<?php
function includeMarkupTemplateFile(string $markupTemplateFile, array $pageData):string {
    //ini_set("zlib.output_compression", 0);
    if (file_exists($markupTemplateFile)){
        /*foreach($pageData as $key => $value){
            $key_clone = &$key;
            $name = $key_clone;
            $$name = $value;
        }*/
        extract($pageData);
        ob_start();
        require_once($markupTemplateFile);
        return ob_get_clean();
    }
    else
       return "ebi koney suka";
}

function priceFormatRubles(string $price):string {
    $price = strip_tags($price);
    $result = ceil($price);
    if ($result >= 1000){
        return number_format($result, 0, "", " ") . " &#8381";
    }
    else
        return $result . "&#8381" ;
}

function terminateTime():string {
    $tsMidnight = strtotime("tomorrow");
    $timer = $tsMidnight - time();
    $hours = floor($timer/3600);
    $minutes = floor(($timer % 3600) / 60);
    return "$hours : $minutes";
}