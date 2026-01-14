<?php
namespace App\Http\Controllers;
use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller {
    public function index() { return MataPelajaran::with('guru','kelas','nilais')->get(); }
    public function store(Request $r) { return MataPelajaran::create($r->all()); }
    public function show(MataPelajaran $mp) { return $mp->load('guru','kelas','nilais'); }
    public function update(Request $r, MataPelajaran $mp) { $mp->update($r->all()); return $mp; }
    public function destroy(MataPelajaran $mp) { $mp->delete(); return response()->noContent(); }
}
