<?php
/**
 * Scans public/images/ and generates a JSON map of
 * image path => [width, height] for use in Blade templates.
 *
 * Run during deploy: php scripts/generate-image-dimensions.php
 */

$imagesDir = realpath(__DIR__ . '/../public/images');
$outputFile = __DIR__ . '/../storage/app/image-dimensions.json';

if (!$imagesDir || !is_dir($imagesDir)) {
    echo "Error: public/images directory not found.\n";
    exit(1);
}

$dimensions = [];

$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($imagesDir, RecursiveDirectoryIterator::SKIP_DOTS)
);

foreach ($iterator as $file) {
    if (!$file->isFile()) continue;

    $ext = strtolower($file->getExtension());
    if (!in_array($ext, ['webp', 'jpg', 'jpeg', 'png', 'gif', 'svg'])) continue;

    // Skip generated responsive variants
    $name = $file->getBasename();
    if (preg_match('/-\d+w\.webp$/', $name)) continue;

    $size = @getimagesize($file->getPathname());
    if (!$size) continue;

    // Store relative to public/images/
    $relativePath = str_replace($imagesDir . '/', '', $file->getPathname());
    $dimensions[$relativePath] = [$size[0], $size[1]];
}

ksort($dimensions);

$dir = dirname($outputFile);
if (!is_dir($dir)) {
    mkdir($dir, 0775, true);
}

file_put_contents($outputFile, json_encode($dimensions, JSON_PRETTY_PRINT));

echo "--- Image dimensions mapped: " . count($dimensions) . " images → storage/app/image-dimensions.json\n";
