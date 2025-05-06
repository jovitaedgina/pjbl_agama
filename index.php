<?php include 'header.php'; ?>

<br><br>
<figure class="text-center">
  <blockquote class="blockquote">
    <h3>
      Fancy display heading
      <small class="text-body-secondary">With faded secondary text</small>
    </h3>
  </blockquote>
  <figcaption class="blockquote-footer">
    Someone famous in <cite title="Source Title">Source Title</cite>
  </figcaption>
</figure>
<br><br>

<!-- Card Article baru -->
<div class="container">
  <div class="card mb-3">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="..." class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<div class="container">
  <h3 class="text-left">Dakwah Hari Ini</h3>
  <br>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card">
        <img src="img1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Judul Artikel 1</h5>
          <p class="card-text">Konten artikel dakwah 1 yang menjelaskan isi penting dakwah hari ini.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="img2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Judul Artikel 2</h5>
          <p class="card-text">Konten artikel dakwah 2 sebagai lanjutan dari misi keislaman masa kini.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="img3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Judul Artikel 3</h5>
          <p class="card-text">Konten artikel dakwah 3 yang memuat nilai-nilai moral dalam kehidupan.</p>
        </div>
      </div>
    </div>
  </div>

 
  <!-- Button di bawah card -->
  <div class="d-flex justify-content-end mt-3">
    <a href="#" class="btn btn-underline">Baca Artikel Lainnya</a>
  </div>
</div>

<style>
  .btn-underline {
    text-decoration: underline; /* Menambahkan garis bawah */
    color: black; /* Warna teks hitam */
  }

  .btn-underline:hover {
    color: rgb(24, 146, 0); /* Warna hijau saat hover */
  }

  

<?php include 'footer.php'; ?>