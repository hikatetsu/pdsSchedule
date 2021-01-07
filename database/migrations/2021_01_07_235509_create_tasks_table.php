<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('schedule_id')->unsigned();
            $table->string('task_name',100);
            $table->time('scheduled_start_time');
            $table->time('scheduled_end_time');
            $table->time('actual_start_time');
            $table->time('actual_end_time');
            $table->timestamps();
        });

        //外部キーを設定
        $table->foreign('schedule_id')->references('id')->on('schedules');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
