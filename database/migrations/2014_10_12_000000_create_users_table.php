<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('index', false, true);
            $table->string('id')->primary();
            $table->string('nama', 60);
            $table->string('nomor_peserta', 14);
            $table->string('username', 14);
            $table->string('password');
            $table->string('tempat_lahir', 60);
            $table->date('tanggal_lahir')->format('d M Y');
            $table->string('jenis_kelamin', 1)->comment('L atau P');
            $table->integer('program_studi')->comment('1 untuk tkj, 2 untuk tei, dan 3 untuk tkr');
            $table->string('nis', 4)->unique();
            $table->string('nisn', 10)->unique();
            $table->string('kelas', 9);
            $table->boolean('is_pass')->default(true);
            $table->string('tahun_lulus', 4)->nullable();
            $table->integer('jumlah_akses')->nullable();
            $table->string('nomor_telepon', 15)->nullable();
            $table->string('acc_facebook')->nullable();
            $table->string('acc_instagram')->nullable();
            $table->string('acc_twitter')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        DB::statement("ALTER TABLE users MODIFY COLUMN `index` INT auto_increment NOT NULL UNIQUE");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
