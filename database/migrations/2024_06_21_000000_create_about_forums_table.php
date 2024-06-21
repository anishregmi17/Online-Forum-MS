<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutForumsTable extends Migration
{
    public function up()
    {
        Schema::create('about_forums', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('about_forums');
    }
}
