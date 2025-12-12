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
        /*Schema::create('ingatlanoks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kategoriak_id')->unsigned()->nullable();
            $table->text('leiras');
            $table->timestamp('datum')->useCurrent();
            $table->boolean('tehermentes');
            $table->integer('ar');
            $table->string('kepUrl', 255);
            $table->foreign('kategoriak_id')->references('id')->on('kategoria')->nullOnDelete();
        });*/
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingatlanoks');
    }
};
