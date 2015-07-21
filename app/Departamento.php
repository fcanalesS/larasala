<?php

namespace App;

class Departamento extends \App\BaseModel {

    protected $table = 'departamentos';
    protected $fillable = ['nombre', 'facultad_id', 'descripcion'];

    public static function storeRules() {
        return [
            'nombre' => 'required|between:3,25|unique_with:departamentos,facultad_id',
            'facultad_id' => 'required|exists:facultades,id',
        ];
    }

    public function updateRules() {
        return array_merge(self::storeRules(), [
            'nombre' => sprintf('required|between:3,25|unique_with:departamentos,facultad_id,%d', $this->id),
        ]);
    }

    public function facultad() {
        return $this->belongsTo('\App\Facultad', 'facultad_id', 'id');
    }

    public function escuelas() {
        return \App\Escuela::with('departamento')->where('departamento_id', $this->id)->get();
    }

}
