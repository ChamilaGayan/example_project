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
        Schema::create('companies', function (Blueprint $table) {
    $table->id();
    $table->string('company_name')->nullable();
    $table->text('email')->nullable();
    $table->text('logo')->nullable();
    $table->text('telephone')->nullable();
    $table->text('facebook')->nullable();
    $table->text('instagram')->nullable();
    $table->text('whatsapp')->nullable();
    $table->text('telegram')->nullable();
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
        Schema::dropIfExists('companies');
    }
};
