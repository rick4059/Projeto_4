<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('processos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 100);
            $table->longText('descricao');
            $table->bigInteger('id_anexo')->unsigned();
            $table->foreign('id_anexo')
                ->references('id')->on('anexos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->bigInteger('id_dep')->unsigned();
            $table->foreign('id_dep')
                ->references('id')->on('departamentos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('processos');
    }
};
