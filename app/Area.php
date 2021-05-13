<?php

namespace App;
use App\Professor;

use Illuminate\Database\Eloquent\Model;

class Area extends Model {
  protected $table = 'area';
  public $timestamps = false;
  protected $fillable = ['id','nome', 'descricao'];

  public function professores(){
    return $this->hasMany('App\Professor');
  }
}
