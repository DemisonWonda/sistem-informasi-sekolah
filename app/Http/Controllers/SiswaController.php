<?php
namespace App\Http\Controllers;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index() { return Siswa::with('kelas')->get(); }
    public function store(Request $r) { return Siswa::create($r->all()); }
    public function show(Siswa $s) { return $s->load('kelas'); }
    public function update(Request $r, Siswa $s) { $s->update($r->all()); return $s; }
    public function destroy(Siswa $s) { $s->delete(); return response()->noContent(); }
}
