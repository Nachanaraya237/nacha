<!--header menu atas-->
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <nav>
      <ul>
        <li><a href="#">Beranda</a></li>
        <li><a href="#">Kontak</a></li>
        <li><a href="#">A - Z Index</a></li>
        <li><a href="#">Login Siswa</a></li>
        <li><a href="#">Login Staff</a></li>
      </ul>
    </nav>
  </div>
</div>  
<!--###-->

<?php  
//Koneksi ke database, pastikan $conn diinisialisasi sebelumnya
 $conn = mysqli_connect("localhost", "root", "", "db-smk64");

 if (!$conn){
  die("Koneksi database gagal:" . mysqli_connect_error());
 }

 //Query untuk mengambil header dari tabel 
 $queryjudul = "SELECT * FROM tb_namasmk";
 $resultjudul = mysqli_query($conn, $queryjudul);

 ?>

<!--logo dan slogan-->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <div id="logo" class="fl_left">

    <?php
    $queryjudul = "SELECT * FROM tb_namasmk";
 $resultjudul = mysqli_query($conn, $queryjudul);

 //loop untuk menampilkan nama SMK
 while ($rowjudul = mysqli_fetch_assoc($resultjudul)) {
  echo "<h1><a href='" .$rowjudul['url']. "'>". $rowjudul['namasmk']."</a></h1>";
 }
 ?>

      <p>SUKSES ( Smart, Unggul, Kreatif, Semangat, Empati, dan Sopan)</p>
    </div>
    <div class="fl_right">
      <form class="clear" method="post" action="#">
        <fieldset>
          <legend>Search:</legend>
          <input type="text" value="" placeholder="Search Here">
          <button class="fa fa-search" type="submit" title="Search"><em>Search</em></button>
        </fieldset>
      </form>
    </div>
  </header>
</div>  
<!--###-->

<!--Navbar-->
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
    
      <ul class="clear">
        <li class="active"><a href="../test1/index.php">Beranda</a></li>
        <li class="active"><a href="../test1/profil.php">Profil</a></li>
		 <li><a href="../test1/visi&misi.php">Visi dan Misi</a></li>
		  <li><a href="../test1/informasisekolah.php">Informasi Sekolah</a></li>
		   <li><a href="../test1/gurudantu.php">Guru dan TU</a></li>
        <li><a class="drop" href="#">E-PERPUSTAKAAN</a>
          <ul>
            <li><a href="#">Buku Pelajaran</a></li>
            <li><a href="#">Buku Fiksi</a></li>
            <li><a href="#">Cerpen</a></li>
            <li><a href="#">Cerita Rakyat</a></li>
            <li><a href="#">Pojok Kisah</a></li>
            <li><a href="#">Tepian Sajak</a></li>
          </ul>
        </li>
		        <li><a class="drop" href="#">KATEGORI</a>
          <ul>
            <li><a href="#">PKL</a></li>
            <li><a href="#">Kopi 64</a></li>
          </ul>
        </li>
		 <li><a class="drop" href="#">DIREKTORI</a>
          <ul>
            <li><a href="#">Direktor Alumni</a></li>
            <li><a href="#">Pendaftaran Alumni</a></li>
            <li><a href="#">Direktori Peserta Didik</a></li>
          </ul>
        </li>
		<li><a class="drop" href="#">GALERI</a>
          <ul>
            <li><a href="../test1/galeri.php">Galeri Foto</a>
            </li>
            <li><a href="#">Galeri Video</a></li>
          </ul>
        </li>
        <li><a href="#">Hubungi Kami</a></li>
      </ul>
    </nav>
  </div>
</div>
<!--###-->

