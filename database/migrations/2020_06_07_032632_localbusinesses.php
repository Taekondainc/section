<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Localbusinesses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localbusinesses', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('description');
            $table->text('products');
            $table->text('contact');
            $table->text('file');
            $table->text('approved');
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
        //
    }
}
