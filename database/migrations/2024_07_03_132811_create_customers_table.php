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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customer_id', 50)->unique();
            $table->string('nama', 50);
            $table->string('type', 10);
            $table->string('jenjang', 10);
            $table->string('tingkatan', 10);
            $table->string('kelas', 10);
            $table->decimal('saldo', 10, 2)->nullable();
            $table->string('alamat', 255)->nullable();
            $table->string('kota', 50)->nullable();
            $table->string('kode_pos', 10)->nullable();
            $table->string('negara', 50)->nullable();
            $table->string('kontak', 50)->nullable();
            $table->string('telephone', 50)->nullable();
            $table->bolean('ischecked')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
