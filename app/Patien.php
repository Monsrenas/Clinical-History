<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Eloquent implements Authenticatable {
    use AuthenticableTrait;
  }

class Patien extends Eloquent
{
    //
    protected $connection = 'mongodb';

	protected $collection = 'patiens';


    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = [

						    'date',
							'identification', 
							'surname',
							'name',
							'sex',
							'DOB',
							'nationality',
							'maritalStts',
							'addres',
							'telephone',
							'email',
							'nxOfKin',
							'relationship', 
							'contact'

    					];
}




	