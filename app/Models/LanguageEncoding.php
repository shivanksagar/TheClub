<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LanguageEncoding extends Model
{
    use HasFactory;
    protected $table = 'languages_encodings';

    protected $fillable = [
        'language_id',
        'to_be_encoded',
        'is_encoded',
        'user_id',
    ];


    /**
     * A description of the entire PHP function.
     *
     * @return App\Models\language
     */
    public function language()
        {
            return $this->belongsTo('App\Models\language');
        }
}