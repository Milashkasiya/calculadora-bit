<?php
/**
 * Created by PhpStorm.
 * User: Karen Araya Milashka
 * Date: 16/12/2015
 * Time: 10:24 AM
 */



define( "BITS_IN_BYTE", 8 );

$amount   = isset( $_POST["cantidad"] ) ? $_POST["cantidad"] : 0;
$units    = isset( $_POST["unidades"] ) ? $_POST["unidades"] : "kilobytes";
$notation = isset( $_POST["notacion"] ) ? $_POST["notacion"] : 1024;

switch( $units )
{
    case "bits"     : $data[ "Bits" ] = $amount; break;
    case "bytes"    : $data[ "Bits" ] = $amount * BITS_IN_BYTE; break;
    case "kilobits" : $data[ "Bits" ] = $amount * $notation; break;
    case "kilobytes": $data[ "Bits" ] = $amount * $notation * BITS_IN_BYTE; break;
    case "megabits" : $data[ "Bits" ] = $amount * $notation * $notation; break;
    case "megabytes": $data[ "Bits" ] = $amount * $notation * $notation * BITS_IN_BYTE; break;
    case "gigabits" : $data[ "Bits" ] = $amount * $notation * $notation * $notation; break;
    case "gigabytes": $data[ "Bits" ] = $amount * $notation * $notation * $notation * BITS_IN_BYTE; break;
    case "terabits" : $data[ "Bits" ] = $amount * $notation * $notation * $notation * $notation; break;
    case "terabytes": $data[ "Bits" ] = $amount * $notation * $notation * $notation * $notation * BITS_IN_BYTE; break;
    case "petabits" : $data[ "Bits" ] = $amount * $notation * $notation * $notation * $notation * $notation; break;
    case "petabytes": $data[ "Bits" ] = $amount * $notation * $notation * $notation * $notation * $notation * BITS_IN_BYTE; break;
    default: $data[ "Bits" ] = 0;
}

$data[ "Bytes"     ] = $data[ "Bits" ] / BITS_IN_BYTE;
$data[ "Kilobits"  ] = $data[ "Bits" ] / $notation;
$data[ "Kilobytes" ] = $data[ "Kilobits" ] / BITS_IN_BYTE;
$data[ "Megabits"  ] = $data[ "Kilobits" ] / $notation;
$data[ "Megabytes" ] = $data[ "Megabits" ] / BITS_IN_BYTE;
$data[ "Gigabits"  ] = $data[ "Megabits" ] / $notation;
$data[ "Gigabytes" ] = $data[ "Gigabits" ] / BITS_IN_BYTE;
$data[ "Terabits"  ] = $data[ "Gigabits" ] / $notation;
$data[ "Terabytes" ] = $data[ "Terabits" ] / BITS_IN_BYTE;
$data[ "Petabits"  ] = $data[ "Terabits" ] / $notation;
$data[ "Petabytes" ] = $data[ "Petabits" ] / BITS_IN_BYTE;

$str = "<table class='table table-hover'";
$str .= "<thead><tr><th>Unidades</th><th>Valores</th></tr></thead>";
$str .= "<tbody>";

foreach( $data as $key => $value )
{
    $str .= "<tr><td>$key</td><td>$value</td>";
}
$str .= "</tbody></table>";
echo $str;