<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMixtapePlaylistsTable extends Migration
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
            $table->integer('likes')->nullable();
            $table->integer('user_id');  
            $table->boolean('is_public')->default(true);
            $table->string('name');
            $table->text('description')->nullable();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('mixtape_users')->onDelete('cascade');

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
