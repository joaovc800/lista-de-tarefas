<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\RedefinirSenhaNotification;
use App\Notifications\VerificarEmailNotification;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //@override do metódo padrão do envio de e-mail
    public function sendPasswordResetNotification($token)
    {
        //dd('Chagamos aqui qui');
        $this->notify(new RedefinirSenhaNotification($token, $this->email, $this->name));
    }

    //@override do metódo padrão da verificação de e-mail
    public function sendEmailVerificationNotification()
    {
        //dd('Chagamos aqui qui');
        $this->notify(new VerificarEmailNotification($this->name));
    }

    
    public function tarefas()
    {
        
        return $this->hasMany('App\Models\Tarefa');
    }


}
