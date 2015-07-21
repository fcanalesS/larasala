<?php

namespace App;

class Facultad extends \App\BaseModel {

    protected $table = 'facultades';
    protected $fillable = ['nombre', 'campus_id', 'descripcion'];

    public static function storeRules() {
        return [
            'nombre' => 'required|unique:facultades|between:3,25',
        ];
    }

    /**
     * Retorna las reglas de validación para hacer un update
     *
     * @param $nombre - Id de la facultad, será ignorada en la regla de validación unique
     * @return array
     */
    public function updateRules() {
        return array_merge(self::storeRules(), [
            'nombre' => sprintf('required|unique:facultades,nombre,%d', $this->id),
            'campus_id' => 'required|exists:campus,id',
        ]);
    }

    public function campus() {
        return $this->belongsTo('\App\Campus', 'campus_id', 'id');
    }

    public function departamentos() {
        return \App\Departamento::with('facultad')->where('facultad_id', $this->id)->get();
    }
}
