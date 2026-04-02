<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class SitemapAndRobotsTest extends TestCase
{
    // ── robots.txt ────────────────────────────────────────────────────────

    public function test_robots_txt_returns_200(): void
    {
        $this->get('/robots.txt')->assertStatus(200);
    }

    public function test_robots_txt_has_correct_content_type(): void
    {
        $this->get('/robots.txt')
            ->assertHeader('Content-Type', 'text/plain; charset=UTF-8');
    }

    public function test_robots_txt_allows_all_crawlers(): void
    {
        $this->get('/robots.txt')
            ->assertSee('User-agent: *')
            ->assertSee('Allow: /');
    }

    public function test_robots_txt_contains_sitemap_url(): void
    {
        $response = $this->get('/robots.txt');
        $content  = $response->getContent();

        $this->assertStringContainsString('Sitemap:', $content);
        $this->assertStringContainsString('sitemap.xml', $content);
    }

    // ── sitemap.xml ───────────────────────────────────────────────────────

    public function test_sitemap_returns_200(): void
    {
        $this->get('/sitemap.xml')->assertStatus(200);
    }

    public function test_sitemap_has_correct_content_type(): void
    {
        $this->get('/sitemap.xml')
            ->assertHeader('Content-Type', 'application/xml');
    }

    public function test_sitemap_contains_core_pages(): void
    {
        $response = $this->get('/sitemap.xml');
        $content  = $response->getContent();

        foreach (['/', '/about', '/contact', '/photos'] as $url) {
            $this->assertStringContainsString($url, $content, "Sitemap missing core page: {$url}");
        }
    }

    public function test_sitemap_contains_project_pages(): void
    {
        $response = $this->get('/sitemap.xml');
        $content  = $response->getContent();

        $projects = [
            '/stitch', '/wholesomeHarvest', '/w7',
            '/marble', '/label', '/stump-cross-caverns', '/doors',
        ];

        foreach ($projects as $url) {
            $this->assertStringContainsString($url, $content, "Sitemap missing project: {$url}");
        }
    }

    public function test_sitemap_contains_photo_collection_pages(): void
    {
        $response = $this->get('/sitemap.xml');
        $content  = $response->getContent();

        foreach (['/wildlife', '/pets', '/motion'] as $url) {
            $this->assertStringContainsString($url, $content, "Sitemap missing photo collection: {$url}");
        }
    }

    public function test_sitemap_is_valid_xml(): void
    {
        $content = $this->get('/sitemap.xml')->getContent();

        libxml_use_internal_errors(true);
        $xml = simplexml_load_string($content);

        $this->assertNotFalse($xml, 'sitemap.xml is not valid XML: ' . implode(', ', array_map(
            fn ($e) => $e->message,
            libxml_get_errors()
        )));
    }

    public function test_sitemap_is_cached(): void
    {
        Cache::flush();

        $this->get('/sitemap.xml');

        $this->assertTrue(Cache::has('sitemap'), 'Sitemap should be cached after first request');
    }
}
