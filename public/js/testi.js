const carousel = document.querySelector(".carousel");
const arrowBtns = document.querySelectorAll(".wrapper i");
const firstCardWidth = carousel.querySelector(".card").offsetWidth;

// Variabel untuk memantau drag
let isDragging = false, startX, startScrollLeft;

// Fungsi untuk scroll otomatis ketika tombol kiri atau kanan diklik
arrowBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        // Scroll dengan mulus ke kiri atau kanan
        carousel.scrollLeft += btn.id === "left" ? -firstCardWidth : firstCardWidth;
    });
});

// Fungsi untuk memulai drag
const dragStart = (e) => {
    isDragging = true;
    carousel.classList.add("dragging");
    startX = e.pageX;
    startScrollLeft = carousel.scrollLeft;
};

// Fungsi untuk saat dragging
const dragging = (e) => {
    if (!isDragging) return; // jika dragging tidak aktif, berhenti
    const moveX = e.pageX - startX;  // Hitung pergerakan horizontal
    carousel.scrollLeft = startScrollLeft - moveX; // Perbarui scroll
};

// Fungsi untuk menghentikan dragging
const dragStop = () => {
    isDragging = false;
    carousel.classList.remove("dragging");
};

// Event listeners untuk dragging
carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);

// Fungsi untuk memeriksa dan memperbarui scroll saat mencapai ujung carousel
carousel.addEventListener('scroll', () => {
    const maxScrollLeft = carousel.scrollWidth - carousel.clientWidth;

    // Jika sudah diujung kanan, jangan scroll lebih lanjut
    if (carousel.scrollLeft >= maxScrollLeft) {
        carousel.scrollLeft = maxScrollLeft;  // Tetap diujung kanan
    }
    
    // Jika sudah diujung kiri, jangan scroll lebih lanjut
    if (carousel.scrollLeft <= 0) {
        carousel.scrollLeft = 0;  // Tetap diujung kiri
    }
});
