<h1>Cara menjalankan proyek</h1>
<p><i>catatan : proyek ini berkaitan dengan sufi-one-module</i></p>
<hr>
<ol>
    <li>Clone repository ini</li>
    <li>Buka command prompt dan jalankan <b>"mysqld --console"</b></li>
    <li>Buka mysql (sqlyog) dan eksekusi query <b>"create database sufi_one_smile_api"</b> </li>
    <li>Buka repository yang telah di clone dengan menggunakan visual studio code</li>
    <li>Jalankan perintah berikut pada terminal</li>
    <ul>
        <li>Jalankan <b>"composer install"</b> pada terminal</li>
        <li>Jalankan <b>"php artisan migrate"</b> pada terminal</li>
        <li>Jalankan <b>"php artisan serve"</b> pada terminal</li>
    </ul>
    <li>Buka postman</li>
    <li>Buat request baru dengan method <b>"POST"<b> dan link <b>"http://localhost:8000/api/register"<b></li>
    <li>Masukkan data yang diperlukan untuk melakukan register di bagian <i>Body >> form-data</i>
    <br>Berikut data yang diperlukan untuk melakukan register:
    </li>
    <ul>
        <li>name</li>
        <li>enail</li>
        <li>password</li>
        <li>password_confirmation</li>
    </ul>
    <li>Send req</li>
    <li>Coba lakukan login dan test profile pada mobile</li>
    <li>Selesai..</li>
</ol>