function cekBilangan() {
    var x = parseFloat(document.getElementById("bilangan").value);

    if (isNaN(x)) {
        alert("Masukkan angka yang benar!");
        return;
    }

    if (x > 0) {
        alert(x + " Adalah Bilangan Positif");
    }
    else if (x < 0) {
        alert(x + " Adalah Bilangan Negatif");
    }
    else {
        alert("Angka yang Anda masukkan adalah Nol");
    }
}