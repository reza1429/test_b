<?php

namespace Tests\Feature;

use App\Models\Kendaraan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class KendaraanTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

     use RefreshDatabase;

     public function testGetStokKendaraan()
     {
         // Simulate data kendaraan
         Kendaraan::factory()->count(3)->create();
     
         // Make an HTTP GET request to the getStokKendaraan() endpoint
         $response = $this->get('/api/kendaraan/stok');
     
         // Ensure a 200 OK response
         $response->assertStatus(200);
     
         // Ensure the JSON response contains the kendaraan stock data
         $response->assertJsonCount(3, 'data');
     }

     public function testCreateKendaraan()
     {
         // Data kendaraan to be created
         $kendaraanData = [
             'tahun_keluaran' => 2022,
             'warna' => 'Merah',
             'harga' => 50000000,
             'mesin' => '150cc',
             'tipe_suspensi' => 'Upside Down',
             'tipe_transmisi' => 'Manual',
         ];
     
         // Make an HTTP POST request to the createKendaraan() endpoint
         $response = $this->post('/api/kendaraan', $kendaraanData);
     
         // Ensure a 201 Created response
         $response->assertStatus(201);
     
         // Ensure the JSON response contains the newly created kendaraan data
         $response->assertJsonFragment([
             'tahun_keluaran' => 2022,
             'warna' => 'Merah',
             'harga' => 50000000,
         ]);
     }     

    // public function test_example()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }
}
