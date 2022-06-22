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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('oncharge_user')->constrained('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->dateTimeTz('date_of_call');
            $table->dateTimeTz('date_for_call_back');
            $table->string('status');
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
        Schema::dropIfExists('requests');
    }
};
