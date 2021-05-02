<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('category_name');
            $table->text('description')->nullable();
            $table->text('status')->comment('0 is not publish, 1 is published');
            $table->text('type')->comment('organziation,public_fegurer,location');
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
        Schema::dropIfExists('brands_categories');
    }
}
