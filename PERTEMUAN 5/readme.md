PERTEMUAN 5

1. Pengertian Bootstrap

• Jawaban: Bootstrap adalah framework (kerangka kerja) CSS open-source yang digunakan untuk mempermudah dan mempercepat pengembangan desain front-end sebuah website.
• Kegunaan: Menyediakan komponen siap pakai (seperti tombol, form, navbar) sehingga developer tidak perlu menulis CSS dari nol, serta memastikan tampilan website otomatis responsif di berbagai ukuran perangkat.

2. Memasang Bootstrap

Beberapa cara untuk mengimpor atau menggunakan Bootstrap pada proyek:
• Menggunakan CDN (Content Delivery Network): Memanggil link langsung file CSS dan JS Bootstrap yang di-hosting di server internet ke dalam tag <head> dan sebelum penutup </body>.
• Mengunduh Secara Lokal (Compiled CSS & JS): Mendownload berkas mentah Bootstrap dari situs resminya, lalu menyimpannya dan memanggilnya di dalam direktori folder proyek lokal.
• Menggunakan Package Manager: Menginstal melalui terminal menggunakan alat pengelola package seperti npm install bootstrap, yarn, atau composer.

3. Grid dan Breakpoint

• Sistem Grid: Sistem pengaturan tata letak halaman berbasis Flexbox yang membagi lebar layar menjadi 12 kolom horizontal. Developer dapat mengatur lebar elemen dengan menggabungkan satuan kolom tersebut menggunakan class seperti .row dan .col-*.
• Breakpoint: Titik batas ukuran lebar layar (dalam satuan piksel) yang ditentukan oleh Bootstrap (seperti sm, md, lg, xl). Kegunaannya adalah sebagai pemicu (trigger) kapan tata letak web harus berubah atau menyesuaikan diri agar tetap rapi saat dibuka di perangkat yang berbeda (responsif).

4. Class Bootstrap

Lima contoh class Bootstrap beserta kegunaannya:
• container: Berfungsi sebagai wadah pembungkus utama untuk menyelaraskan dan meletakkan konten di tengah halaman secara rapi.
• d-flex: Berfungsi untuk mengubah model tata letak elemen menjadi mode Flexbox secara instan.
• form-control: Berfungsi untuk menata gaya kotak input formulir agar tampilannya modern, responsif, dan memenuhi lebar wadahnya.
• shadow-sm: Berfungsi untuk memberikan efek bayangan tipis pada elemen agar terlihat estetis dan melayang.
• fw-bold: Berfungsi untuk mengubah ketebalan cetak teks menjadi tebal (bold).

5. Gambar Responsif

• Jawaban: Cara agar foto atau gambar otomatis responsif mengikuti ukuran layar perangkat adalah dengan menambahkan class img-fluid pada tag <img>. Class ini bekerja secara otomatis menerapkan aturan CSS max-width: 100%; dan height: auto; pada gambar tersebut.
