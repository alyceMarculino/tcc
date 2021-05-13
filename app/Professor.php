<?php

namespace App;
use App\Area;
use App\Permanencia;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model {
  protected $table = 'professor';
  public $timestamps = false;
  protected $fillable = ['id','nome','email','nome_usual', 'area_id'];
  
  public function area() {
    return $this->belongsTo('App\Area');
  }

  public function permanencias(){
    return $this->hasMany('App\Permanencia');
  }
}
