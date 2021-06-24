<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  protected $fillable = [
    'title',
    'note',
  ];

  public function user() {
    return $this -> belongsTo(User::class);
  }
}
