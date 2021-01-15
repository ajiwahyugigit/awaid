<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('css', function (Blueprint $table) {
            $table->id();
            $table->text('hari');
            $table->date('tanggal');
            $table->text('judul');
            $table->longText('sub_judul');
            $table->text('aktor');
            $table->longText('isi_content');
            $table->longText('gambar');
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
        Schema::dropIfExists('css');
    }
}
