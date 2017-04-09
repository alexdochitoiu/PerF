<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UTILIZATORI', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('NUME_CONT')->unique();
            $table->string('PAROLA');
            $table->string('NUME');
            $table->string('PRENUME');
            $table->string('PERSOANA_FIZICA');
            $table->string('EMAIL')->unique();
            $table->string('NR_TELEFON')->unique();
            $table->string('LOCALITATE');
            $table->timestamps();
            $table->rememberToken();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('UTILIZATORI');
    }
}
