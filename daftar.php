<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>LowonganKerja.co.id | Daftar</title>  
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">  
  <link rel="stylesheet" href="css/buttons.css">
  <link rel="stylesheet" href="css/tab.css">
</head>

<body>
  <header style="border-bottom:4px solid #4985e5;">
    <div class="container">
      <h1 class="logo" style="padding-left:30px"><a href="index.html">lowongankerja.co.id</a></h1>
    </div>
  </header>
  
  <main>

    <h3 style="font-weight:normal">Daftar untuk mencari pekerjaan atau memasang iklan lowongan kerja</h3>
    
    <input id="tab1" type="radio" name="tabs" checked>
    <label for="tab1" style="width:43%">Pencari Kerja</label>
    
    <input id="tab2" type="radio" name="tabs">
    <label for="tab2" style="width:43%">Perusahaan</label>
    
    <section id="content1">
        <form style="padding-top:20px;" action="pencari_kerja/pk_profil.html">
            <input placeholder="Nama Lengkap" name="nama" type="text"; style="width:90%;">
            <br><br>
            <input placeholder="Email" name="email" type="text"; style="width:90%;">
            <br><br>
            <input placeholder="Kata sandi" name="pswd" type="password"; style="width:90%;">
            <br><br>
            <input type="submit" class="btn_simpan" value="Simpan" style="width:90%;">
        </form>
    </section>
    
    <section id="content2">
		<form style="padding-top:20px;" action="perusahaan/p_home.html">
        	<input placeholder="Nama Perusahaan" name="usaha_nama" type="text"; style="width:90%;">
            <br><br>
            <input placeholder="Telepon" name="usaha_telp" type="text"; style="width:90%;">
            <br><br>
            <select title="Kota" class="styled-select" style="width:90%;">
            	<option value="0" disabled selected>Kota</option>
            	<option value="bks">Bekasi</option>
                <option value="bgr">Bogor</option>
                <option value="dpk">Depok</option>
                <option value="jkt">Jakarta</option>
                <option value="tgr">Tanggerang</option>
            </select>
            <br><br>
            <input placeholder="Nama Lengkap" name="usaha_nama_kontak" type="text"; style="width:90%;">
            <br><br>
            <input placeholder="Email" name="email" type="text"; style="width:90%;">
            <br><br>
            <input placeholder="Kata sandi" name="pswd" type="password"; style="width:90%;">
            <br><br>
            <input type="submit" class="btn_simpan" value="Simpan" style="width:90%;">
        </form>
    </section>
   </main>
<footer>
<center>
	© 2017 LowonganKerja.co.id | Hak cipta dilindungi.
</center>
</footer>
</body>
</html>
