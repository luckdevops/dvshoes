<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
//use Illuminate\Auth\Authenticatable as Authenticatable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Notifications\Notifiable;
use App\Interfaces\IUsuario;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    const admin = 'admin';
    const cliente = 'cliente';

    const STATUS_LISTA = [
        self::admin  => 'Administrador',
        self::cliente  => 'Cliente',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'sobrenome', 'email', 'cpf', 'password', 'aceite_termo_uso', 'perfil', 'tenant_id', 'status', 'token_validation'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'tenant_id'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


	public function setEmail($email)
	{
	    $this->email = $email;
	}

    public function getEmail()
	{
	    return $this->email;
	}

    public function setSenha($password)
	{
	    $this->password = $password;
	}

    public function getGuard()
	{
	    return $this->guard;
	}

    public function getClasseLogin()
	{
	   	return new $this;
	}
}
