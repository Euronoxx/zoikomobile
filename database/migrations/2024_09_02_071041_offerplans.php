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
        Schema::create('offerplans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('plan');
            $table->decimal('24mprice', total: 8, places: 2);
            $table->decimal('12mprice', total: 8, places: 2);
            $table->decimal('30dprice', total: 8, places: 2);
            $table->string('data');
            $table->string('calltime');
            $table->string('sms');
            $table->string('mms');
            $table->string('roamingallowence');
            $table->enum('status', ['yes', 'no'])->default('yes');
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
        //
    }
};
