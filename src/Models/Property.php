<?php

namespace Rentit\Models;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table='properties';

    protected $fillable=['title','price','description', 'user_id'];

    public function user(){
        return $this->belongsTo('Rentit\Models\User');
    }

    public function GetAllPropieties(){

        $prop=array();

        $content=$this::all();

        $i=0;

        foreach ($content as $key => $value){


            foreach ($value as $key2 => $value2){
                if ($key2=="original"){

                    foreach ($value2 as $key3 => $value3){

                        $prop[$i][$key3]=$value3;
                    }
                    $i++;
                }

            }

        }


        return $prop;


    }


    function pre_array($array1){
        echo "<div><pre>".nl2br(print_r($array1,true))."</pre></div>";
    }
}