<?php
function include_template($template, $data){
    //ini_set("zlib.output_compression", 0);
    if (file_exists($template)){

        foreach($data as $key => $value){
            $key_clone = &$key;
            $name = $key_clone;
            $$name = $value;
        }
        //indian shitcode
        /*if(isset($data["content"]))
            $content = $data["content"];
        if(isset($data["title"]))
            $title = $data["title"];
        if(isset($data["lots_list"]))
            $lots_list = $data["lots_list"];
        if(isset($data["categories"]))
            $categories = $data["categories"];
        ..etc
        */
        //or like switch
        ob_start();
        require_once($template);
        return ob_get_clean();
    }
    else
       return "ebi koney suka";
}

function price_format($price){
    $price = strip_tags($price);
    $result = ceil($price);
    if ($result >= 1000){
        return number_format($result, 0, "", " ") . " &#8381";
    }
    else
        return $result . "&#8381" ;
}

/*
function filter_user_text($string){
    return htmlspecialchars($string);
}*/