<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class UploadService
{
    /**
     * @param $filename
     */
    public function correctImageOrientation($filename)
    {
        if (function_exists('exif_read_data')) {
            try {
                $exif = exif_read_data($filename);
                if ($exif && isset($exif['Orientation'])) {
                    $orientation = $exif['Orientation'];
                    $this->imageRotate($orientation, $filename);
                }
            } catch (\Exception $exception) {
                Log::error($exception->getMessage());
                Log::error($exception->getTraceAsString());
            }
        }
    }

    /**
     * @param $orientation
     * @param $filename
     */
    public function imageRotate($orientation, $filename)
    {
        if ($orientation != 1) {
            $img = imagecreatefromjpeg($filename);
            $deg = 0;
            switch ($orientation) {
                case 3:
                    $deg = 180;
                    break;
                case 6:
                    $deg = 270;
                    break;
                case 8:
                    $deg = 90;
                    break;
            }
            if ($deg) {
                $img = imagerotate($img, $deg, 0);
            }
            imagejpeg($img, $filename, 95);
        }
    }

    /**
     * @param $image
     * @param $imageName
     * @param $path
     * @return mixed
     */
    public function uploadImage($image, $path, $name)
    {
        if (!Storage::exists('public/' . $path)) {
            Storage::makeDirectory('public/' . $path, 0775, true);
        }
        $imageName = $name . '-' . time() . '.' . $image->getClientOriginalExtension();
        if (!Storage::disk('public')->exists($path . '/' . $imageName)) {
            Storage::disk('public')->putFileAs($path, $image, $imageName);
        }
        $this->correctImageOrientation(storage_path('app/public') . '/' . $path .'/' . $imageName);
        return $imageName;
    }

    /**
     * Execute unlink image from storage
     * @param $image
     */
    public function unlinkImage($image, $path)
    {
        if (isset($image)) {
            try {
                Storage::disk('public')->delete($path . '/' . $image);
            } catch (\Exception $exception) {
                Log::error('Failed while try to delete ' . $image);
            }
        }
    }
}
