<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateProdiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
   {
        Schema::create('prodi', function (Blueprint $table) {
            $table->integer('kode_prodi')->primary();
            $table->string('nama_prodi', 30);
            $table->string('kaprodi', 100);
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
        Schema::dropIfExists('prodi');
   }
}
