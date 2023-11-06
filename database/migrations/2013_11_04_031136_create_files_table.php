<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('files', function (Blueprint $table) {
            $table->uuid('id');
            $table->uuid('thumb_id')->nullable();
            $table->string('name');
            $table->string('type');
            $table->string('path_to');
            $table->string('md5_hash');
            $table->integer('width');
            $table->integer('height');
            $table->integer('size_kbytes');
            $table->integer('duration_secs')->nullable();
            $table->timestamps();

            $table->index('md5_hash');
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
