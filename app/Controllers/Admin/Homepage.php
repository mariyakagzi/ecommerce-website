<?php

namespace App\Controllers\Admin;

class Homepage extends BaseAdminController
{
    protected array $slideFields = ['banner_1', 'banner_2', 'banner_3'];

    public function index()
    {
        $bannerDir = FCPATH . 'assets/images/banners/';
        $slides = [];

        foreach ($this->slideFields as $i => $field) {
            $fileName = 'home-slide-' . ($i + 1) . '.jpg';
            $path     = $bannerDir . $fileName;
            $slides[] = [
                'field'     => $field,
                'fileName'  => $fileName,
                'url'       => base_url('assets/images/banners/' . $fileName),
                'exists'    => is_file($path),
                'updatedAt' => is_file($path) ? filemtime($path) : null,
            ];
        }

        $data = [
            'title'  => 'Homepage Banners - Kagzi Ventures Admin',
            'slides' => $slides,
        ];

        return view('admin/homepage/index', $data);
    }

    public function update()
    {
        $bannerDir = FCPATH . 'assets/images/banners/';
        if (!is_dir($bannerDir)) {
            mkdir($bannerDir, 0777, true);
        }

        $updated = 0;

        foreach ($this->slideFields as $i => $field) {
            $file = $this->request->getFile($field);

            if (!$file || !$file->isValid() || $file->hasMoved()) {
                continue;
            }

            if (!in_array($file->getClientMimeType(), ['image/jpeg', 'image/png', 'image/webp'], true)) {
                continue;
            }

            $targetName = 'home-slide-' . ($i + 1) . '.jpg';
            $targetPath = $bannerDir . $targetName;

            // Re-encode to JPEG so the file always matches the extension the
            // homepage template expects, regardless of what format was uploaded.
            $image = match ($file->getClientMimeType()) {
                'image/png'  => imagecreatefrompng($file->getTempName()),
                'image/webp' => imagecreatefromwebp($file->getTempName()),
                default      => imagecreatefromjpeg($file->getTempName()),
            };

            if ($image === false) {
                continue;
            }

            // Flatten transparency onto white before saving as JPEG
            $flat = imagecreatetruecolor(imagesx($image), imagesy($image));
            $white = imagecolorallocate($flat, 255, 255, 255);
            imagefill($flat, 0, 0, $white);
            imagecopy($flat, $image, 0, 0, 0, 0, imagesx($image), imagesy($image));

            imagejpeg($flat, $targetPath, 90);
            imagedestroy($image);
            imagedestroy($flat);

            $updated++;
        }

        if ($updated > 0) {
            return redirect()->to(base_url('admin/homepage'))->with('success', $updated . ' homepage banner(s) updated successfully!');
        }

        return redirect()->to(base_url('admin/homepage'))->with('error', 'No valid image was uploaded. Please choose a JPG, PNG, or WEBP file.');
    }
}
