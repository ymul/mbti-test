<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Cara Install

- Pastikan sudah terinstall composer pada PC anda, jika belum bisa kunjungi web <a href="https://getcomposer.org/" target="_blank">Dokumentasi Composer</a>
- Jika sudah ter-install GIT pada PC anda silahkan clone dengan command `git clone https://github.com/ymul/mbti-test.git [nama-folder]` pada console git bash atau aplikasi sourcetree / semacam nya.
- Jika anda tidak menggunakan GIT maka download versi ZIP, kemudian extract pada folder htdocs jika anda menggunakan XAMPP.
- Kemudian klik kanan pada Folder project tsb kemudian pilih opsi `Composer Install`, tunggu sampai selesai.
- Edit File .env sesuai kan `APP_URL=[virtual-domain] atau [localhost] ` `DB_DATABASE=[nama-database]` `DB_USERNAME=[username-db]` `DB_PASSWORD=[isi-pwd-user-jika-ada]`.
- Buat database dengan nama yang di setting pada file .env di atas `DB_DATABASE=[nama-database]`.
- Lalu buka command prompt / git bash, arahkah ke folder project tadi kemudian jalan kan command `php artisan migrate:refresh --seed`.
- Hore ! Installasi selesai.

Notes : 
- Username : admin@psikotest.dev
- Password : admin
