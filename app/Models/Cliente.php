<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $ciudades_id
 * @property $nombre
 * @property $documento
 * @property $created_at
 * @property $updated_at
 *
 * @property Ciudade $ciudade
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'ciudades_id' => 'required',
		'nombre' => 'required',
		'documento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ciudades_id','nombre','documento'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ciudade()
    {
        return $this->hasOne('App\Models\Ciudade', 'id', 'ciudades_id');
    }
    

}
