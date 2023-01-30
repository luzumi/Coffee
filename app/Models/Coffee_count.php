<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Coffee_count extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tag_id',
        'username',
        'coffee_variety',
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function rfid_tag(): HasOne
    {
        return $this->hasOne(Rfid_tag::class);
    }

    public function coffee_variety(): HasOne
    {
        return $this->hasOne(Coffee_variety::class);
    }
}
