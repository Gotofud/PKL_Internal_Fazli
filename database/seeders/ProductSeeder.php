<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'nama' => 'Handphone Xiaomi',
            'slug' => 'handphone-xiaomi',
            'deskripsi' => 'Handphone Xiaomi Murah dan tahan lama',
            'harga' => 3000000,
            'stok' => 30,
            'gambar' => 'xiaomi.png',
            'kategori_id' => 1,
        ]);
        Product::create([
            'nama' => 'Jersey Manchester United 1998/1999',
            'slug' => 'jersey-manchester-united-1998-1999',
            'deskripsi' => 'Jersey Legend David Bechkam di musim 1998/1999',
            'harga' => 250000,
            'stok' => 30,
            'gambar' => 'mu.jpg',
            'kategori_id' => 2,
        ]);
        Product::create([
            'nama' => 'Lipstick Wardah',
            'slug' => 'lipstick-wardah',
            'deskripsi' => 'lipstick merah dari Wardah',
            'harga' => 45000,
            'stok' => 30,
            'gambar' => 'wardah.jpg',
            'kategori_id' => 3,
        ]);
        Product::create([
            'nama' => 'Sepatu Nike Air Max',
            'slug' => 'sepatu-nike-air-max',
            'deskripsi' => 'Sepatu olahraga Nike Air Max yang nyaman',
            'harga' => 1200000,
            'stok' => 30,
            'gambar' => 'nike.jpg',
            'kategori_id' => 4,
        ]);
        Product::create([
            'nama' => 'Set Peralatan Dapur',
            'slug' => 'set-peralatan-dapur',
            'deskripsi' => 'Set peralatan dapur lengkap untuk memasak',
            'harga' => 500000,
            'stok' => 30,
            'gambar' => 'dapur.jpg',
            'kategori_id' => 5,
        ]);
        Product::create([
            'nama' => 'Laptop ASUS ROG',
            'slug' => 'laptop-asus-rog',
            'deskripsi' => 'Laptop gaming ASUS ROG dengan performa tinggi',
            'harga' => 15000000,
            'stok' => 30,
            'gambar' => 'asus.jpg',
            'kategori_id' => 1,
        ]);
        Product::create([
            'nama' => 'Kaos Orang Hitam',
            'slug' => 'kaos-orang-hitam',
            'deskripsi' => 'Kaos polos berkualitas tinggi, nyaman dipakai sehari-hari',
            'harga' => 75000,
            'stok' => 30,
            'gambar' => 'kaos.jpg',
            'kategori_id' => 2,
        ]);      
        Product::create([
            'nama' => 'Dompet Pria Kulit Hitam',
            'slug' => 'dompet-pria-kulit-hitam',
            'deskripsi' => 'Dompet Pria Kulit hitam asli Magelang',
            'harga' => 20000,
            'stok' => 12,
            'gambar' => 'dompethitam.jpg',
            'kategori_id' => 2,
        ]);
        Product::create([
            'nama' => 'Kipas Angin Mini',
            'slug' => 'kipas-angin-mini',
            'deskripsi' => 'Kipas angin mini portable, cocok untuk dibawa bepergian',
            'harga' => 150000,
            'stok' => 30,
            'gambar' => 'kipas.jpg',
            'kategori_id' => 1,
        ]);
        
    }
}
