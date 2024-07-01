<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    /*protected $fillable = [
        'name',
        'email',
        'password',
        'mobilenumber',
        'avatar',
    ];*/

    public $timestamps = FALSE;

    protected $table = 'users';

    //protected $fillable = ['usuario', 'contrasenia', 'fecha_uconexion', 'ip_uconexion', 'tipo_usuario', 'fecha_registro', 'notas', 'cve_dealer_registro', 'status', 'demos',];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function usersvod() : HasMany  {
		return $this->hasMany(UsuarioVod::class, 'cve_dealer', 'cve');
	}

	public function creditsleader() : HasOne  {
		return $this->hasOne(CreditoDealer::class, 'cve_usuario', 'cve');
	}

	public function type() : HasOne  {
		return $this->hasOne(TipoUsuario::class,'cve', 'tipo_usuario');
	}

	public function dealer() : HasOne  {
		return $this->hasOne(User::class,'cve', 'cve_dealer_registro');
	}
	public function contents(): HasMany {
		return $this->hasMany(Contenido::class, 'cve_uploader', 'cve');
	}
}
