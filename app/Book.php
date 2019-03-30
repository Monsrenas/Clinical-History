<?php


namespace App;


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Eloquent implements Authenticatable {
    use AuthenticableTrait;
  }
  
class Book extends Eloquent

{

	protected $connection = 'mongodb';

	protected $collection = 'books';


    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = [

        'name', 'detail'

    ];

}