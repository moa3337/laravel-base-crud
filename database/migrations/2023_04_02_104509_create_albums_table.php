<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20)->unique();
            $table->string('album_name', 15)->unique();
            $table->string('author', 20);
            $table->string('editor', 20)->nullable();
            $table->integer('lenght');
            $table->string('poster');
            $table->enum('type', ['pop', 'rock', 'jazz', 'rap']);
            $table->text('description');
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
        Schema::dropIfExists('albums');
    }
};
