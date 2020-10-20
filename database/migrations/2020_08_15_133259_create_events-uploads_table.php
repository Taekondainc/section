<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events-uploads', function (Blueprint $table) {
            $table->id();
            $table->text("name");
            $table->text("description");
            $table->text("urltext");
            $table->text("url");
            $table->Longtext("image");
            $table->text("approved");
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
        Schema::dropIfExists('events-uploads');
    }
}
