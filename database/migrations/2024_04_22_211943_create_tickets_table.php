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
        Schema::create('priorites', function(Blueprint $table){
            $table->bigIncrements('id');

            $table->unsignedSmallInteger('type_id')->required();
            $table->unsignedSmallInteger('priority_id')->required();
            $table->unsignedBigInteger('requester_user_id')->required();
            $table->string('name')->required();

            $table->boolean('flag_status')->default(true);//true * abierto || false =>cerrado

            $table->timestamps();
            $table->unsignedBigInteger('created_by')->index();
            $table->unsignedBigInteger('updated_by')->index();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
