<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
             $table->string('name');
             $table->string('address');
             $table->string('mobile');
        });
    }
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
};
