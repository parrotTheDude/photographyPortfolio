<?php

namespace Tests\Feature;

use Tests\TestCase;

class PageRoutesTest extends TestCase
{
    /**
     * Core pages return 200.
     */
    public function test_home_page_loads(): void
    {
        $this->get('/')->assertStatus(200);
    }

    public function test_about_page_loads(): void
    {
        $this->get('/about')->assertStatus(200);
    }

    public function test_photos_page_loads(): void
    {
        $this->get('/photos')->assertStatus(200);
    }

    public function test_contact_page_loads(): void
    {
        $this->get('/contact')->assertStatus(200);
    }

    /**
     * Project pages return 200.
     */
    public function test_project_stitch_loads(): void
    {
        $this->get('/stitch')->assertStatus(200);
    }

    public function test_project_wholesome_harvest_loads(): void
    {
        $this->get('/wholesomeHarvest')->assertStatus(200);
    }

    public function test_project_w7_loads(): void
    {
        $this->get('/w7')->assertStatus(200);
    }

    public function test_project_marble_loads(): void
    {
        $this->get('/marble')->assertStatus(200);
    }

    public function test_project_label_loads(): void
    {
        $this->get('/label')->assertStatus(200);
    }

    public function test_project_stump_cross_caverns_loads(): void
    {
        $this->get('/stump-cross-caverns')->assertStatus(200);
    }

    public function test_project_doors_loads(): void
    {
        $this->get('/doors')->assertStatus(200);
    }

    /**
     * Photography collection pages return 200.
     */
    public function test_photos_wildlife_loads(): void
    {
        $this->get('/wildlife')->assertStatus(200);
    }

    public function test_photos_pets_loads(): void
    {
        $this->get('/pets')->assertStatus(200);
    }

    public function test_photos_motion_loads(): void
    {
        $this->get('/motion')->assertStatus(200);
    }

    /**
     * Unknown routes return 404.
     */
    public function test_unknown_route_returns_404(): void
    {
        $this->get('/this-page-does-not-exist')->assertStatus(404);
    }
}
