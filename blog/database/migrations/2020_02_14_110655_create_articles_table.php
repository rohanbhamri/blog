<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subcat_id')->unsigned();
            $table->string('title', 255);
            $table->string('short_desc',1000);
            $table->string('breif', 10000)->nullable();
            $table->string('writtenby')->nullable();
            $table->string('thumnbnail')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();

            $table->foreign('subcat_id')
            ->references('id')
            ->on('sub_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
