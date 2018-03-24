<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Moneda extends Model
{
    protected $table ='monedas';
    public $primarykey='id';
	
	public static function Listar_Monedas_Estados()
 	{
 		return Moneda::select("monedas.id","monedas.nombre_moneda","estados.nombre_estado")
 						->join('estados','estados.id','monedas.estados_id')
 						->get();	
	}

    public static function Listar_Monedas()
 	{
 		return Moneda::select("monedas.id","monedas.nombre_moneda")
 						->where("monedas.estados_id",1)
 						->get();	
	}



}
