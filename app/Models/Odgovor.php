<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odgovor extends Model
{
    use HasFactory;

    public function up()
    {
    Schema::create('odgovori', function (Blueprint $table) {
        $table->id();
        $table->foreignId('pitanje_id')->constrained();
        $table->string('tekst_odgovora');
        $table->boolean('tacan_odgovor');
        $table->timestamps();
    });
    }


    public function pitanje()
    {
        return $this->belongsTo(Pitanje::class);
    }
}
