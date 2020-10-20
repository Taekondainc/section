<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covid', function (Blueprint $table) {
            $table->id();
            $table->text("assist");
            $table->text("name");
            $table->text("aid");
            $table->text("prefix");
            $table->text("address");
            $table->text("region");
            $table->text("contact");
            $table->text("members");
            $table->text("disable");
            $table->text("nonemp");
            $table->text("parent");
            $table->text("pensioner");
            $table->text("employment");
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
        Schema::dropIfExists('covids');
    }
}
