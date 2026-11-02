function fn_ValForm() {
    var sMsg = "";
    var sNama = document.getElementById("nama").value;
    var sEmail = document.getElementById("email").value;
    var sUmur = document.getElementById("umur").value;
    var sKategori = document.getElementById("kategori").value;
    var iUmur = 0;
    var sInfo = "";
    var sPilihan = "";

    if (sNama == "") {
        sMsg += "\n* Anda belum mengisikan nama";
    }

    if (sEmail == "") {
        sMsg += "\n* Anda belum mengisikan email";
    } else {
        if (!/^[a-z0-9][a-z0-9_\.-]{0,}[a-z0-9]@[a-z0-9][a-z0-9_\.-]{0,}[a-z0-9][\.][a-z0-9]{2,4}$/.test(sEmail)) {
            sMsg += "\n* Email tidak valid, gunakan email valid yosef@gmail.com";
        }
    }

    if (sUmur == "") {
        sMsg += "\n* Anda belum mengisikan umur";
    } else {
        if (!/^[0-9]+$/.test(sUmur) || parseInt(sUmur, 10) < 15 || parseInt(sUmur, 10) > 60) {
            sMsg += "\n* Umur harus berupa angka dan berada di antara 15 sampai 60 tahun";
        }
    }

    if (sKategori == "") {
        sMsg += "\n* Anda belum memilih jenis acara";
    }

    if (sMsg != "") {
        alert("Peringatan:\n" + sMsg);
        return false;
    }

    iUmur = parseInt(sUmur, 10);

    if (iUmur <= 25) {
        sInfo = "Peserta Mahasiswa";
    } else {
        sInfo = "Peserta Umum";
    }

    switch (sKategori) {
        case "W":
            sPilihan = "Workshop";
            break;
        case "S":
            sPilihan = "Seminar";
            break;
        case "L":
            sPilihan = "Lomba Coding";
            break;
        default:
            sPilihan = "";
    }

    alert("Terima kasih " + sNama + " ! Anda terdaftar di acara " + sPilihan + " (" + sInfo + ").");
    return true;
}
