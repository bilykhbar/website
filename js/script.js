// Anda bisa menambahkan JavaScript kustom di sini.
// Contoh: Mengubah warna navbar saat scroll
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.querySelector('.navbar');

    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) { // Ubah angka 50 ini sesuai jarak scroll yang diinginkan
            navbar.classList.remove('bg-dark');
            navbar.classList.add('bg-primary', 'shadow'); // Contoh: Ganti ke warna primary dan tambahkan shadow
        } else {
            navbar.classList.remove('bg-primary', 'shadow');
            navbar.classList.add('bg-dark');
        }
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
});