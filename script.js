const cards = document.querySelectorAll('.card-item');
const nextBtn = document.getElementById('nextBtn');
const prevBtn = document.getElementById('prevBtn');
const charName = document.getElementById('charName');
const charRole = document.getElementById('charRole');
const textWrapper = document.getElementById('textWrapper');

let currentIndex = 0;

const characterData = [
    { name: "Tanjiro Kamado", role: "Water Breathing User" },
    { name: "Nezuko Kamado", role: "Demon Slayer" },
    { name: "Zenitsu Agatsuma", role: "Thunder Breathing User" },
    { name: "Inosuke Hashibira", role: "Beast Breathing User" }
];

function updateCarousel() {
    // 1. Handle Text Transition
    textWrapper.classList.add('text-out');
    
    setTimeout(() => {
        charName.innerText = characterData[currentIndex].name;
        charRole.innerText = characterData[currentIndex].role;
        textWrapper.classList.remove('text-out');
    }, 400);

    // 2. Handle Image Stack
    cards.forEach((card, index) => {
        card.classList.remove('active', 'next-1', 'next-2');
        
        if (index === currentIndex) {
            card.classList.add('active');
        } else if (index === (currentIndex + 1) % cards.length) {
            card.classList.add('next-1');
        } else if (index === (currentIndex + 2) % cards.length) {
            card.classList.add('next-2');
        }
    });
}

nextBtn.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % cards.length;
    updateCarousel();
});

prevBtn.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + cards.length) % cards.length;
    updateCarousel();
});

// Initial load
updateCarousel();