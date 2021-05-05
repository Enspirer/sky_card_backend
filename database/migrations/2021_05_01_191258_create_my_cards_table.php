<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_cards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('company_id');
            $table->text('cover_image')->nullable();
            $table->text('avatar_image')->nullable();
            $table->text('company_name');
            $table->text('description')->nullable();
            $table->text('user_id');
            $table->text('card_template')->nullable();
            $table->text('social_media_links')->nullable();
            $table->text('email');
            $table->text('phone_number')->nullable();
            $table->text('address')->nullable();
            $table->text('position');
            $table->text('is_public');
            $table->text('website');
            $table->text('package');
            $table->text('primary_template');
            $table->text('slug');
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
        Schema::dropIfExists('my_cards');
    }
}
