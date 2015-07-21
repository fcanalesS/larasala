<?php

namespace App;

class Carrera extends \App\BaseModel {

    protected $table = 'carreras';
    protected $fillable = ['escuela_id', 'nombre', 'codigo', 'descripcion'];

    public static function storeRules() {
        return [
            'nombre' => 'required|between:3,25|unique_with:carreras,escuela_id',
        ];
    }

    public function escuela() {
        return $this->belongsTo('\App\Escuela', 'escuela_id', 'id');
    }

}
