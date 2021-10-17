function changeColor(value) {
    var theme = document.getElementsByClassName("theme")

    if (value == "black") {
        for (let i = 0; i < theme.length; i++) {
            theme[i].style.color = 'white'
        }
        document.body.style.backgroundColor = value
    } else {
        for (let i = 0; i < theme.length; i++) {
            theme[i].style.color = 'black'
        }
        document.body.style.backgroundColor = value
    }
}

function changeLanguage(value) {
    var bahasa = document.getElementById("bahasa")

    if (value == "C") {
        bahasa.innerHTML = "Dibuat untuk memprogram sistem dan jaringan komputer namun bahasa ini juga sering digunakan dalam mengembangkan software aplikasi."
    } else if (value == "java") {
        bahasa.innerHTML = "Java adalah bahasa pemrograman yang dapat dijalankan di berbagai komputer termasuk telepon genggam."
    } else if (value == "python") {
        bahasa.innerHTML = "Python adalah bahasa pemrograman dinamis yang mendukung pemrograman berorientasi obyek."
    } else if (value == "html") {
        bahasa.innerHTML = "HyperText Markup Language (HTML) adalah sebuah bahasa markup yang digunakan untuk membuat sebuah halaman web dan menampilkan berbagai informasi di dalam sebuah browser Internet"
    } else if (value == "SQL") {
        bahasa.innerHTML = "SQL (Structured Query Language) adalah sebuah bahasa yang dipergunakan untuk mengakses data dalam basis data relasional. "
    }
}

function factorial() {
    var angka = document.getElementById("angka").value
    var hasil = angka
    console.log(angka)

    for (let i = hasil - 1; i > 0; i--) {
        hasil *= i
    }

    var factorial = document.getElementById("factorial")
    factorial.innerHTML = `The factorial of ${angka} is ${hasil}`
}