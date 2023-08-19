<?php

namespace App\Services;

use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator;

class MediaPathGenerator implements PathGenerator
{

    public function getPath(Media $media): string
    {
        return md5($media->id) . '/';
    }

    public function getPathForConversions(Media $media): string
    {
        return $this->getPath($media) . 'c/';
    }

    public function getPathForResponsiveImages(Media $media): string
    {
        return $this->getPath($media) . '/cri/';
    }
}
