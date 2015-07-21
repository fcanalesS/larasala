<?php

namespace App;


class Campus extends \App\BaseModel {

    protected $table = 'campus';
    protected $fillable = ['nombre', 'direccion', 'latitud', 'longitud', 'descripcion', 'rut_encargado'];

    public function updateRules() {
        return array_merge(self::storeRules(), [
            'nombre' => sprintf('required|unique:campus,nombre,%s|between:3,25', $this->id),
        ]);
    }

    public static function storeRules() {
        return [
            'nombre' => 'required|unique:campus|between:3,25',
            'direccion' => 'required',
            'latitud' => 'required|numeric',
            'longitud' => 'required|numeric',
        ];
    }

    public function facultades() {
        return \App\Facultad::with('campus')->where('campus_id', $this->id)->get();
    }

}
