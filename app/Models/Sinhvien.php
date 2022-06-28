<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Base;

class Sinhvien extends Base
{
    use HasFactory;
    public function listingConfigs() {
        $defaultListtingConfigs = parent::defaultListingConfigs();
        $listingConfigs =  array(
            array(
                'field' => 'mssv',
                'name' => 'mssv',
                'type' => 'string'
            ),
            array(
                'field' => 'ho_ten',
                'name' => 'Họ và tên',
                'type' => 'string'
            ),
            array(
                'field' => 'ten_lop',
                'name' => 'Lớp',
                'type' => 'string'
            ),
        );
        return array_merge($listingConfigs, $defaultListtingConfigs);
    }
    protected $table = "Sinhvien";
    protected $fillable = ['mssv','ho','ten_lot','ten','email','pass','so_dien_thoai','ngay_sinh','noi_sinh','gioi_tinh','cccd','ngay_cap','noi_cap','doi_tuong','dien_chinh_sach','khoa_hoc','ma_khoa','ma_nganh','ma_lop','ngay_vao_truong','ngay_vao_doan','ton_giao','dia_chi','bac_dao_tao','loai_dao_tao','hinh_anh'];

    public static function getSinhvien(){
        $sql = DB::table("Sinhvien")->select('mssv','ho','ten_lot','ten',
        'email','pass','so_dien_thoai','ngay_sinh','noi_sinh','gioi_tinh',
        'cccd','ngay_cap','noi_cap','doi_tuong','dien_chinh_sach','khoa_hoc',
        'ma_khoa','Sinhvien.ma_nganh','Sinhvien.ma_lop','lophoc.ten_lop','ngay_vao_truong','ngay_vao_doan','ton_giao',
        'dia_chi','bac_dao_tao','loai_dao_tao','hinh_anh','Sinhvien.created_at','Sinhvien.updated_at')->join('lophoc','lophoc.ma_lop','=','sinhvien.ma_lop')->get();
        return json_decode(json_encode($sql), True);
    }
    
}
