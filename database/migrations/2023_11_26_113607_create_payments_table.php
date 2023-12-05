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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('card_number')->nullable();
            $table->string('csv')->nullable();
            $table->string('month')->nullable();
            $table->string('date')->nullable();
            $table->string('holder_name')->nullable();
            $table->timestamps(); // This will add 'created_at' and 'updated_at' columns for timestamps
        });
    }

    /**
     * Reverse the migrations.  
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
