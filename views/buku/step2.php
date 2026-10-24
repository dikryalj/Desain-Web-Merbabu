<div class="container mt-5">
  <h2>Formulir Pendaki Gunung - Langkah 2</h2>
  <form method="POST" action="index.php?page=simpan">
    <div class="mb-3">
      <label>Tanggal Pendakian</label>
      <input type="date" class="form-control" name="tanggal" required>
    </div>
    <div class="mb-3">
      <label>Jalur Pendakian</label>
      <select name="jalur" class="form-control">
        <option value="Jalur A">Jalur A</option>
        <option value="Jalur B">Jalur B</option>
        <option value="Jalur C">Jalur C</option>
      </select>
    </div>
    <button type="submit" class="btn btn-success">Selesai</button>
  </form>
</div>