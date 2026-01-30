<?php

$c = $f = $k = $r = 0;

function cek_data($data){
    if(isset($_GET[$data]) && $_GET[$data] != ""){
        return $_GET[$data];
    }
    return 0;
}

function cel_conv($cel){
    global $c, $f, $k, $r;
    $c = $cel;
    $f = ($cel * 9/5) + 32;
    $k = $cel + 273.15;
    $r = $cel * 4/5;
}

function fare_conv($fare){
    global $c, $f, $k, $r;
    $c = ($fare - 32) * 5/9;
    $f = $fare;
    $k = ($fare - 32) * 5/9 + 273.15;
    $r = ($fare - 32) * 4/9;
}

function kelvin_conv($kelv){
    global $c, $f, $k, $r;
    $c = $kelv - 273.15;
    $f = ($kelv - 273.15) * 9/5 + 32;
    $k = $kelv;
    $r = ($kelv - 273.15) * 4/5;
}

function reamur_conv($rea){
    global $c, $f, $k, $r;
    $c = $rea * 5/4;
    $f = ($rea * 5/4) * 9/5 + 32;
    $k = ($rea * 5/4) + 273.15;
    $r = $rea;
}

$dor = cek_data("dor");

if($dor == "celci"){
    cel_conv(cek_data("celcius"));
} elseif($dor == "fare"){
    fare_conv(cek_data("farenheit"));
} elseif($dor == "kelv"){
    kelvin_conv(cek_data("kelvin"));
} elseif($dor == "rea"){
    reamur_conv(cek_data("reamur"));
}

?>
