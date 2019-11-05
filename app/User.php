<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable implements MustVerifyEmail
{
    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'regno', 'firstname', 'lastname', 'email', 'phone', 'address', 'gender', 'country', 'passport_number', 'affiliation','category_id','participation_category','paper_title', 'remarks', 'image_url', 'document_url', 'subscription',
        'status','payment_id', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function category(){
      return $this->belongsTo('App\Category');
    }
    public function calculateFee(){
      switch ($this->category->code_no) {
        case '1':
          $fee = 700;
          break;
        case '2':
          $fee = 1800;
          break;
        case '3':
          $fee = 2500;
          break;
        case '4':
          $fee = 4500;
          break;
      }
      return $fee;
    }


    public function payment(){
      return $this->belongsTo('App\Payment');
    }
}
