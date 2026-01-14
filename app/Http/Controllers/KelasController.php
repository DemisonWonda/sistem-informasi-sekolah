<?php
namespace App\Http\Controllers;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index() { return Kelas::with('waliKelas','siswas')->get(); }
    public function store(Request $r) { return Kelas::create($r->all()); }
    public function show(Kelas $k) { return $k->load('waliKelas','siswas'); }
    public function update(Request $r, Kelas $k) { $k->update($r->all()); return $k; }
    public function destroy(Kelas $k) { $k->delete(); return response()->noContent(); }
}
