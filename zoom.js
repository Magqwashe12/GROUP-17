const productImage = document.getElementById('product-image');
const imageContainer = document.getElementById('image-container');
let isZoomed = false;
let isDragging = false;
let startOffsetX = 0;
let startOffsetY = 0;

productImage.addEventListener('click', () => {
  isZoomed = !isZoomed;

  if (isZoomed) {
    productImage.style.transform = 'scale(2)'; // Zoom in by 2x (you can adjust the scale factor)
  } else {
    productImage.style.transform = 'scale(1)'; // Reset to original size
  }
});

productImage.addEventListener('mousedown', (e) => {
  if (!isZoomed) return;

  isDragging = true;
  startOffsetX = e.clientX - productImage.getBoundingClientRect().left;
  startOffsetY = e.clientY - productImage.getBoundingClientRect().top;

  // Prevent image dragging from interfering with other events (e.g., text selection)
  productImage.style.userSelect = 'none';
});

document.addEventListener('mousemove', (e) => {
  if (isDragging) {
    const offsetX = e.clientX - imageContainer.getBoundingClientRect().left - startOffsetX;
    const offsetY = e.clientY - imageContainer.getBoundingClientRect().top - startOffsetY;

    productImage.style.transform = `scale(2) translate(${offsetX}px, ${offsetY}px)`;
  }
});

document.addEventListener('mouseup', () => {
  isDragging = false;
  productImage.style.userSelect = 'auto';
});

