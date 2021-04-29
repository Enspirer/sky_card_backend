<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAIScannedCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a_i_scanned_cards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('file_path');
            $table->text('file_name');
            $table->text('scanned_content')->nullable();
            $table->text('user_id');
            $table->text('json_output');
            $table->text('description')->nullable();
            $table->text('status')->nullable()->comment('0 is pending,1 is scaning complete, 2 is something wrong');
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
        Schema::dropIfExists('a_i_scanned_cards');
    }
}
