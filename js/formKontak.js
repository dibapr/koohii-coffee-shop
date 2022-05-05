function kirimPesan() {
    showMsg = document.getElementById("pesan");
    modalBody = document.querySelector(".modal-body").innerHTML = showMsg.value;
}

function validasiPesan() {
    //Kondisi gagal
    if(form.nama.value == "") {
        document.getElementById("errorNama").style.display = "block";
        document.getElementById("errorNama").innerHTML = "Anda belum memasukkan nama.";
        document.querySelector(".modal-body").innerHTML = "<p class='merah'>Terdapat kesalahan pada pengisian form, harap periksa kembali.<p>";
    } else if(form.email.value == "") {
        document.getElementById("errorEmail").style.display = "block";
        document.getElementById("errorEmail").innerHTML = "Anda belum memasukkan email.";
        document.querySelector(".modal-body").innerHTML = "<p class='merah'>Terdapat kesalahan pada pengisian form, harap periksa kembali.<p>";
    } else if(form.alamat.value == "") {
        document.getElementById("errorAlamat").style.display = "block";
        document.getElementById("errorAlamat").innerHTML = "Anda belum memasukkan alamat.";
        document.querySelector(".modal-body").innerHTML = "<p class='merah'>Terdapat kesalahan pada pengisian form, harap periksa kembali.<p>";
    } else if(form.jeniskelamin.value == "") {
        document.getElementById("errorJK").style.display = "block";
        document.getElementById("errorJK").innerHTML = "Anda belum memilih jenis kelamin.";
        document.querySelector(".modal-body").innerHTML = "<p class='merah'>Terdapat kesalahan pada pengisian form, harap periksa kembali.<p>";
    } else if(form.pesan.value == "") {
        document.getElementById("errorPesan").style.display = "block";
        document.getElementById("errorPesan").innerHTML = "Anda belum memasukkan pesan.";
        document.querySelector(".modal-body").innerHTML = "<p class='merah'>Terdapat kesalahan pada pengisian form, harap periksa kembali.<p>";
    } else {
        alert("Terimakasih telah mengirimkan pesan anda.");
        document.getElementById("form").value.remove();
    }

     //Kondisi sukses
    if(form.nama.value != "") {
        document.getElementById("errorNama").style.display = "none";
    }
    if(form.email.value != "") {
        document.getElementById("errorEmail").style.display = "none";
    }
    if(form.alamat.value != "") {
        document.getElementById("errorAlamat").style.display = "none";
    }
    if(form.jeniskelamin.value != "") {
        document.getElementById("errorJK").style.display = "none";
    }
    if(form.pesan.value != "") {
        document.getElementById("errorPesan").style.display = "none";
    }
}
