<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens; // tambahkan kode ini



class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
    public function carts()
{
    return $this->hasMany(Cart::class);
}

// Helper method untuk menambah ke keranjang
public function addToCart($merchandiseId, $quantity = 1)
{
    return $this->carts()->updateOrCreate(
        ['merchandise_id' => $merchandiseId],
        ['quantity' => \DB::raw("quantity + $quantity")]
    );
}
}
