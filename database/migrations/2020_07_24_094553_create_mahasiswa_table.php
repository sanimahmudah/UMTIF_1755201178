<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
   {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('nim', 12)->primary();
            $table->string('nama_lengkap', 100);
            $table->integer('prodi');
            $table->text('alamat');
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
        Schema::dropIfExists('mahasiswa');
   }
}
