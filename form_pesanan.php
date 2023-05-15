<?php require_once "atas.php" ?>
<form style="margin-bottom: 50px;">
  <label for="nama">Nama Lengkap:</label>
  <input type="text" id="nama" name="nama" required>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>

  <label for="produk">Produk:</label>
  <select id="produk" name="produk" required>
    <option value="">-- Pilih Produk --</option>
    <option value="Beras">Beras</option>
    <option value="Minyak Goreng">Minyak Goreng</option>
    <option value="Mie Goreng">Mie Goreng</option>
    <option value="Gula">Gula</option>
  </select>

  <label for="jumlah">Jumlah:</label>
  <input type="number" id="jumlah" name="jumlah" min="1" max="10" required>

  <label for="catatan">Catatan:</label>
  <textarea id="catatan" name="catatan" rows="4"></textarea>

  <button type="submit" onclick="location.href='thanks.php'">Pesan Sekarang</button>
</form>
<?php require_once "bawah.php" ?>