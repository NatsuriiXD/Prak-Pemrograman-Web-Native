function hitung() {
    let a = document.getElementById("angka1").value;
    let b = document.getElementById("angka2").value;
    let op = document.getElementById("operator").value;

    if (a === "" || b === "") {
        alert("Isi kedua angka terlebih dahulu!");
        return;
    }

    a = parseFloat(a);
    b = parseFloat(b);
    let hasil = 0;

    if (op === "+") hasil = a + b;
    else if (op === "-") hasil = a - b;
    else if (op === "*") hasil = a * b;

    // tampilkan popup hasil
    alert("Hasil: " + a + " " + op + " " + b + " = " + hasil);
}