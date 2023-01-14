<?= $this->extend('layout/landing') ?>

<?= $this->section('content') ?>
    <!-- Hero Section -->
    <section id="hero">
      <div class="container h-100">
        <div class="row">
          <div class="col-md-6 hero-tagline">
            <br />
            <br />
            <p><span class="fw-bold"></span></p>
            <h1><?= $content['nama_pupuk'] ?></h1>
            <h4>
              <span class="fw-bold">Jenis: </span> <?= $content['jenis_pupuk'] ?>
            </h4>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc facilisis est ac purus molestie iaculis. Proin porta sollicitudin lorem a molestie. Nam fringilla eleifend arcu id pulvinar. Aliquam risus ante, condimentum id orci sagittis, gravida rutrum urna. Curabitur vel aliquam odio, ut ultricies ipsum. Nulla dictum viverra nunc, eu consectetur tellus molestie quis. Nam et felis porttitor, vehicula leo a, porttitor erat. Nullam ornare augue urna, ut consequat turpis imperdiet non. Nam at nulla orci. Maecenas vel mi non elit venenatis pulvinar in in sapien. Duis sollicitudin tortor id viverra consectetur. Integer sed mollis nisi. Sed fringilla tellus augue, nec rhoncus augue vestibulum et.
            Aliquam feugiat dignissim quam, vitae accumsan ante semper sed. Ut ornare luctus neque, vel volutpat dui tempus a. Nam ullamcorper libero id velit aliquam dapibus. Sed sit amet lacus ligula. Proin enim metus, varius vel massa ut, dignissim suscipit lectus. Nullam gravida, massa vitae sollicitudin dictum, nisi metus rutrum augue, vel tempor ex libero sit amet erat. Quisque vitae ipsum vel lacus mattis imperdiet vitae ac eros. Sed varius lacus at est semper viverra. Nulla ut tellus vel dui vulputate congue. Nam sagittis porttitor massa, ut lobortis lorem faucibus nec. In egestas nisl a rhoncus imperdiet.   
            </p>
          </div>
          <div class="col-md-6" style="margin-top: 100px;">
            <img
                src="<?= base_url('pupukobat/'. $content['picture']) ?>"
                alt=""
            />
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Section End-->
<?= $this->endSection() ?>