function showDetails(button) {
    // Mengambil data terkait dari atribut data-* tombol
    var judul = button.dataset.judul;
    var deskripsi = button.dataset.deskripsi;
    var durasi = button.dataset.durasi;

    // Mengonversi karakter baris baru menjadi tag <br>
    deskripsi = deskripsi.replace(/\n/g, '<br>');
    // Membangun konten HTML modal
    var modalContent = `
    <div align="left">
        <strong>Judul:</strong> ${judul}
    </div>
    <div>
        <strong>Deskripsi:</strong>
        <p>${deskripsi}</p>
    </div>
    <div align = "left">
        <strong>Durasi:</strong> ${durasi} <strong >Jam</strong>
    </div>
    `;

    Swal.fire({
        title: 'Detail Kursus',
        html: modalContent,
        confirmButtonText: 'OK',
    });
}
