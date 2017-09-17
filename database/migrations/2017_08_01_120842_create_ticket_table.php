<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket', function (Blueprint $table) {
            $table->increments('ticket_id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('user_id')->on('user')->onDelete('cascade');
            $table->string('ticket_status');
            $table->text('software_issue');
            $table->string('admin_email')->nullable();
            $table->string('priority')->nullable();
            $table->string('escalation_level')->nullable();
            $table->string('os_info');
            $table->text('description');
            $table->string('display_id');
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
        Schema::dropIfExists('ticket');
    }
}
