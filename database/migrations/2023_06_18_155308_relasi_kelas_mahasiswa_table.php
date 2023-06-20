<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Iluminatte\Support\Facades\QueryException;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('mahasiswas', function (Blueprint $table) {
            $table->dropColumn('kelas'); //menghapus kolom kelas
            $table->unsignedBigInteger('kelas_id')->nullable(); //menambahkan kolom kelas_id
            $table->foreign('kelas_id')->references('id')->on('kelas'); //menambahkan foreign key di kolom kelas_id
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('mahasiswas', function (Blueprint $table) {
            $table->string('kelas');
            $table->dropForeign(['kelas_id']);
        });
    }
};
