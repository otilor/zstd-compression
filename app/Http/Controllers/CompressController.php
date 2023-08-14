<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompressRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Process;

class CompressController extends Controller
{
    public function compress(CompressRequest $request)
    {
        $file = $request->file('input_file');

        // Store the file on the local disk
        $path = $file->store('uploads', 'local');

        // Get the full path to the stored file
        $filename = Storage::disk('local')->path($path);

        // Set the path for the compressed file
        $compressed_filename = "$filename.zst";

        // dd($filename);
        // Compress the file using zstd

        exec("zstd --ultra -22 $filename -o $compressed_filename");

        $compressedFilePath = $compressed_filename;
        return view('finished_compression', compact('compressedFilePath'));
    }
}
