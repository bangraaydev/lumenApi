<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model item ads
 */
class MenuAds extends Model
{

  /**
   * Table database
   */
  protected $table = 'menu_ads';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'user_id','category_id','title','price','description','picture','no_meja','sold','published',
  ];

  /**
   * One to one relationships
   */
  public function category()
  {
    return $this->hasOne('App\CategoryAds');
  }
}
