<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Tambah Kegiatan</title>
<style>
    :root{
        --bg:#F4F7F5; --panel:#ffffff; --accent:#0C3B2E; --muted:#6b6b6b;
        --btn:#1e7a46; --btn-hover:#2dbb6a;
    }
    *{box-sizing:border-box}
    body{
        margin:0;font-family:Poppins,Segoe UI,Arial;background:var(--bg);color:#222;
        padding:28px;
    }
    .wrap{
        max-width:900px;margin:20px auto;background:var(--panel);border-radius:12px;
        box-shadow:0 8px 30px rgba(0,0,0,0.06);overflow:hidden;
        display:grid;grid-template-columns:1fr 360px;gap:20px;padding:24px;
    }
    h2{margin:0 0 14px;color:var(--accent)}
    label{display:block;margin-top:10px;color:var(--muted);font-weight:600;font-size:14px}
    input[type="text"], input[type="date"], input[type="time"], select, textarea{
        width:100%;padding:10px;border:1px solid #e6e6e6;border-radius:8px;margin-top:6px;
        font-size:14px;background:#fbfbfb;
    }
    textarea{min-height:120px;resize:vertical}
    .actions{margin-top:16px}
    .btn{
        display:inline-block;padding:10px 16px;border-radius:10px;background:var(--btn);
        color:#fff;text-decoration:none;border:0;cursor:pointer;font-weight:600;
    }
    .btn:hover{background:var(--btn-hover);transform:translateY(-2px)}
    .panel-right{
        background:#fbfffb;border-radius:10px;padding:16px;border:1px solid #eef6ee;
        display:flex;flex-direction:column;align-items:center;justify-content:flex-start;
    }
    .preview{
        width:100%;height:220px;border-radius:8px;border:1px dashed #dfeedd;
        display:flex;align-items:center;justify-content:center;color:#97a99a;
        background:linear-gradient(180deg,#fbfff9,#f2f9f2);
    }
    .small{font-size:13px;color:var(--muted);margin-top:8px;text-align:center}
    .hint{font-size:13px;color:#888;margin-top:6px}
    @media(max-width:880px){
        .wrap{grid-template-columns:1fr; padding:18px}
        .panel-right{order:2}
    }
</style>
</head>
<body>

<!-- FORM DIMULAI DI SINI, MEMBUNGKUS SEMUA ELEMENT -->
<form action="kegiatan_tambah_proses.php" method="post" enctype="multipart/form-data">

<div class="wrap">

    <!-- LEFT: FORM -->
    <div>
        <h2>Tambah Kegiatan</h2>

        <label>Nama Kegiatan</label>
        <input type="text" name="nama_kegiatan" required>

        <label>Tanggal Mulai</label>
        <input type="date" name="tanggal_mulai" required>

        <label>Tanggal Selesai</label>
        <input type="date" name="tanggal_selesai" required>

        <label>Waktu</label>
        <input type="time" name="waktu" required>

        <label>Penanggung Jawab</label>
        <input type="text" name="penanggung_jawab" required>

        <label>Status</label>
        <select name="status" required>
            <option value="Terjadwal">Terjadwal</option>
            <option value="Selesai">Selesai</option>
            <option value="Dibatalkan">Dibatalkan</option>
        </select>

        <label>Deskripsi (opsional)</label>
        <textarea name="deskripsi" placeholder="Ringkasan kegiatan..."></textarea>

        <div class="actions">
            <button class="btn" type="submit">Simpan Kegiatan</button>
            <a href="kegiatan_desa.php" style="margin-left:10px;color:#0C3B2E;text-decoration:none;font-weight:600">Batal</a>
        </div>
    </div>

    <!-- RIGHT: UPLOAD & PREVIEW -->
    <div class="panel-right">
        <div style="width:100%;display:flex;justify-content:space-between;align-items:center">
            <strong style="color:var(--accent)">Upload Foto Kegiatan</strong>
            <span style="font-size:13px;color:#7b7b7b">Maks 2 MB</span>
        </div>

        <div class="preview" id="previewBox">
            <span id="previewText">Pratinjau foto akan tampil di sini</span>
            <img id="previewImg" src="" style="display:none;width:100%;height:100%;object-fit:cover;border-radius:8px">
        </div>

        <div style="width:100%;margin-top:12px">
            <input type="file" id="fotoInput" name="foto_kegiatan" accept="image/*">
            <div class="hint">Pilih gambar (jpg/png). Foto akan disimpan ke folder <code>/uploads/</code></div>
            <div class="small">Tip: gunakan foto lanskap (horizontal) supaya pratinjau tidak terpotong.</div>
        </div>
    </div>

</div><!-- /wrap -->

</form>
<!-- FORM DITUTUP DI SINI -->

<script>
const fileInput = document.getElementById('fotoInput');
const previewImg = document.getElementById('previewImg');
const previewText = document.getElementById('previewText');

fileInput.addEventListener('change', function(){
    const f = this.files[0];
    if(!f){
        previewImg.style.display='none';
        previewText.style.display='block';
        return;
    }
    if(f.size > 2 * 1024 * 1024){
        alert('File terlalu besar (max 2MB)');
        this.value='';
        return;
    }
    const url = URL.createObjectURL(f);
    previewImg.src = url;
    previewImg.style.display='block';
    previewText.style.display='none';
});
</script>

</body>
</html>
