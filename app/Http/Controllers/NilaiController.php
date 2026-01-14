<?php
namespace App\Http\Controllers;
use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller {
    public function index() { return Nilai::with('siswa','mataPelajaran')->get(); }
    public function store(Request $r) {
        $r->merge(['nilai_akhir'=>($r->nilai_tugas??0)*0.3+($r->nilai_uts??0)*0.3+($r->nilai_uas??0)*0.4]);
        return Nilai::create($r->all());
    }
    public function show(Nilai $n) { return $n->load('siswa','mataPelajaran'); }
    public function update(Request $r, Nilai $n) {
        $r->merge(['nilai_akhir'=>($r->nilai_tugas??$n->nilai_tugas)*0.3+($r->nilai_uts??$n->nilai_uts)*0.3+($r->nilai_uas??$n->nilai_uas)*0.4]);
        $n->update($r->all());
        return $n;
    }
    public function destroy(Nilai $n) { $n->delete(); return response()->noContent(); }
}
