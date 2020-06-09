<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMissssxtapePlaylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mixtape_playlists', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->boolean('is_public')->default(true);
            $table->string('name');
            $table->text('description')->nullable();
            $table->foreign('user')
                  ->references('id')
                  ->on('mixtape_users')
                  ->onDelete('cascade');
            $table->integer('likes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mixtape_playlists');
    }
}
