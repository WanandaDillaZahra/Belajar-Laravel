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
        Schema::create('datapesertadidik', function (Blueprint $table) {
            $table->id();
            $table->string('nis', 10)->unique();
            $table->string('namalengkap');
            $table->string('jk', 10);
            $table->string('kelas', 10);
            $table->string('alamat');
            $table->string('status');
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
        Schema::dropIfExists('datapesertadidik');
    }
};
