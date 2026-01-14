<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $fillable = ['nama','nip','mata_pelajaran'];

    public function kelas()
    {
        return $this->hasOne(Kelas::class,'wali_kelas_id');
    }
}
