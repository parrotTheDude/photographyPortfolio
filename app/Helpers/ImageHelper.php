<?php

namespace App\Helpers;

class ImageHelper
{
    protected static ?array $dimensions = null;

    /**
     * Get [width, height] for an image path relative to public/images/.
     * Falls back to getimagesize() if the map doesn't have it.
     */
    public static function dimensions(string $path): array
    {
        if (static::$dimensions === null) {
            $file = storage_path('app/image-dimensions.json');
            static::$dimensions = file_exists($file)
                ? json_decode(file_get_contents($file), true) ?? []
                : [];
        }

        if (isset(static::$dimensions[$path])) {
            return static::$dimensions[$path];
        }

        // Fallback: read from disk
        $fullPath = public_path('images/' . $path);
        if (file_exists($fullPath)) {
            $size = @getimagesize($fullPath);
            if ($size) {
                return [$size[0], $size[1]];
            }
        }

        return [0, 0];
    }

    public static function width(string $path): int
    {
        return static::dimensions($path)[0];
    }

    public static function height(string $path): int
    {
        return static::dimensions($path)[1];
    }
}
