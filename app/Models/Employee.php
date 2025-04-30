<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Employee extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'FIRSTNAME',
        'LASTNAME',
        'GENDER',
        'ADDRESS',
        'DOB',
        'DEPT_ID',
        'CREATED_AT',
        'UPDATED_AT',
        'STATUS',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        // 'password',
        // 'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'ID'=> 'integer',
            'FIRSTNAME' => 'string',
            'LASTNAME' => 'string',
            'GENDER' => 'string',
            'ADDRESS' => 'string',
            'DOB' => 'date',
            'DEPT_ID' => 'string',
            'CREATED_AT' => 'date',
            'ÚPDATED_AT' => 'date',
            'STATUS' => 'string',
        ];
    }
}
