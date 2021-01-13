<?php

$str = file_get_contents('./content/info.txt');

    echo $str;

    $lines = explode("\n", $str);
    
    $keys = explode(',',array_shift($lines));

    // var_dump($keys);
    // $vals = explode(',', $lines[1]);

    foreach($lines as $line){
        $new[] = array_combine($keys, explode(",", $line));
    }
    echo "<pre>";
    echo var_dump($new[0]['name']);
    echo "</pre>";
?>