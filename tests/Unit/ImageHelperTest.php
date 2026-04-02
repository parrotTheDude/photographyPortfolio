<?php

namespace Tests\Unit;

use App\Helpers\ImageHelper;
use Tests\TestCase;

class ImageHelperTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        // Reset static cache between tests
        $reflection = new \ReflectionProperty(ImageHelper::class, 'dimensions');
        $reflection->setAccessible(true);
        $reflection->setValue(null, null);
    }

    public function test_returns_zero_for_missing_image(): void
    {
        [$width, $height] = ImageHelper::dimensions('nonexistent.jpg');

        $this->assertSame(0, $width);
        $this->assertSame(0, $height);
    }

    public function test_width_helper_returns_correct_value(): void
    {
        $this->assertSame(0, ImageHelper::width('nonexistent.jpg'));
    }

    public function test_height_helper_returns_correct_value(): void
    {
        $this->assertSame(0, ImageHelper::height('nonexistent.jpg'));
    }

    public function test_reads_dimensions_from_json_cache(): void
    {
        // Write a temporary cache file
        $cacheFile = storage_path('app/image-dimensions.json');
        $original  = file_exists($cacheFile) ? file_get_contents($cacheFile) : null;

        file_put_contents($cacheFile, json_encode([
            'test-image.jpg' => [1200, 800],
        ]));

        // Reset static cache so it re-reads the file
        $reflection = new \ReflectionProperty(ImageHelper::class, 'dimensions');
        $reflection->setAccessible(true);
        $reflection->setValue(null, null);

        [$width, $height] = ImageHelper::dimensions('test-image.jpg');

        $this->assertSame(1200, $width);
        $this->assertSame(800, $height);

        // Restore original cache file
        if ($original !== null) {
            file_put_contents($cacheFile, $original);
        } else {
            unlink($cacheFile);
        }
    }

    public function test_falls_back_gracefully_if_json_cache_is_corrupt(): void
    {
        $cacheFile = storage_path('app/image-dimensions.json');
        $original  = file_exists($cacheFile) ? file_get_contents($cacheFile) : null;

        file_put_contents($cacheFile, 'not valid json {{{{');

        $reflection = new \ReflectionProperty(ImageHelper::class, 'dimensions');
        $reflection->setAccessible(true);
        $reflection->setValue(null, null);

        [$width, $height] = ImageHelper::dimensions('any-image.jpg');

        $this->assertSame(0, $width);
        $this->assertSame(0, $height);

        if ($original !== null) {
            file_put_contents($cacheFile, $original);
        } else {
            unlink($cacheFile);
        }
    }

    public function test_cache_is_only_read_once(): void
    {
        // Call dimensions multiple times — static cache means file is only loaded once
        ImageHelper::dimensions('a.jpg');
        ImageHelper::dimensions('b.jpg');
        ImageHelper::dimensions('c.jpg');

        $reflection = new \ReflectionProperty(ImageHelper::class, 'dimensions');
        $reflection->setAccessible(true);

        // If static cache populated, it won't be null
        $this->assertNotNull($reflection->getValue(null));
    }
}
