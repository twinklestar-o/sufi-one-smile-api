<h1>Cara menjalankan proyek</h1>
<p><i>catatan : proyek ini berkaitan dengan sufi-one-module</i></p>
<hr>
<ol>
    <li>Clone repository ini</li>
    <li>Buka command prompt dan jalankan <b>"mysqld --console"</b></li>
    <li>
        Buka mysql (sqlyog) dan eksekusi query <b>"create database sufi_one_api"</b> <br>
        <i>catatan : jika tidak bisa, pastikan juga di file .env apakah nama databasenya sudah sesuai atau belum. Sesuaikan dengan yang ada di .env</i>
    </li>
    <li>Buka repository yang telah di clone dengan menggunakan visual studio code</li>
    <li>Jalankan perintah berikut pada terminal</li>
    <ul>
        <li>Jalankan <b>"composer install"</b> pada terminal</li>
        <li>
            Jalankan <b>"php artisan migrate"</b> pada terminal <br>
            <i>Harap pastikan bahwa proses migrate telah berhasil dan tabel sudah berhasil dibuat di database (bisa dicek langsung di sqlyog) </i>
        </li>
        <li>Jalankan <b>"php artisan serve"</b> pada terminal</li>
    </ul>
    <li>Coba lakukan register dan login dengan akun yang sama di mobile</li>
    <li>Selesai..</li>
</ol>
