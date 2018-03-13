<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>LowonganKerja.co.id | Lupa Password</title>  
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

    <input id="tab1" type="radio" name="tabs" checked>
    <label for="tab1" style="width:98%">Lupa Password</label>
    
    <section id="content1" style="margin:auto; width:50%">
        <form style="padding-top:20px;" action="index.html">
            <input placeholder="Email" name="email" type="text"; style="width:90%;">
            <br><br>
            <input type="submit" class="btn_simpan" value="Reset Password" style="width:90%;" onClick="pesan()">
        </form>
    </section>	
   </main>
<footer>
<center>
	© 2017 LowonganKerja.co.id | Hak cipta dilindungi.
</center>
</footer>
</body>
<script>
	function pesan() {
		alert("Password baru sudah dikirim ke email anda. \nSilahkan cek email anda !")
	}
</script>
</html>
