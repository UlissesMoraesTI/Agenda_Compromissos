<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
  public $timestamps = false;
  protected $fillable = ['nome', 'data', 'horaini', 'horater', 'local', 'status', 'obs'];
}
