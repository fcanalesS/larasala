<?php

namespace App;

class Escuela extends \App\BaseModel {

    protected $table = 'escuelas';
    protected $fillable = ['nombre', 'departamento_id', 'descripcion'];

    public static function storeRules() {
        return [
            'nombre' => 'required|between:3,25|unique_with:escuelas,departamento_id',
        ];
    }

    public function departamento() {
        return $this->belongsTo('\App\Departamento', 'departamento_id', 'id');
    }

    public function carreras() {
        return \App\Carrera::with('escuela')->where('escuela_id', $this->id)->get();
    }

}
