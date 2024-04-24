<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comments', function(Blueprint $table){
            $table->bigIncrements('id');

            $table->bigInteger('ticket_id')->unsigned()->required();
            $table->unsignedBigInteger('user_id')->required();

            $table->longText('comment')->required();

            $table->timestamps();
            $table->unsignedBigInteger('created_by')->index();
            $table->unsignedBigInteger('updated_by')->index();

             //Si un dato es alterado o eliminado se va a realizar eliminacion en cascada en todas las tablas foraneas
            $table->foreign('ticket_id')->references('id')->on('tickets');
            $table->foreign('user_id')->on('users')->references('id');//el orde de ->on o ->references no altera la ejecicion de la migrasion
            //$table->foreign('requester_user_id')->references('id')->on('users');
        });//
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
