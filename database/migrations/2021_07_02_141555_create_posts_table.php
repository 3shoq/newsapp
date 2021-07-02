<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id('id');
            $table->string('title');
            $table->text('content');

            $table->dateTime('date_written');

            $table->String('post_imge')->nullable();
            $table->integer('votes_up') ->nullable();
            $table->integer('votes_down')->nullable();


            //Relationships
            $table->integer('catogory_id');
            $table->integer('author_id');
            
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
        Schema::dropIfExists('posts');
    }
}
