<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('brand_name');
            $table->text('slogan')->nullable();
            $table->text('email')->nullable();
            $table->text('category');
            $table->text('address')->nullable();
            $table->text('user_id');
            $table->text('logo_img')->nullable();
            $table->text('cover_image')->nullable();
            $table->text('cards_data')->nullable();
            $table->text('template_id')->nullable();
            $table->text('phone_number')->nullable();
            $table->text('map_location')->nullable();
            $table->text('status')->comment('0 is not showing,1 publish');
            $table->text('description')->nullable();
            $table->text('location')->nullable();
            $table->text('website')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
