<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('article_previews', function (Blueprint $table) {
            $table->id();
            $table->string('img', 100);
            $table->string('tag', 50);
            $table->string('card_header', 100);
            $table->string('card_descr', 200);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_previews');
    }
};
