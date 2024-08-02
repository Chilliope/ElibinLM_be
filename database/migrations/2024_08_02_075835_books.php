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
        // migrasi table koleksi buku
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // judul buku
            $table->string('publisher'); // penerbit
            $table->integer('ISBN'); // International Standard Book Number
            $table->string('publication_year'); // tahun terbit
            $table->string('book_spine_number'); // nomor punggung buku
            $table->integer('page_size'); // jumlah halaman
            $table->string('information'); // keterangan
            $table->string('image'); // foto buku
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
