<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pitanje extends Model
{
    use HasFactory;

    public function up()
    {
    Schema::create('pitanja', function (Blueprint $table) {
        $table->id();
        $table->string('tekst_pitanja');
        // Dodajte još polja prema potrebama, kao što su opcije odgovora, tačan odgovor itd.
        $table->timestamps();
    });
    }


    public function odgovori()
    {
        return $this->hasMany(Odgovor::class);
    }
}
