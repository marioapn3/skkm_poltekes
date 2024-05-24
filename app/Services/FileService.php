<?php
namespace App\Services;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
class FileService
{
    public function uploadFile($file)
    {
        $fileName = Str::random(60);
        $extension = $file->getClientOriginalExtension();

        $pathName = '/storage/' . $fileName . '.' . $extension;

        Storage::put('/public/' . $fileName . '.' . $extension, File::get($file));

        return  $pathName;
    }
}

