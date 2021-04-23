<?php

$languages = [
    'JAVA',
    'PHP',
    'Javascript',
    'Python',
    'Lisp',
    'Erlang',
    'Swift',
    'Kotlin',
];

$filter = array_filter($languages,function($val){
    if(strlen($val) <= 4)
    {
        return true;
    }else{
        return false;
    }
});

echo "<pre>";
print_r($filter);
echo "</pre>";

$map = array_map(function($val){
    $upper_string = strtoupper($val);
    return $upper_string;
},$languages);

echo "<pre>";
print_r($map);
echo "</pre>";


$reduce = array_reduce($languages,function($carry,$item){
    $len = strlen($item);
    $result = $carry + $len;
    return $result;
},0);

echo "<pre>";
print_r($reduce);
echo "</pre>";

?>