<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaAgendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->increments(column: 'id');
            $table->string(column: 'nome');
            $table->date(column: 'data');
            $table->time(column: 'horaini');
            $table->time(column: 'horater');
            $table->string(column: 'local');
            $table->string(column: 'status');
            $table->string(column: 'obs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('agendas');
    }
}
