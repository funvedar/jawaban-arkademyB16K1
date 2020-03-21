function triangle(nilai) {
    let hasil = "\n"
    let data = String(angka)
    let angka = /[0-9]/g;
    for(let i = 1; i <= nilai; i++) {
        for(let j = 1; j <= i; j++) {
            hasil += "#"
        }
        hasil += "\n"
    }
    if (data.match(angka)) {
        return hasil
    } else {
        hasil += "Parameter harus angka dan positif!"
        return hasil
    }
}