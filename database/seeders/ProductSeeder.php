<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kategori 1: Elektronik
        Product::create([
            'nama' => 'Handphone Xiaomi',
            'slug' => 'handphone-xiaomi',
            'deskripsi' => 'Handphone Xiaomi murah dan tahan lama',
            'harga' => 3000000,
            'stok' => 30,
            'gambar' => 'products/xiaomi.jpg',
            'kategori_id' => 1,
        ]);
        Product::create([
            'nama' => 'Laptop ASUS ROG',
            'slug' => 'laptop-asus-rog',
            'deskripsi' => 'Laptop gaming ASUS ROG dengan performa tinggi',
            'harga' => 15000000,
            'stok' => 30,
            'gambar' => 'products/asus.jpg',
            'kategori_id' => 1,
        ]);
        Product::create([
            'nama' => 'Kipas Angin Mini',
            'slug' => 'kipas-angin-mini',
            'deskripsi' => 'Kipas angin mini portable, cocok untuk dibawa bepergian',
            'harga' => 150000,
            'stok' => 30,
            'gambar' => 'products/kipas.jpg',
            'kategori_id' => 1,
        ]);
        Product::create([
            'nama' => 'Kamera DSLR Canon',
            'slug' => 'kamera-dslr-canon',
            'deskripsi' => 'Kamera DSLR Canon dengan kualitas gambar tinggi',
            'harga' => 8000000,
            'stok' => 30,
            'gambar' => 'products/canon.jpg',
            'kategori_id' => 1,
        ]);
        Product::create([
            'nama' => 'Smart TV Samsung',
            'slug' => 'smart-tv-samsung',
            'deskripsi' => 'Smart TV Samsung 50 inch 4K UHD',
            'harga' => 7000000,
            'stok' => 20,
            'gambar' => 'products/tv.jpg',
            'kategori_id' => 1,
        ]);
        Product::create([
            'nama' => 'Speaker Bluetooth JBL',
            'slug' => 'speaker-bluetooth-jbl',
            'deskripsi' => 'Speaker Bluetooth JBL suara mantap',
            'harga' => 900000,
            'stok' => 25,
            'gambar' => 'products/jbl.jpg',
            'kategori_id' => 1,
        ]);
        Product::create([
            'nama' => 'Powerbank Anker',
            'slug' => 'powerbank-anker',
            'deskripsi' => 'Powerbank Anker kapasitas besar',
            'harga' => 350000,
            'stok' => 40,
            'gambar' => 'products/powerbank.jpg',
            'kategori_id' => 1,
        ]);
        Product::create([
            'nama' => 'Headphone Sony',
            'slug' => 'headphone-sony',
            'deskripsi' => 'Headphone Sony noise cancelling',
            'harga' => 1200000,
            'stok' => 15,
            'gambar' => 'products/sony.jpg',
            'kategori_id' => 1,
        ]);
        Product::create([
            'nama' => 'Mouse Logitech',
            'slug' => 'mouse-logitech',
            'deskripsi' => 'Mouse wireless Logitech',
            'harga' => 250000,
            'stok' => 50,
            'gambar' => 'products/mouse.jpg',
            'kategori_id' => 1,
        ]);
        Product::create([
            'nama' => 'Keyboard Mechanical',
            'slug' => 'keyboard-mechanical',
            'deskripsi' => 'Keyboard mechanical RGB',
            'harga' => 600000,
            'stok' => 30,
            'gambar' => 'products/keyboard.jpg',
            'kategori_id' => 1,
        ]);

        // Kategori 2: Fashion
        Product::create([
            'nama' => 'Jersey Manchester United 1998/1999',
            'slug' => 'jersey-manchester-united-1998-1999',
            'deskripsi' => 'Jersey Legend David Beckham di musim 1998/1999',
            'harga' => 250000,
            'stok' => 30,
            'gambar' => 'products/mu.jpg',
            'kategori_id' => 2,
        ]);
        Product::create([
            'nama' => 'Kaos Orang Hitam',
            'slug' => 'kaos-orang-hitam',
            'deskripsi' => 'Kaos polos berkualitas tinggi, nyaman dipakai sehari-hari',
            'harga' => 75000,
            'stok' => 30,
            'gambar' => 'products/kaos.jpg',
            'kategori_id' => 2,
        ]);
        Product::create([
            'nama' => 'Dompet Pria Kulit Hitam',
            'slug' => 'dompet-pria-kulit-hitam',
            'deskripsi' => 'Dompet Pria Kulit hitam asli Magelang',
            'harga' => 20000,
            'stok' => 12,
            'gambar' => 'products/dompethitam.jpg',
            'kategori_id' => 2,
        ]);
        Product::create([
            'nama' => 'Sepatu Sneakers Putih',
            'slug' => 'sepatu-sneakers-putih',
            'deskripsi' => 'Sepatu sneakers putih kekinian',
            'harga' => 300000,
            'stok' => 20,
            'gambar' => 'products/sneakers.jpg',
            'kategori_id' => 2,
        ]);
        Product::create([
            'nama' => 'Jaket Hoodie Polos',
            'slug' => 'jaket-hoodie-polos',
            'deskripsi' => 'Jaket hoodie polos bahan fleece',
            'harga' => 120000,
            'stok' => 25,
            'gambar' => 'products/hoodie.jpg',
            'kategori_id' => 2,
        ]);
        Product::create([
            'nama' => 'Celana Jeans Slim Fit',
            'slug' => 'celana-jeans-slim-fit',
            'deskripsi' => 'Celana jeans slim fit biru',
            'harga' => 180000,
            'stok' => 18,
            'gambar' => 'products/jeans.jpg',
            'kategori_id' => 2,
        ]);
        Product::create([
            'nama' => 'Topi Baseball',
            'slug' => 'topi-baseball',
            'deskripsi' => 'Topi baseball hitam',
            'harga' => 50000,
            'stok' => 40,
            'gambar' => 'products/topi.jpg',
            'kategori_id' => 2,
        ]);
        Product::create([
            'nama' => 'Kemeja Flanel',
            'slug' => 'kemeja-flanel',
            'deskripsi' => 'Kemeja flanel lengan panjang',
            'harga' => 95000,
            'stok' => 22,
            'gambar' => 'products/flanel.jpg',
            'kategori_id' => 2,
        ]);
        Product::create([
            'nama' => 'Sandal Pria',
            'slug' => 'sandal-pria',
            'deskripsi' => 'Sandal pria casual',
            'harga' => 40000,
            'stok' => 35,
            'gambar' => 'products/sandal.jpg',
            'kategori_id' => 2,
        ]);
        Product::create([
            'nama' => 'Tas Selempang',
            'slug' => 'tas-selempang',
            'deskripsi' => 'Tas selempang pria wanita',
            'harga' => 60000,
            'stok' => 28,
            'gambar' => 'products/tas.jpg',
            'kategori_id' => 2,
        ]);

        // Kategori 3: Kecantikan
        Product::create([
            'nama' => 'Lipstick Wardah',
            'slug' => 'lipstick-wardah',
            'deskripsi' => 'Lipstick merah dari Wardah',
            'harga' => 45000,
            'stok' => 30,
            'gambar' => 'products/wardah.jpg',
            'kategori_id' => 3,
        ]);
        Product::create([
            'nama' => 'Botol Minum Stainless Steel',
            'slug' => 'botol-minum-stainless-steel',
            'deskripsi' => 'Botol minum stainless steel tahan lama dan ramah lingkungan',
            'harga' => 100000,
            'stok' => 30,
            'gambar' => 'products/botol.jpg',
            'kategori_id' => 3,
        ]);
        Product::create([
            'nama' => 'Bedak Tabur Maybelline',
            'slug' => 'bedak-tabur-maybelline',
            'deskripsi' => 'Bedak tabur Maybelline untuk wajah cerah',
            'harga' => 60000,
            'stok' => 25,
            'gambar' => 'products/bedak.jpg',
            'kategori_id' => 3,
        ]);
        Product::create([
            'nama' => 'Maskara Maybelline',
            'slug' => 'maskara-maybelline',
            'deskripsi' => 'Maskara waterproof Maybelline',
            'harga' => 70000,
            'stok' => 20,
            'gambar' => 'products/maskara.jpg',
            'kategori_id' => 3,
        ]);
        Product::create([
            'nama' => 'Serum Wajah Scarlett',
            'slug' => 'serum-wajah-scarlett',
            'deskripsi' => 'Serum wajah Scarlett untuk kulit glowing',
            'harga' => 90000,
            'stok' => 18,
            'gambar' => 'products/serum.jpg',
            'kategori_id' => 3,
        ]);
        Product::create([
            'nama' => 'Facial Wash Emina',
            'slug' => 'facial-wash-emina',
            'deskripsi' => 'Facial wash Emina membersihkan wajah',
            'harga' => 35000,
            'stok' => 40,
            'gambar' => 'products/facialwash.jpg',
            'kategori_id' => 3,
        ]);
        Product::create([
            'nama' => 'Pelembab Viva',
            'slug' => 'pelembab-viva',
            'deskripsi' => 'Pelembab wajah Viva',
            'harga' => 25000,
            'stok' => 50,
            'gambar' => 'products/pelembab.jpg',
            'kategori_id' => 3,
        ]);
        Product::create([
            'nama' => 'Parfum Zara',
            'slug' => 'parfum-zara',
            'deskripsi' => 'Parfum Zara aroma segar',
            'harga' => 120000,
            'stok' => 15,
            'gambar' => 'products/parfum.jpg',
            'kategori_id' => 3,
        ]);
        Product::create([
            'nama' => 'Handbody Citra',
            'slug' => 'handbody-citra',
            'deskripsi' => 'Handbody Citra melembabkan kulit',
            'harga' => 30000,
            'stok' => 35,
            'gambar' => 'products/handbody.jpg',
            'kategori_id' => 3,
        ]);
        Product::create([
            'nama' => 'Sabun Mandi Lux',
            'slug' => 'sabun-mandi-lux',
            'deskripsi' => 'Sabun mandi Lux harum dan lembut',
            'harga' => 15000,
            'stok' => 60,
            'gambar' => 'products/sabun.jpg',
            'kategori_id' => 3,
        ]);

        // Kategori 4: Olahraga
        Product::create([
            'nama' => 'Sepatu Nike Air Max',
            'slug' => 'sepatu-nike-air-max',
            'deskripsi' => 'Sepatu olahraga Nike Air Max yang nyaman',
            'harga' => 1200000,
            'stok' => 30,
            'gambar' => 'products/nike.jpg',
            'kategori_id' => 4,
        ]);
        Product::create([
            'nama' => 'Jam Tangan Casio',
            'slug' => 'jam-tangan-casio',
            'deskripsi' => 'Jam tangan Casio dengan desain klasik dan tahan lama',
            'harga' => 300000,
            'stok' => 30,
            'gambar' => 'products/casio.jpg',
            'kategori_id' => 4,
        ]);
        Product::create([
            'nama' => 'Bola Sepak Adidas',
            'slug' => 'bola-sepak-adidas',
            'deskripsi' => 'Bola sepak Adidas original',
            'harga' => 250000,
            'stok' => 20,
            'gambar' => 'products/bola.jpg',
            'kategori_id' => 4,
        ]);
        Product::create([
            'nama' => 'Raket Badminton Yonex',
            'slug' => 'raket-badminton-yonex',
            'deskripsi' => 'Raket badminton Yonex ringan',
            'harga' => 400000,
            'stok' => 15,
            'gambar' => 'products/raket.jpg',
            'kategori_id' => 4,
        ]);
        Product::create([
            'nama' => 'Matras Yoga',
            'slug' => 'matras-yoga',
            'deskripsi' => 'Matras yoga anti slip',
            'harga' => 120000,
            'stok' => 25,
            'gambar' => 'products/matras.jpg',
            'kategori_id' => 4,
        ]);
        Product::create([
            'nama' => 'Jersey Bola Nike',
            'slug' => 'jersey-bola-nike',
            'deskripsi' => 'Jersey bola Nike original',
            'harga' => 180000,
            'stok' => 18,
            'gambar' => 'products/jerseynike.jpg',
            'kategori_id' => 4,
        ]);
        Product::create([
            'nama' => 'Sepeda Polygon',
            'slug' => 'sepeda-polygon',
            'deskripsi' => 'Sepeda Polygon MTB',
            'harga' => 2500000,
            'stok' => 10,
            'gambar' => 'products/sepeda.jpg',
            'kategori_id' => 4,
        ]);
        Product::create([
            'nama' => 'Sarung Tangan Gym',
            'slug' => 'sarung-tangan-gym',
            'deskripsi' => 'Sarung tangan gym anti slip',
            'harga' => 50000,
            'stok' => 35,
            'gambar' => 'products/sarungtangan.jpg',
            'kategori_id' => 4,
        ]);
        Product::create([
            'nama' => 'Topi Lari Adidas',
            'slug' => 'topi-lari-adidas',
            'deskripsi' => 'Topi lari Adidas ringan',
            'harga' => 60000,
            'stok' => 28,
            'gambar' => 'products/topilari.jpg',
            'kategori_id' => 4,
        ]);
        Product::create([
            'nama' => 'Tas Olahraga Puma',
            'slug' => 'tas-olahraga-puma',
            'deskripsi' => 'Tas olahraga Puma besar',
            'harga' => 80000,
            'stok' => 22,
            'gambar' => 'products/tasolahraga.jpg',
            'kategori_id' => 4,
        ]);

        // Kategori 5: Rumah Tangga
        Product::create([
            'nama' => 'Set Peralatan Dapur',
            'slug' => 'set-peralatan-dapur',
            'deskripsi' => 'Set peralatan dapur lengkap untuk memasak',
            'harga' => 500000,
            'stok' => 30,
            'gambar' => 'products/dapur.jpg',
            'kategori_id' => 5,
        ]);
        Product::create([
            'nama' => 'Buku Masak Sehat',
            'slug' => 'buku-masak-sehat',
            'deskripsi' => 'Buku masak sehat dengan berbagai resep lezat',
            'harga' => 80000,
            'stok' => 30,
            'gambar' => 'products/buku.jpg',
            'kategori_id' => 5,
        ]);
        Product::create([
            'nama' => 'Dispenser Air',
            'slug' => 'dispenser-air',
            'deskripsi' => 'Dispenser air panas dan dingin',
            'harga' => 400000,
            'stok' => 18,
            'gambar' => 'products/dispenser.jpg',
            'kategori_id' => 5,
        ]);
        Product::create([
            'nama' => 'Sapu Lantai',
            'slug' => 'sapu-lantai',
            'deskripsi' => 'Sapu lantai serat plastik',
            'harga' => 25000,
            'stok' => 40,
            'gambar' => 'products/sapu.jpg',
            'kategori_id' => 5,
        ]);
        Product::create([
            'nama' => 'Ember Plastik',
            'slug' => 'ember-plastik',
            'deskripsi' => 'Ember plastik 20 liter',
            'harga' => 30000,
            'stok' => 35,
            'gambar' => 'products/ember.jpg',
            'kategori_id' => 5,
        ]);
        Product::create([
            'nama' => 'Setrika Philips',
            'slug' => 'setrika-philips',
            'deskripsi' => 'Setrika Philips anti lengket',
            'harga' => 250000,
            'stok' => 20,
            'gambar' => 'products/setrika.jpg',
            'kategori_id' => 5,
        ]);
        Product::create([
            'nama' => 'Gelas Kaca',
            'slug' => 'gelas-kaca',
            'deskripsi' => 'Gelas kaca bening isi 6',
            'harga' => 45000,
            'stok' => 50,
            'gambar' => 'products/gelas.jpg',
            'kategori_id' => 5,
        ]);
        Product::create([
            'nama' => 'Panci Stainless',
            'slug' => 'panci-stainless',
            'deskripsi' => 'Panci stainless steel 24cm',
            'harga' => 120000,
            'stok' => 25,
            'gambar' => 'products/panci.jpg',
            'kategori_id' => 5,
        ]);
        Product::create([
            'nama' => 'Wajan Anti Lengket',
            'slug' => 'wajan-anti-lengket',
            'deskripsi' => 'Wajan anti lengket diameter 28cm',
            'harga' => 90000,
            'stok' => 30,
            'gambar' => 'products/wajan.jpg',
            'kategori_id' => 5,
        ]);
        Product::create([
            'nama' => 'Tempat Sampah',
            'slug' => 'tempat-sampah',
            'deskripsi' => 'Tempat sampah plastik 15L',
            'harga' => 35000,
            'stok' => 40,
            'gambar' => 'products/sampah.jpg',
            'kategori_id' => 5,
        ]);
    }
}
