<br />
<div id="readme-top" align="center">
  <a href="https://github.com/mohammadrafly/pupak-indonesia">
    <img src="images/logo-project.png" alt="Logo" width="120" height="80">
  </a>

<h3 align="center">Sistem Informasi Pupuk</h3>

  <p align="center">
    Sistem informasi pupuk yang digunakan untuk mencari spesifikasi pupuk ataupun obat.
    <br />
  </p>
</div>

<!-- GETTING STARTED -->
## Getting Started

## PUPAK INDONESIA
Ikuti langkah-langkah dibawah ini:

### Built With

* CI4
* JQuery

### Prerequisites
\
Penting! install bahan dibawah ini:
* composer
* phpmyadmin (xampp,laragon)
* php-8+
* php-ext: mbstring & intl
* terminal/cmd (administrator/root)

### Installation

* Install Dependencies |
  Jika terjadi error, hapus composer.lock terlebih dahulu
   ```sh
   composer install
   ```
* Migrate Database or Refresh
   ```sh
   php spark migrate
   ```
   ```sh
   php spark migrate:refresh
   ```
* Seeding Database:table Admin
   ```sh
   php spark db:seed Admin
   ```
   username: admin
   password: admin
* Run App
   ```sh
   php spark serve
   ```

<p align="right">(<a href="#readme-top">Balik Ke atas</a>)</p>