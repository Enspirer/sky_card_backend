<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_templates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('card_body');
            $table->text('thumb_image');
            $table->text('user_id');
            $table->text('is_premium');
            $table->text('status');
            $table->text('description')->nullable();
            $table->text('category');
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
        Schema::dropIfExists('card_templates');
    }
}
