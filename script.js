const images = [
    "https://androidrootmods.github.io/RcStore/RcWhatsApp/WhatsApp.webp",
    "https://androidrootmods.github.io/RcStore/RcWhatsApp/WhatsApp.webp", // اضف عنوان الصورة الثانية
    "https://androidrootmods.github.io/RcStore/RcWhatsApp/WhatsApp.webp", // اضف عنوان الصورة الثالثة
];

let currentIndex = 0;

const imageElement = document.getElementById('image');

function changeImage(direction) {
    if (direction === 'left') {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
    } else if (direction === 'right') {
        currentIndex = (currentIndex + 1) % images.length;
    }

    imageElement.classList.add(direction === 'left' ? 'swipe-left' : 'swipe-right');

    setTimeout(() => {
        imageElement.src = images[currentIndex];
        imageElement.classList.remove(direction === 'left' ? 'swipe-left' : 'swipe-right');
    }, 500); // مدة التأثير
}

document.addEventListener('keydown', (event) => {
    if (event.key === 'ArrowLeft') {
        changeImage('left');
    } else if (event.key === 'ArrowRight') {
        changeImage('right');
    }
});