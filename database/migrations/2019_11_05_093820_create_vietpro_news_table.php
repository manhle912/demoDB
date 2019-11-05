<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVietproNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vietpro_news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('news_name');
            $table->string('news_slug');
            $table->string('news_img');
            $table->string('news_author');
            $table->text('news_content');
            $table->integer('cat_id');
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
        Schema::dropIfExists('vietpro_news');
    }
}
