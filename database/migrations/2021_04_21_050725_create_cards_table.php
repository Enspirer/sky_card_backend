<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('user_id')->nullable();
            $table->text('address')->nullable();
            $table->text('phone_number')->nullable();
            $table->text('fax_number')->nullable();
            $table->text('card_type');
            $table->text('email')->nullable();
            $table->text('city')->nullable();
            $table->text('website')->nullable();
            $table->text('job_role')->nullable();
            $table->text('company_name')->nullable();
            $table->text('company_id');
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
        Schema::dropIfExists('cards');
    }
}
