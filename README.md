<br />
<div align="center">
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

Penting! install bahan dibawah ini:
* composer
* phpmyadmin (xampp,laragon)
* php-8+
* php-ext: mbstring & intl
* terminal/cmd (administrator/root)

### Installation

* Install Dependencies
  Jika terjadi error, hapus composer.lock terlebih dahulu
   ```sh
   composer install
   ```
* Migrate Database
  skip step ini jika sudah memiliki DB pupak
   ```sh
   php spark migrate
   ```
* Insert User Admin
   phpmyadmin -> DB:pupak -> TBL:admin -> MENU:SQL 
   copy paste sql dibawah ke text area SQLnya.
   username: admin
   password: admin
   ```sh
   INSERT INTO `admin`(`id_admin`, `nama_admin`, `username`, `password`) VALUES ('1','admin','admin','$2a$12$9itAdyuzRwG7eDW/UmLl6OV1qGEGGWG1Hj75ZW7oP7jzojjoPrjKS')
   ```
* Run App
   ```sh
   php spark serve
   ```

<p align="right">(<a href="#readme-top">Balik Ke atas</a>)</p>