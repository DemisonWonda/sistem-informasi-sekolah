<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model {
    use HasFactory;
    protected $fillable = ['siswa_id','mata_pelajaran_id','nilai_tugas','nilai_uts','nilai_uas','nilai_akhir','keterangan'];

    public function siswa() { return $this->belongsTo(Siswa::class); }
    public function mataPelajaran() { return $this->belongsTo(MataPelajaran::class); }
}
