<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sinhvien extends Model
{
    use HasFactory;
    protected $table = "Sinhvien";
    protected $fillable = ['mssv','ho','ten_lot','ten','email','pass','so_dien_thoai','ngay_sinh','noi_sinh','gioi_tinh','cccd','ngay_cap','noi_cap','doi_tuong','dien_chinh_sach','khoa_hoc','ma_khoa','ma_nganh','ma_lop','ngay_vao_truong','ngay_vao_doan','ton_giao','dia_chi','bac_dao_tao','loai_dao_tao','hinh_anh'];

    public static function getSinhvien(){
        $sql = DB::table("Sinhvien")->select('mssv','ho','ten_lot','ten','email','pass','so_dien_thoai','ngay_sinh','noi_sinh','gioi_tinh','cccd','ngay_cap','noi_cap','doi_tuong','dien_chinh_sach','khoa_hoc','ma_khoa','ma_nganh','ma_lop','ngay_vao_truong','ngay_vao_doan','ton_giao','dia_chi','bac_dao_tao','loai_dao_tao','hinh_anh')->get();
        return $sql;
    }
}
