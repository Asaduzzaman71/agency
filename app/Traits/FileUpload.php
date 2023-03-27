<?php
namespace App\Traits;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait FileUpload
{
    public function FileUpload($file, $path = 'undefined'){
        $file = $file->store($path,'public');
        return $file;
    }
}
