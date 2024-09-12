<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Luas dan Volume Bangun Datar dan Ruang</title>
    <link rel="stylesheet" href="css/styles.css">
    <script>
        // Menampilkan form input sesuai jenis bangun
        function showForm() {
            const shape = document.getElementById('shape').value;
            const formInputs = document.querySelectorAll('.form-input');
            
            formInputs.forEach(input => input.style.display = 'none');
            
            if (shape === 'persegi') {
                document.getElementById('persegi').style.display = 'block';
            } else if (shape === 'segitiga') {
                document.getElementById('segitiga').style.display = 'block';
            } else if (shape === 'lingkaran') {
                document.getElementById('lingkaran').style.display = 'block';
            } else if (shape === 'kubus') {
                document.getElementById('kubus').style.display = 'block';
            } else if (shape === 'limas') {
                document.getElementById('limas').style.display = 'block';
            } else if (shape === 'tabung') {
                document.getElementById('tabung').style.display = 'block';
            }
        }
    </script>
</head>
<body>
    <h1>Selamat Datang</h1>
    <form action="calculate.php" method="POST">
        <fieldset>
            <legend>Biodata Siswa</legend>
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required><br>
            <label for="school">Nama Sekolah:</label>
            <input type="text" id="school" name="school" required><br>
            <label for="age">Usia:</label>
            <input type="number" id="age" name="age" required><br>
            <label for="address">Alamat:</label>
            <input type="text" id="address" name="address" required><br>
            <label for="phone">Nomor Telepon:</label>
            <input type="text" id="phone" name="phone" required><br>
        </fieldset>

        <fieldset>
            <legend>Pilih Penghitungan</legend>
            <label for="type">Jenis Penghitungan:</label>
            <select name="type" id="type" required onchange="showForm()">
                <option value="luas">Luas Bangun Datar</option>
                <option value="volume">Volume Bangun Ruang</option>
            </select><br>

            <label for="shape">Bangun yang Dipilih:</label>
            <select name="shape" id="shape" required onchange="showForm()">
                <option value="persegi">Persegi</option>
                <option value="segitiga">Segitiga</option>
                <option value="lingkaran">Lingkaran</option>
                <option value="kubus">Kubus</option>
                <option value="limas">Limas</option>
                <option value="tabung">Tabung</option>
            </select><br>
        </fieldset>

        <!-- Form input yang akan ditampilkan berdasarkan bangun -->
        <div id="persegi" class="form-input" style="display: none;">
            <label for="side">Sisi Persegi:</label>
            <input type="number" id="side" name="side"><br>
        </div>

        <div id="segitiga" class="form-input" style="display: none;">
            <label for="base">Alas Segitiga:</label>
            <input type="number" id="base" name="base"><br>
            <label for="height">Tinggi Segitiga:</label>
            <input type="number" id="height" name="height"><br>
        </div>

        <div id="lingkaran" class="form-input" style="display: none;">
            <label for="radius">Radius Lingkaran:</label>
            <input type="number" id="radius" name="radius"><br>
        </div>

        <div id="kubus" class="form-input" style="display: none;">
            <label for="side_kubus">Sisi Kubus:</label>
            <input type="number" id="side_kubus" name="side_kubus"><br>
        </div>

        <div id="limas" class="form-input" style="display: none;">
            <label for="base_limas">Alas Limas:</label>
            <input type="number" id="base_limas" name="base_limas"><br>
            <label for="height_limas">Tinggi Limas:</label>
            <input type="number" id="height_limas" name="height_limas"><br>
        </div>

        <div id="tabung" class="form-input" style="display: none;">
            <label for="radius_tabung">Radius Tabung:</label>
            <input type="number" id="radius_tabung" name="radius_tabung"><br>
            <label for="height_tabung">Tinggi Tabung:</label>
            <input type="number" id="height_tabung" name="height_tabung"><br>
        </div>

        <button type="submit">Hitung</button>
    </form>

    <a href="dashboard.php">Riwayat</a>
</body>
</html>
