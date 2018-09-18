<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSentLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sent_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->nullable()->default(null);
            $table->text('data')->nullable()->default(null);
            $table->ipAddress('client_ip')->nullable()->default(null);
            $table->string('user_agent')->nullable()->default(null);
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
        Schema::dropIfExists('sent_logs');
    }
}
