<?php

function render_template(array $tempArray, $file)
{
    $tags = $tempArray;
    $file = file_get_contents($file);
    $file_to_render = '';
    $content = '';

    foreach ($tags as $key => $value) {

        if ( is_callable( $value ) ){
            $content = $value();
        } else $content = $value;
        
        $file = str_replace("{{{{$key}}}}", $content, $file);

    }

    return $file;

}