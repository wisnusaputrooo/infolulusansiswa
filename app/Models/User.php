<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Builder;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'id';
    public $timestamps  = true;
    public $incrementing    = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'nomor_peserta', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin',
        'program_studi', 'nis', 'nisn', 'kelas', 'is_pass', 'tahun_lulus', 'jumlah_akses',
        'nomor_telepon', 'acc_facebook', 'acc_instagram', 'acc_twitter'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'tanggal_lahir',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_pass' => 'boolean',
    ];

    // public function getAuthPassword()
    // {
    //     return $this->tanggal_lahir;
    // }

    protected static function booted()
    {
        static::addGlobalScope('activeAsc', function (Builder $builder) {
            $builder->orderBy('index', 'ASC');
        });
    }
}
