<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Anggota</title>
    <link rel="stylesheet" href="css/style_form.css">
    <link rel="icon" href="https://ipmboyolali.com/uploads/cover_blog/lambang_ipm.jpg">
</head>
<body>
<div class="form">  
    <p class="judul" >FORM DATA ANGGOTA PW IPM KALTIM</p>
    <form action="tampil_data.php" method="POST">
        <table border = "0">
            <tr>
                <td>Nama</td>
                <td><input type="text"  name="Nama" maxlength="50" placeholder="Nama Anda"  required></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" id="date-picker" name="Tanggal Lahir" required ></td>       
            </tr>
            <tr>
                <td>Nomor HP</td>
                <td><input type="number"  name="Nomor HP" maxlength="50" placeholder="Nomor HP"  required></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td><input type="text"  name="Jabatan" maxlength="50" placeholder="Jabatan Sekarang"  required></td>
            </tr>
            <tr>
                <td>Asal Pimpinan Daerah</td>
                <td>
                <select class="choose" name="choose">
                    <option value="Samarinda">Samarinda</option>
                    <option value="Balikpapan">Balikpapan</option>
                    <option value="Penajam Paser Utara">Penajam Paser Utara</option>
                    <option value="Kutai Kertanegara">Kutai Kertanegara</option>
                    <option value="Berau">Berau</option>
                    <option value="Paser">Paser</option>
                    <option value="Bontang">Bontang</option>
                    <option value="Kutai Timur">Kutai Timur</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Pengkaderan Terakhir</td>
                <td>
                <select class="choose" name="choose">
                    <option value="TM1">TM1</option>
                    <option value="TM2">TM2</option>
                    <option value="TM3">TM3</option>
                    <option value="TM Utama">TM Utama</option>
                </select>
                </td>
            </tr>    
            <tr>
                <td colspan="2">
                    <button type="submit" name="simpan"><i class="fa fa-check-circle"></i>  Simpan Data</button>
                    <a href="index.html" class="kembali"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
			    </td>
            </tr>   
    </table>
    </form>
</body>
</html>