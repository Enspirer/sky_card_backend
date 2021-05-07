<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePorfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('porfolios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('company_id');
            $table->text('user_id');
            $table->text('content_type');
            $table->text('video_type')->nullable();
            $table->text('photos_type')->nullable();
            $table->text('links_type')->nullable();
            $table->text('youtube_link')->nullable();
            $table->text('uploaded_video_link')->nullable();
            $table->text('photo_link')->nullable();
            $table->text('website_links')->nullable();
            $table->text('description')->nullable();
            $table->text('caption')->nullable();
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
        Schema::dropIfExists('porfolios');
    }
}
