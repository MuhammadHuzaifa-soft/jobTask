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
            $table->id();
                  $table->unsignedBigInteger('user_id')->index();
                  $table->string('post_title', 255);
                 $table->string('slogan');
                 $table->string('job_type');
                     $table->string('availability');
                    $table->string('pay_rate');
                   $table->longText('post_body');

                //   $table->string('Skills');
                  $table->foreign('user_id')->references('id')
                  ->on('users')->onDelete('cascade');
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
