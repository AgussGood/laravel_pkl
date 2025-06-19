<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private $arr = [
        ['id' => 1, 'nama' => 'faza', 'kelas' => 'xii rpl 1'],
        ['id' => 2, 'nama' => 'ubed', 'kelas' => 'xii rpl 2'],
        ['id' => 3, 'nama' => 'cemen', 'kelas' => 'xii rpl 3'],
    ];

    public function index()
    {
        $siswa = session('siswa_data', $this->arr);
        return view('siswa.index', ['siswa' => $siswa]);
    }

    public function show($id) {
        //ambil data siswa dari session
        $data = session('siswa_data', $this->arr);

        //cari data berdasarkan id
        $siswa = collect($this->arr)->firstWhere('id', $id);

        // jika data tidak ada
        if (! $siswa) {
            abort(404);
        }

        return view('siswa.show',['siswa'=>$siswa]);
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $siswa = session('siswa_data', $this->arr);

        //membuat increment id otomatis
        $newId= collect($siswa)->max('id') + 1;

        // tambah data siswa
        $siswa[] = [
            'id' => $newId,
            'kelas' => $request->kelas,
            'nama' => $request->nama
        ];

        //simpan ke array siswa
        session(['siswa_data' => $siswa]);

        //kembali ke halaman siswa
        return redirect('/siswa');
    }

    public function edit($id) {
        //ambil data siswa dari session
        $data = session('siswa_data', $this->arr);

        //cari data berdasarkan id
        $siswa = collect($data)->firstWhere('id', $id);

        // jika data tidak ada
        if (! $siswa) {
            abort(404);
        }

        return view('siswa.edit',['siswa'=>$siswa]);
    }

    public function update(Request $request, $id)
    {
        //ambil data siswa dari session
        $data = session('siswa_data', $this->arr);

        // mencari siswa berdasarkan id
        
        $siswaId = collect($data)->search(fn($item) => $item['id'] == $id);

        //mengubah isi data nama dan kelas
        $data[$siswaId]['nama'] = $request->nama;
        $data[$siswaId]['kelas'] = $request->kelas;

        session(['siswa_data' => $data]);
        return redirect('siswa');

    }

    public function destroy($id)
    {
        $siswa = session('siswa_data', $this->arr);
        //mencari array yang sama dari colum id
        $index = array_search($id,array_column($siswa, 'id'));

        //hapus data
        array_splice($siswa, $index, 1);

        session(['siswa_data' => $siswa]);

        return redirect('siswa');
    }

}
