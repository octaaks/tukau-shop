<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Image;
use File;

class UploadController extends Controller
{
    public function upload()
    {
        $gambar = Image::get();
        return view('upload', ['gambar' => $gambar]);
    }

    public function proses_upload(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048',
            'desc' => 'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');

        $nama_file = time()."_".$file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $nama_file);

        Image::create([
            'file' => $nama_file,
            'desc' => $request->desc,
        ]);

        return redirect()->back();
    }

    public function hapus($id)
    {
        // hapus file
        $gambar = Image::where('id', $id)->first();
        File::delete('data_file/'.$gambar->file);

        // hapus data
        Image::where('id', $id)->delete();

        return redirect()->back();
    }
}
