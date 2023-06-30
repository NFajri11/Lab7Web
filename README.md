# Lab7Web

### Nurul Fajri - 312110506

### TI.21.C.1

## PHP FRAMEWORK (CODEIGNITER)

## LANGKAH LANGKAH PRAKTIKUM

Buka XAMPP,pada bagian Apache klik Config (PHP.ini)'<P>'
![Gambar1](Screenshot/1.XAMPP.png)
Pada bagian extention, hilangkan tanda ; (titik koma) pada ekstensi yang akan diaktifkan.'<P>'
Kemudian simpan kembali filenya dan restart Apache web server.'<P>'
![Gambar2](Screenshot/2.png)

•Unduh CODEIGNITER 4 '<P>'
•Extrak file zip Codeigniter ke direktori htdocs/.'<P>'
• Ubah nama direktory framework-4.x.xx menjadi ci4. '<P>'
• Buka browser dengan alamat http://localhost/lab11_ci/ci4/public/ '<P>'
![Gambar3](Screenshot/3.png)

Buka CMD lalu arahkan lokasi direktori sesuai dengan direktori kerja project yang dibuat 
Perintah untuk memanggil CLI CODEIGNITER adalah'<P>'
php spark'<P>'
![Gambar4](Screenshot/4.png)

Mengaktifkan Mode Debugging '<P>'
Codeigniter 4 menyediakan fitur debugging untuk memudahkan developer untuk mengetahui pesan
error apabila terjadi kesalahan dalam membuat kode program.'<P>'
Secara default fitur ini belum aktif. Ketika terjadi error pada aplikasi akan ditampilkan pesan
kesalahan seperti berikut.'<P>'
![Gambar5](Screenshot/5.png)

Ubah nama file env menjadi .env kemudian buka file tersebut dan ubah nilai variabel CI_ENVIRINMENT menjadi development.'<P>'
![Gambar6](Screenshot/6.png)

Untuk mengetahui route yang ditambahkan sudah benar, buka CLI (php spark routes)'<P>'
![Gambar7](Screenshot/7.png)

Selanjutnya adalah membuat Controller Page. Buat file baru dengan nama page.php pada direktori
Controller kemudian isi kodenya seperti berikut.'<P>'
![Gambar8](Screenshot/8.png)
Ini adalah hasilnya'<P>'
![Gambar9](Screenshot/9.png)

Secara default fitur autoroute pada Codeiginiter sudah aktif.'<P>'
Untuk mengubah status autoroute dapat mengubah nilai variabelnya. '<P>'
Untuk menonaktifkan ubah nilai true menjadi false.'<P>'
{$routes->setAutoRoute(true);} '<P>'
Tambahkan method baru pada Controller Page seperti berikut. '<P>'
public function tos()'<P>'
{'<P>'
echo "ini halaman Term of Services";'<P>'
}'<P>'
![Gambar10](Screenshot/10.png)

Selanjutnya adalam membuat view untuk tampilan web agar lebih menarik. Buat file baru dengan
nama about.php pada direktori view (app/view/about.php)'<P>'
Ubah method about pada class Controller Page menjadi seperti berikut:'<P>'
![Gambar11](Screenshot/11.png)
Ini adalah Hasilnya
![Gambar12](Screenshot/12.png)

Buat file css pada direktori public dengan nama style.css'<P>'
![Gambar13](Screenshot/13.png)

Kemudian buat folder template pada direktori view kemudian buat file header.php dan footer.php
File app/view/template/header.php'<P>'
![Gambar14](Screenshot/14H.png)
![Gambar15](Screenshot/15F.png)

Selanjutnya refresh tampilan pada alamat http://localhost:8080/about '<P>'
Ini adalah hasilnya '<P>'
![Gambar16](Screenshot/16.png)

