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
        Schema::create('dataprestasi', function (Blueprint $table) {
            $table->id();
            $table->string('namaprestasi');
            $table->string('tingkat');
            $table->string('juarake', 10);
            $table->string('namapeserta');
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
        Schema::dropIfExists('dataprestasi');
    }
};
