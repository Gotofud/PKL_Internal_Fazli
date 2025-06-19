<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class SiswaController extends Controller
{

    // public function index()
    // {
    //     $siswa = [
    //         ['nama' => 'Fazli', 'kelas' => 'XI RPL 1', 'kelamin' => 'Laki-Laki', 'alamat' => 'Bandung'],
    //         ['nama' => 'Sulis', 'kelas' => 'XI Kuliner 1', 'kelamin' => 'Perempuan', 'alamat' => 'Bandung'],
    //         ['nama' => 'Rido', 'kelas' => 'XI RPL 1', 'kelamin' => 'Laki-Laki', 'alamat' => 'Bangkok'],
    //         ['nama' => 'Tio', 'kelas' => 'XI TKR 1', 'kelamin' => 'Laki-Laki', 'alamat' => 'Jawa'],
    //         ['nama' => 'Kikiw', 'kelas' => 'X RPL 9', 'kelamin' => 'Tidak Diketahui', 'alamat' => 'Kamboja']
    //     ];

    //     return view('siswa', compact('siswa'));

    // }
    public function ortu()
    {
        $orgt = [
            ['nama' => 'Pa Fazli', 'kelamin' => 'Laki-Laki', 'telepon' => '0821-1249-7509'],
            ['nama' => 'Kang Dedi Mulyadi', 'kelamin' => 'Laki-Laki', 'telepon' => '0811-1249-7009'],
            ['nama' => 'Pa Rusdi', 'kelamin' => 'Laki-Laki', 'telepon' => '0821-1249-7209'],
            ['nama' => 'Pa Io ', 'kelamin' => 'Laki-Laki', 'telepon' => '0821-1945-7239'],
        ];

        return view('orangtua', compact('orgt'));

    }

    private $siswa = [
        ['id' => 1, 'nama' => 'Fazli', 'kelas' => 'XI RPL 1'],
        ['id' => 1, 'nama' => 'Sulis', 'kelas' => 'XI Kuliner 1'],
        ['id' => 1, 'nama' => 'Rido', 'kelas' => 'XI RPL 1'],
        ['id' => 1, 'nama' => 'Tio', 'kelas' => 'XI TKR 1'],
        ['id' => 1, 'nama' => 'Kikiw', 'kelas' => 'X RPL 9']
    ];

    public function index()
    {
        if (!Session::has('siswa')) {
            Session::put('siswa', $this->siswa);
        }

        $siswa = Session::get('siswa', []);
        return view('siswa.index', compact('siswa'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:10'
        ]);

        $siswa = Session::get('siswa', []);
        $siswa[] = [
            'id' => count($siswa) + 1,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
        ];
        Session::put('siswa', $siswa);

        return redirect()->route('siswa.index')->with('success', 'Data Siswa Berhasil ditambahkan');
    }

    public function edit($id)
    {
        $siswa = Session::get('siswa');
        $siswaItem = collect($siswa)->firstWhere('id', $id);
        if (!$siswaItem) {
            return redirect()->route('siswa.index')->with('error', 'Siswa Tidak di temukan');
        }
        return view('siswa.edit', compact('siswaItem'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:10'
        ]);
        $siswa = Session::get('siswa', []);
        $index = collect($siswa)->search(function ($item) use ($id) {
            return $item['id'] == $id;
        });

        if ($index === false) {
            return redirect()->route('siswa.index')->with('error', 'Siswa tidak di temukan');
        }

        $siswa[$index] = [
            'id' => $id,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
        ];
        Session::put('siswa', $siswa);

        return redirect()->route('siswa.index')->with('success', 'Data Siswa Berhasil diedit');
    }

    public function destroy($id)
    {
        $siswa = Session::get('siswa', []);
        $siswa = array_filter($siswa, function($item) use ($id){
            return $item['id'] != $id;
        });
        Session::put('siswa', array_values($siswa));

        return redirect()->route('siswa.index')->with('success', 'Data berhasil di hapus');
    }
}
