<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkyPromoOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sky_promo_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('user_id');
            $table->text('email_template')->nullable();
            $table->text('email_type');
            $table->text('attached_file')->nullable();
            $table->text('description');
            $table->text('message');
            $table->text('sending_email_count')->nullable();
            $table->text('sent_email_count')->nullable();
            $table->text('read_email_count')->nullable();
            $table->text('read_link_click_count')->nullable();
            $table->text('failed_email_count')->nullable();
            $table->text('status')->comment('pending,approved,complated');
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
        Schema::dropIfExists('sky_promo_orders');
    }
}
