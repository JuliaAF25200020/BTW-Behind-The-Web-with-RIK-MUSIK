
const waNumber = "628123456789";
        let currentLang = 'id';

        // --- FUNGSI TRANSLATE ---
        function toggleLanguage() {
            currentLang = currentLang === 'id' ? 'en' : 'id';
            document.querySelectorAll('[data-en]').forEach(el => {
                el.innerText = el.getAttribute(`data-${currentLang}`);
            });
            
            // Update Placeholder Search
            document.getElementById('searchInput').placeholder = 
                currentLang === 'id' ? 'Cari alat musik...' : 'Search instruments...';
            
            // Update Hero (Manual untuk elemen kompleks)
            const heroH1 = document.getElementById('heroText');
             // Assecories
            const heroH1as = document.getElementById('heroText-as');
            // electric guitars
            const heroH1eg = document.getElementById('heroText-eg');
            //acoustic guitars
            const heroH1ag = document.getElementById('heroText-ag');
            if(currentLang === 'en') {
    if (heroH1as) heroH1as.innerHTML = 'Complete <br> <span style="color: #ff9f43;">Your</span> <br> Instrument';
    if (heroH1) heroH1.innerHTML = 'Expert in <br> <span style="color: #ff9f43;">Musical</span> <br> Instruments';
    if (heroH1eg) heroH1eg.innerHTML = 'Plug In, <br> <span style="color: #ff9f43;">Turn Out, </span> <br> Rock Out!';
    if (heroH1ag) heroH1ag.innerHTML = 'Acoustic <br> <span style="color: #ff9f43;">Vibes</span> <br> Only';
} else {
    if (heroH1as) heroH1as.innerHTML = 'Lengkapi <br> <span style="color: #ff9f43;">Instrumen</span> <br> Anda';
    if (heroH1) heroH1.innerHTML = 'Ahli dalam <br> <span style="color: #ff9f43;">Instrumen</span> <br> Musik';
    if (heroH1eg) heroH1eg.innerHTML = 'Colokkan, <br> <span style="color: #ff9f43;">Mainlah,</span> <br> Bergoyanglah';
    if (heroH1ag) heroH1ag.innerHTML = 'Akustik <br> <span style="color: #ff9f43;">Vibes</span> <br> Aja';
}
           
const namainput = document.getElementById('nama');

namainput.placeholder = "Nama"; 
const pesaninput = document.getElementById('pesan');

pesaninput.placeholder = "Pesan";
 if(currentLang === 'en') {
namainput.setAttribute('placeholder', 'Name');
pesaninput.setAttribute('placeholder', 'Message');
 }
            
        }

        // --- SEARCH AKTIF ---
        const searchInput = document.getElementById('searchInput');
        const cards = document.querySelectorAll('.product-card');

        searchInput.addEventListener('input', () => {
            const val = searchInput.value.toLowerCase();
            cards.forEach(card => {
                const text = card.querySelector('h4').innerText.toLowerCase();
                card.style.display = text.includes(val) ? "flex" : "none";
            });
        });

        function pesanWA(p) {
            window.open(`https://wa.me/${waNumber}?text=Halo, stok ${p} ready?`, '_blank');
        }

        document.getElementById('formKontak').addEventListener('submit', (e) => {
            e.preventDefault();
            const n = document.getElementById('nama').value;
            const p = document.getElementById('pesan').value;
            window.open(`https://wa.me/${waNumber}?text=Nama: ${n}. Pesan: ${p}`, '_blank');
        });