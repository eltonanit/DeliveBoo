<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Creazione della tabella users
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('address', 120);
            $table->string('p_iva', 11)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        // Creazione di 15 utenti
        $users = [];
        for ($i = 1; $i <= 15; $i++) {
            $users[] = [
                'email' => "user$i@example.com",  // Email unica per ogni utente
                'address' => "Address $i",        // Indirizzo fittizio
                'p_iva' => Str::random(11),       // Partita IVA fittizia (usa un generatore di stringhe)
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // Password predefinita
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('users')->insert($users); // Inserimento degli utenti nella tabella 'users'
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
