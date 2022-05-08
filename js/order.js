function bayar() {
    const gambar = document.getElementById("gambar");
    const nama = document.getElementById("nama");
    const menu = document.getElementById("menu");
    const ukuran = document.getElementById("ukuran");
    const jumlah = document.getElementById("jumlah");
    const harga = document.getElementById("harga");
    const bayar = document.getElementById("bayar");
    const title = document.querySelector(".modal-title");
    const body = document.querySelector(".modal-body");
    const notif = document.querySelector(".notif");

    if(gambar && nama && menu && ukuran && jumlah) {
        alert("Terimakasih telah melakukan pemesanan.");
        gambar.style.display = "none";
        nama.remove();
        menu.remove();
        ukuran.remove();
        jumlah.remove();
        harga.remove();
        bayar.remove();
        title.innerHTML = "Pembayaran Sukses";
        body.innerHTML = "Terimakasih telah memesan kopi di Koohii Coffee Shop";
        notif.innerHTML = "<div class='alert alert-warning alert-dismissible fade show' role='alert'><strong>Terimakasih!</strong> Pesanan anda akan dibuat, kami akan memanggil nama anda ketika pesanan sudah siap.<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>"
    } else {
        title.innerHTML = "Pembayaran Gagal"
        body.innerHTML = "<p class='merah'>Mohon lengkapi pesanan anda</p>";
    }
}