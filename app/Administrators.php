<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Administrator extends Model implements AuthenticatableContract, CanResetPasswordContract {

  use Authenticatable, CanResetPassword;

  protected $table = 'administrators';

  protected $fillable = ['name', 'email', 'password'];

  protected $hidden = ['password', 'remember_token'];

}
