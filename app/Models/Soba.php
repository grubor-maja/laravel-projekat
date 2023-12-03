<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soba extends Model
{
    use HasFactory;

    public function up()
    {
    Schema::create('sobe', function (Blueprint $table) {
        $table->id();
        $table->string('kod_sobe')->unique();
        // Dodajte još polja prema potrebama, kao što su maksimalan broj igrača, status itd.
        $table->timestamps();
    });
    }


    public function pitanja()
    {
        return $this->hasManyThrough(Pitanje::class, Odgovor::class);
    }
}
