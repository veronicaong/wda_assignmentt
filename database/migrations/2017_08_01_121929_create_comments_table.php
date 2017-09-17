<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('comment', function (Blueprint $table) {
            $table->increments('comments_id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('user_id')->on('user')->onDelete('set null');
            $table->string('admin_email')->nullable();
            $table->integer('ticket_id')->unsigned();
            $table->string('email');
            $table->foreign('ticket_id')->references('ticket_id')->on('ticket')->onDelete('cascade');
            $table->text('comments_description');
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
        Schema::dropIfExists('comment');
    }
}
