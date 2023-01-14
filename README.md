<br />
<div align="center">
  <a href="https://github.com/mohammadrafly/pupak-indonesia">
    <img src="./public/assets/images/Pupak indonesia.png" alt="Logo" width="80" height="80">
  </a>

<h3 align="center">Sistem Informasi Pupuk</h3>

  <p align="center">
    Gatau ya?
    <br />
  </p>
</div>

<!-- GETTING STARTED -->
## Getting Started

# PUPAK INDONESIA
Ikuti perintah berikut biar CI nya bisa lari

### Built With

* CI4
* JQuery

### Prerequisites

Penting! install bahan dibawah ini:
* composer
* a functional brain

### Installation

* Install Dependencies
   ```sh
   composer install
   ```
* Migrate Database
   ```sh
   php spark migrate
   ```
* Insert User Admin
   ```sh
   phpmyadmin -> DB:pupak -> TBL:admin -> MENU:SQL 
   copy paste sql dibawah ke text area SQLnya.
   INSERT INTO `admin`(`id_admin`, `nama_admin`, `username`, `password`) VALUES ('1','admin','admin','$2a$12$9itAdyuzRwG7eDW/UmLl6OV1qGEGGWG1Hj75ZW7oP7jzojjoPrjKS')
   ```
* Run App
   ```sh
   php spark serve
   ```

<p align="right">(<a href="#readme-top">Balik Ke atas</a>)</p>