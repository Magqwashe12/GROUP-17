

// Function to change the image in the slideshow
function changeImage() {
    imgElement.src = imageSources[currentImageIndex];
    currentImageIndex = (currentImageIndex + 1) % imageSources.length;
}

// Change the image every 3 seconds (3000 milliseconds)
setInterval(changeImage, 3000);


// Array of image sources for the slideshow
const imageSources = [
    'images/slide_show/slide_show1.jpg',
    'images/slide_show/slide_show2.jpg',
    'images/slide_show/slide_show3.jpg',
    // Add more image sources as needed
];

const imgElement = document.getElementById('sneakers');
const captionElement = document.getElementById('caption');
let currentImageIndex = 0;
let slideshowInterval;

// Array of captions corresponding to image sources
const captions = [
    'Welcome to RU Sneakers!',
    'Explore our latest arrivals.',
    'Join our vibrant sneaker community.',
    // Add more captions as needed
];

function changeImage() {
    imgElement.style.opacity = 0; // Start fading out the current image
    setTimeout(function () {
        imgElement.src = imageSources[currentImageIndex];
        captionElement.innerText = captions[currentImageIndex];
        currentImageIndex = (currentImageIndex + 1) % imageSources.length;
        imgElement.style.opacity = 1; // Start fading in the new image
    }, 500); // Wait for the fade-out to complete (500 milliseconds)
}

function pauseSlideshow() {
    clearInterval(slideshowInterval);
}

function resumeSlideshow() {
    slideshowInterval = setInterval(changeImage, 3000);
}

// Initialize the caption with the first image's caption
captionElement.innerText = captions[currentImageIndex];

// Pause and resume on hover
imgElement.addEventListener('mouseenter', pauseSlideshow);
imgElement.addEventListener('mouseleave', resumeSlideshow);

// Start the slideshow
resumeSlideshow();