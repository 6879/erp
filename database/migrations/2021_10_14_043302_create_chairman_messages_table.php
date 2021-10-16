<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChairmanMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chairman_messages', function (Blueprint $table) {
            $table->id();
            $table->text('image')->nullable();
            $table->text('name')->nullable();
            $table->text('designation')->nullable();
            $table->text('title')->nullable();
            $table->text('message')->nullable();       
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
        Schema::dropIfExists('chairman_messages');
    }
}
