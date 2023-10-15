// JavaScript to toggle the dropdown menu
document.querySelector('.dropdown-toggle').addEventListener('click', function() {
    const dropdown = document.querySelector('.dropdown');
    dropdown.style.display = (dropdown.style.display === 'block') ? 'none' : 'block';
});
