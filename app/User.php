<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "users";
    protected $primaryKey = "id";
    protected $fillable = [
        'name','nik', 'tempat_lahir', 'tanggal_lahir', 'kelamin', 'agama', 'pekerjaan', 'pendidikan', 'email', 'password', 'is_admin', 'surat_suara', 
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

    public static function deleteData($id=0){
        DB::table('users')->where('id', '=', $id)->delete();
     }
}
