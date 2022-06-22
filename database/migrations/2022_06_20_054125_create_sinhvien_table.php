<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSinhvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinhvien', function (Blueprint $table) {
            $table->integer('mssv');
            $table->string('ho');
            $table->string('ten_lot');
            $table->string('ten');
            $table->string('email');
            $table->string('pass');
            $table->integer('so_dien_thoai');
            $table->date('ngay_sinh');
            $table->text('noi_sinh');
            $table->text('gioi_tinh');
            $table->integer('cccd');
            $table->date('ngay_cap');
            $table->text('noi_cap');
            $table->text('doi_tuong');
            $table->text('dien_chinh_sach');
            $table->text('khoa_hoc');
            $table->string('ma_khoa');
            $table->string('ma_nganh');
            $table->string('ma_lop');
            $table->date('ngay_vao_truong');
            $table->date('ngay_vao_doan');
            $table->string('ton_giao');
            $table->string('dia_chi');
            $table->string('bac_dao_tao');
            $table->string('loai_dao_tao');
            $table->text('hinh_anh');
            $table->timestamps();
            $table->primary('mssv');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sinhvien');
    }
}
