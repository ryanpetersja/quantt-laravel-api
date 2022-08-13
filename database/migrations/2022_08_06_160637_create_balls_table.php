<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balls', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('point_id');
            $table->boolean('winner')->nullable();
            $table->text('spin')->nullable();
            $table->text('from');
            $table->text('to');
            $table->text('stroke_type');
            $table->boolean('is_service')->default(false);
            $table->integer('player_id');
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
        Schema::dropIfExists('balls');
    }
}
