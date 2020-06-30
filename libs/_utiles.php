<?php
function getPath($new)
{
    $rep = $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['SCRIPT_NAME']);
    $old = "src/page";
    return  str_replace($old, $new, $rep);
    
}

function getUrl()
{
    $url = "http://" . $_SERVER['HTTP_HOST'];
    return  $url.str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
}