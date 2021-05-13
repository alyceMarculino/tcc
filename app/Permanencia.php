<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permanencia extends Model {
  protected $table = 'permanencia';
  public $timestamps = false;
  protected $fillable = ['id','dia','hora', 'sala','professor_id'];
}
