<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Muhammad Amirul',
            'username' => 'amirul',
            'email' => 'amirul@pnl.com',
            'password' => bcrypt('11111')
        ]);

        // User::create([
        //     'name' => 'Muhammad Alif',
        //     'email' => 'Alif@pnl.com',
        //     'password' => 'Alif'
        // ]);

        // User::create([
        //     'name' => 'Muhammad Sultan',
        //     'email' => 'Sultan@pnl.com',
        //     'password' => 'Sultan'
        // ]);

        // Post::create(['title' => 'Apakah Web Desain itu',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'apakah-web-desain-itu',
        //     'excerpt' => 'Web desain adalah sebuah bentuk grafis ataupun animasi digital dalam membuat suatu halaman web. Tentu saja web desain yang dibuat juga harus ...',
        //     'body' => '<p>Web desain adalah sebuah bentuk grafis dalam membuat suatu halaman web. Banyak orang yang masih belum tahu menahu tentang pengertian web desain. Bahkan beberapa diantara mereka masih melihat web desain hanya sebuah bentuk online jurnalisme saja. Seiring berkembangnya teknologi, internet memiliki nilai-nilai penting dari sebuah media yang oleh karena itu, bermunculan website tiap detiknya di seluruh dunia.</p><p>Disinilah web desain berperan. Untuk menciptakan website yang bagus, kita perlu mengerti bagaimana cara membuat web desain. Web desain terdiri dari grafis, ataupun animasi digital dan bisa berbentuk apa saja yang dapat mendukung atau memperindah website anda. Tentu saja web desain juga harus user friendly. Karena anda tentu tidak ingin pengguna dipusingkan dengan desain yang rumit dan tidak tahu dimana harus mencari informasinya.</p><p>Membuat web desain pada prinsipnya hampir sama dengan membangun sebuah rumah Anda sendiri. Jika Anda tertarik untuk memiliki website profesional yang didesain dengan tampilan menarik untuk perusahaan Anda, silahkan hubungi Web Architect Web Design Company Jakarta, Indonesia dan team kami akan datang untuk mempresentasikan ide kami kepada Anda.</p>'
        // ]);

        // Post::create(['title' => 'Apa Itu Programming',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'slug' => 'apa-itu-programming',
        //     'excerpt' => 'programming adalah suatu proses atau kegiatan menulis dan menguji (pemrograman) agar program dapat dibuat, dan hasilnya sesuai apa ...',
        //     'body' => '<p>Apa itu programming? Seringkali pertanyaan itu muncul dikalangan para mahasiswa baru yang mengambil jurusan komputer atau teknik informatika. Coding, pemrograman, website, aplikasi, dan sistem informasi menjadi perbincangan utama terkait programming.</p><p>Programming adalah sebuah proses seseorang menulis, memperbaiki, menguji, dan memelihara kode-kode dalam membuat sebuah program komputer. Kode-kode tersebut ditulis dalam bahasa pemrograman yang tidak hanya ada satu macam saja.</p><p>Anda bisa membuat sebuah program dengan bahasa pemrograman yang mungkin berbeda dengan bahasa milik teman Anda. Tergantung bahasa pemrograman apa yang Anda kuasai dalam melakukan program sistem. Dengan Anda memahami dan mampu mengaplikasikan langsung bahasa ke dalam program.</p>'
        // ]);

        // Post::create(['title' => 'Liburan di Jogja',
        //     'category_id' => 3,
        //     'user_id' => 3,
        //     'slug' => 'liburan-di-jogja',
        //     'excerpt' => 'Dalam liburan sekolah tahun ini, kami sekeluarga memastikan untuk buat berlibur di Jogja. Jogja termasuk salah satu lokasi dimana tempat secara ...',
        //     'body' => '<p>Liburan sekolah tahun yang lalu saya tidak pernah pergi kemana-mana. Dalam liburan sekolah tahun ini, kami sekeluarga memastikan untuk buat berlibur di Jogja. Jogja termasuk salah satu lokasi dimana tempat secara geografis letaknya juga berbatasan dengan provinsi Jawa Tengah. Jogja yang pemimpin pemerintahannya adalah Sultan tersebut termasuk suatu lokasi yang dikunjungi oleh para pengunjung, yaitu lokasi wisata serta beberapa kuliner khas Jogja. </p><p>Pada tahun 2016 kami sekeluarga berlibur di Jogja selama 2 hari 2 malam. 2 hari itu kami mendatangi banyak lokasi. Dimulai dari daerah ujung Utara Jogja, kami mendatangi objek wisata Gunung Merapi, suasananya hawa, sejuk dan dingin, menyambangi lokasi museum Ulen Sentalu, hingga ke ujung selatan Jogja dimana berupa kawasan Pantai Parangtritis, Candi Borobudur dan Candi Prambanan, serta Pasar Seni Gabusan. Sebagai urusan kuliner, kami pun mengetes banyak jenis kuliner khas dari Jogja. Diawali dari pecel depan Pasar Beringharjo, beraneka ragam gudeg di Wijilan, bakmi jowo yang berada di kawasan Alun-Alun Utara. </p><p>Banyak kenangan dan pengalaman yang sangat dahsyat yang kami peroleh selama kami berada di daerah Jogja. Refleshing untuk menghilangkan sebuah rasa stres pada diri kita sekembalinya kami dari Jogja. Bermacam rupa oleh-oleh bakal kita bagikan family, tetangga kita, kawan-kawan serta sahabat sejati. Dimulai dari batik, kaos-kaos Jogja, bakpia, hingga aneka makanan tradisional dimana menjadi sebuah oleh-oleh khas Jogja yang sudah kami borong atau belanja semua serta di kemas ditata di dalam sebuah bagasi mobil.</p>'
        // ]);

        User::factory(5)->create();
        Post::factory(20)->create();

        Category::create([
            'name' => 'Web Desain',
            'slug' => 'web-desain'
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        
    }
}
