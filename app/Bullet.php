<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bullet extends Model
{
   /**
   * Связанная с моделью таблица.
   *
   * @var string
   */
  protected $table = 'bullets';
  protected $fillable = [
    'title', 'text','category'
];
}
