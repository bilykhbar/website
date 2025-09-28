// Seleksi elemen tombol (atau elemen lain) dengan ID 'show'
const btnShow = $("#show"); 

// Seleksi elemen tombol (atau elemen lain) dengan ID 'hide'
const btnHide = $("#hide"); 

// Seleksi semua elemen <div>
const divHide = $("div"); 

// Event handler untuk tombol 'show'
btnShow.click(function() {
    // Menampilkan elemen div
    divHide.show(); 
});

// Event handler untuk tombol 'hide'
btnHide.click(function() {
    // Menyembunyikan elemen div dengan efek 'slow'
    divHide.hide("slow"); 
});