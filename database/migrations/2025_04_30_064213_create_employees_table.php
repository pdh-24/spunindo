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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            // $table->timestamps();
            $table->string('FIRSTNAME', 100)->nullable();
            $table->string('LASTNAME',100)->nullable();
            $table->enum('GENDER', ['Male', 'Female'])->nullable();
            $table->string('ADDRESS', 100)->nullable();
            $table->date('DOB')->nullable();
            $table->unsignedBigInteger('DEPT_ID')->nullable();
            $table->enum('STATUS', ['cont','emp','not_act'])->default('cont');
            // $table->date('CREATED_AT')->nullable();
            // $table->date('UPDATED_AT')->nullable();
            $table->foreign('DEPT_ID') // kolom yang menjadi foreign key
                    ->references('id') // kolom yang menjadi referensi (di tabel departments)
                    ->on('departments') // tabel referensi (departments)
                    ->onDelete('cascade'); // tindakan jika data dihapus (misalnya, hapus data pengguna jika department dihapus)
            ;
                    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
