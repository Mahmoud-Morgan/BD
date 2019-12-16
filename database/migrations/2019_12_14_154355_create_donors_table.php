<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->bigIncrements('d_id');
            $table->string('d_name');
            $table->integer('d_bloodtype');
            $table->text('d_mobile')->unique();;
            $table->integer('d_governorate');
            $table->integer('d_city');
            $table->text('email')->unique();
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
        Schema::dropIfExists('doners');
    }
}
