<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('description',255);
            $table->string('slug',255);
            $table->string('color',50)->nullable();
            $table->string('seoTitle')->nullable();
            $table->string('seoDescription')->nullable();
            $table->string('seoKeyword')->nullable();
            $table->float('status')->default(0);
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
        Schema::dropIfExists('video_categories');
    }
}
