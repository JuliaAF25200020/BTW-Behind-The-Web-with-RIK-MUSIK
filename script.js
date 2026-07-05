
const waNumber = "628565024030";
       

let currentLang = localStorage.getItem("language") || "id";

function applyLanguage() {

    // Translate all elements
    document.querySelectorAll("[data-en]").forEach(el => {
        el.innerText = el.getAttribute(`data-${currentLang}`);
    });

    // Search placeholder
    const searchInput = document.getElementById("searchInput");
    if (searchInput) {
        searchInput.placeholder =
            currentLang === "id"
                ? "Cari alat musik..."
                : "Search instruments...";
    }

    // Hero text
    const heroH1 = document.getElementById("heroText");
    const heroH1as = document.getElementById("heroText-as");
    const heroH1eg = document.getElementById("heroText-eg");
    const heroH1ag = document.getElementById("heroText-ag");

    if (currentLang === "en") {
        if (heroH1) heroH1.innerHTML = 'Expert in <br><span style="color:#ff9f43;">Musical</span><br>Instruments';
        if (heroH1as) heroH1as.innerHTML = 'Complete <br><span style="color:#ff9f43;">Your</span><br>Instrument';
        if (heroH1eg) heroH1eg.innerHTML = 'Plug In, <br><span style="color:#ff9f43;">Turn Out,</span><br>Rock Out!';
        if (heroH1ag) heroH1ag.innerHTML = 'Acoustic <br><span style="color:#ff9f43;">Vibes</span><br>Only';
    } else {
        if (heroH1) heroH1.innerHTML = 'Ahli dalam <br><span style="color:#ff9f43;">Instrumen</span><br>Musik';
        if (heroH1as) heroH1as.innerHTML = 'Lengkapi <br><span style="color:#ff9f43;">Instrumen</span><br>Anda';
        if (heroH1eg) heroH1eg.innerHTML = 'Colokkan, <br><span style="color:#ff9f43;">Mainlah,</span><br>Bergoyanglah';
        if (heroH1ag) heroH1ag.innerHTML = 'Akustik <br><span style="color:#ff9f43;">Vibes</span><br>Aja';
    }

    // Contact form placeholders
    const namaInput = document.getElementById("nama");
    const pesanInput = document.getElementById("pesan");

    if (namaInput) {
        namaInput.placeholder =
            currentLang === "id" ? "Nama" : "Name";
    }

    if (pesanInput) {
        pesanInput.placeholder =
            currentLang === "id" ? "Pesan" : "Message";
    }
}

function toggleLanguage() {
    currentLang = currentLang === "id" ? "en" : "id";

    localStorage.setItem("language", currentLang);

    applyLanguage();
}

document.addEventListener("DOMContentLoaded", () => {
    applyLanguage();
});
        // --- SEARCH AKTIF ---
    const searchInput = document.getElementById("searchInput");

if (searchInput) {

    searchInput.addEventListener("input", function () {

        const keyword = this.value.toLowerCase();

        document.querySelectorAll(".product-card").forEach(card => {

            const name = card.querySelector("h4").textContent.toLowerCase();
            const match = name.includes(keyword);

            const col = card.closest(".col-md-3");

            if (col) {
                col.style.display = match ? "" : "none";
            } else {
                card.style.display = match ? "" : "none";
            }

        });

    });

}

        function pesanWA(p) {
            window.open(`https://wa.me/${waNumber}?text=Halo, stok ${p} ready?`, '_blank');
        }
function pesanWAmore(message) {
    window.open(
        `https://wa.me/${waNumber}?text=${encodeURIComponent(message)}`,
        "_blank"
    );
}
        document.getElementById('formKontak').addEventListener('submit', (e) => {
            e.preventDefault();
            const n = document.getElementById('nama').value;
            const p = document.getElementById('pesan').value;
            window.open(`https://wa.me/${waNumber}?text=Nama: ${n}. Pesan: ${p}`, '_blank');
        });
