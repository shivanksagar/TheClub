<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LanguageEncoding;

class languages extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'status',
        'to_be_encoded',
        'is_encoded',
        'language_key',
        'user_id',
    ];

    /**
     * Retrieves the language encoding relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function language_encoding(){
        return $this->hasMany('App\Models\LanguageEncoding', 'language_id');
    }
}
