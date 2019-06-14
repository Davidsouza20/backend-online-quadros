<?php

class Carro extends Eloquent
{
    public $timestamps = false;
    protected $fillable = ['marca', 'modelo', 'year'];

    public static function allCars(){
        $carros = self::all();
        return $carros;
    }

    public static function getCarro($id) {
        $carro = self::find($id);
        if(is_null($carro)) {
            return false;
        }
        return $carro; 
    }

    public static function saveCar(){
        $input = Input::all();
        $carro = new Carro();
        $carro->fill($input);
        $carro->save();
        return $carro; 
    }

    public static function updateCarro($id) {
        $input = Input::all();
        $carro = self::find($id);
        return $carro;
        if(is_null($carro)) {
            return false;
        }
        $carro->fill($input);
        $carro->save();
        return $carro; 

    } 

    public static function deleteCar($id) {
        $carro = self::find($id);
        if(is_null($carro)) {
            return false;
        }
        return $carro->delete();
    }

}
