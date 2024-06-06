const images = ['imgeclat/inicio1.jpg', 'imgeclat/inicio2.jpg', 'imgeclat/inicio3.jpg'];
let currentIndex = 0;

function changeImage() {
    const imageElement = document.getElementById('rotating-image');
    currentIndex = (currentIndex + 1) % images.length;
    imageElement.src = images[currentIndex];
}

setInterval(changeImage, 3000); 
