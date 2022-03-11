<?php

namespace App\Http\Controllers;

use Hamcrest\Type\IsNumeric;
use Illuminate\Http\Request;

class preciosController extends Controller
{
    public function precios($prc){
        if(is_numeric($prc)){
            if($prc>0){
                $ttl = 0;
                if($prc<100000){
                    return 'Este producto no tiene descuento.';
                }
                elseif($prc>=100000 && $prc<=150000){
                    $des = $prc*0.02;
                    $ttl = ($prc - $des);
                    return 'El descuento del producto es del 2%, y el total a 
                    pagar es: ' . $ttl;
                }
                elseif($prc>150000 && $prc<=300000){
                    $des = $prc*0.03;
                    $ttl = ($prc - $des);
                    return 'El descuento del producto es del 3%, y el total a 
                    pagar es: ' . $ttl;
                }
                elseif($prc>300000 && $prc<=500000){
                    $des = $prc*0.04;
                    $ttl = ($prc - $des);
                    return 'El descuento del producto es del 4%, y el total a 
                    pagar es: ' . $ttl;
                }
                elseif($prc>500000){
                    $des = $prc*0.05;
                    $ttl = ($prc - $des);
                    return 'El descuento del producto es del 5%, y el total a 
                    pagar es: ' . $ttl;
                }
            }
            return 'El valor ingresado es incorrecto. Inténtelo nuevamente.';
        }
        else {
            return 'El valor ingresado es incorrecto. Inténtelo nuevamente.';
        }
    }

    public function getIVA($art, $prz){
        $IVA = 0.19;
        $op = $prz*$IVA;
        $total = $op+$prz;

        return 'El artículo ' . $art . ' sin IVA cuesta ' . $prz . ' y el precio del IVA es de ' . $IVA . '. El 
        total a pagar por el artículo es de ' . $total;
    }
}
