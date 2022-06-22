<?php

namespace App\Imports;

use App\Models\Sinhvien;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SinhvienImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Sinhvien([
            'mssv'=> $row['mssv'],
            'ho'=> $row['ho'],
            'ten_lot'=> $row['ten_lot'],
            'ten'=> $row['ten'],
            'email'=> $row['email'],
            'pass'=> $row['pass'],
            'so_dien_thoai'=> $row['so_dien_thoai'],
            'ngay_sinh' => $row['ngay_sinh'],
            'noi_sinh'=> $row['noi_sinh'],
            'gioi_tinh'=> $row['gioi_tinh'],
            'cccd'=> $row['cccd'],
            'ngay_cap'=> $row['ngay_cap'],
            'noi_cap'=> $row['noi_cap'],
            'doi_tuong'=> $row['doi_tuong'],
            'dien_chinh_sach'=> $row['dien_chinh_sach'],
            'khoa_hoc'=> $row['khoa_hoc'],
            'ma_khoa'=> $row['ma_khoa'],
            'ma_nganh'=> $row['ma_nganh'],
            'ma_lop'=> $row['ma_lop'],
            'ngay_vao_truong'=> $row['ngay_vao_truong'],
            'ngay_vao_doan'=> $row['ngay_vao_doan'],
            'ton_giao'=> $row['ton_giao'],
            'dia_chi'=> $row['dia_chi'],
            'bac_dao_tao'=> $row['bac_dao_tao'],
            'loai_dao_tao'=> $row['loai_dao_tao'],
            'hinh_anh'=> $row['hinh_anh'],
        ]);
    }
}
