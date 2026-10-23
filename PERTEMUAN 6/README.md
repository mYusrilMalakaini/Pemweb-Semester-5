# TUGAS PENDAHULUAN MODUL 6
## PEMROGRAMAN WEB: JAVASCRIPT DAN JQUERY

---

### 1. Pengertian JavaScript dan Kegunaannya
JavaScript adalah bahasa pemrograman *high-level*, *scripting*, dan bersifat *dynamically typed* yang berjalan di sisi klien (*client-side*). Kegunaannya adalah untuk memberikan interaktivitas dinamis pada halaman web, memproses logika data, memvalidasi form, serta melakukan manipulasi struktur HTML melalui *Document Object Model* (DOM).

### 2. Pengertian jQuery dan Kegunaannya
jQuery adalah pustaka (*library*) JavaScript open-source yang dibuat untuk menyederhanakan penulisan skrip JavaScript murni. Kegunaannya adalah untuk mempermudah manipulasi elemen DOM, penanganan interaksi/event pengguna, pembuatan efek visual, serta pengiriman data asinkronus (AJAX) dengan sintaksis yang ringkas.

### 3. Perbedaan JavaScript dan jQuery
* **Jenis:** JavaScript adalah bahasa pemrograman web utama, sedangkan jQuery adalah pustaka (*library*) yang dibangun menggunakan JavaScript.
* **Sintaksis:** JavaScript memiliki sintaksis yang lebih terperinci (*verbose*), sementara jQuery memiliki sintaksis yang sangat singkat (*Write Less, Do More*).
* **Ketergantungan:** JavaScript dapat langsung berjalan di browser tanpa file pendukung, sedangkan jQuery membutuhkan impor pustaka eksternal (via CDN atau file lokal).
* **Manipulasi DOM:** JavaScript menggunakan fungsi seperti `document.getElementById()`, sedangkan jQuery menggunakan selector ringkas seperti `$('#id')`.

---

### 4. Implementasi Soal 1
* **File Terkait:** [soal1.html](tp-modul-6/soalTP/soal1.html) & [style1.css](tp-modu-6/soalTP/style1.css)
* **Penjelasan:** Program pada `soal1.html` dikembangkan menggunakan fungsi *native* JavaScript (`prompt`) untuk meminta masukan NIM dan Nama dari pengguna saat halaman web pertama kali dimuat. Hasil masukan tersebut kemudian secara otomatis dimasukkan ke dalam elemen input HTML yang berstatus `readonly` melalui manipulasi DOM (`document.getElementById().value`).

### 5. Implementasi Soal 2
* **File Terkait:** [soal2.html](tp-modul-6/soalTP/soal2.html) & [style2.css](tp-modul-6/soalTP/style2.css)
* **Penjelasan:** Program pada `soal2.html` memanfaatkan pustaka jQuery yang diimpor via CDN. Pustaka ini digunakan untuk menangani *event* klik tombol (`#tombolUngu`, `#tombolBiru`, `#tombolHijau`) guna mengubah warna latar belakang elemen `#kotakWarna` via `.css()`, serta mengatur visibilitas elemen menggunakan metode `.hide()` untuk tombol `#sembunyikanKotak` dan `.show()` untuk tombol `#tampilkanKotak`.