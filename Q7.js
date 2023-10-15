

// Function to add a hover effect to table rows
function addHoverEffect(event) {
    const row = event.currentTarget;
    row.style.transition = 'background-color 0.3s ease, box-shadow 0.3s ease';
    row.style.backgroundColor = 'rgba(0, 0, 0, 0.1)';
    row.style.boxShadow = '0px 2px 4px rgba(0, 0, 0, 0.3)';
}

// Function to remove the hover effect from table rows
function removeHoverEffect(event) {
    const row = event.currentTarget;
    row.style.transition = 'background-color 0.3s ease, box-shadow 0.3s ease';
    row.style.backgroundColor = '';
    row.style.boxShadow = '';
}

// Add event listeners to table rows for hover effects
const tableRows = document.querySelectorAll('tr.light-theme, tr.dark-theme');
tableRows.forEach((row) => {
    row.addEventListener('mouseenter', addHoverEffect);
    row.addEventListener('mouseleave', removeHoverEffect);
});




// Modern styling for button and caption on hover
const styledButton = document.querySelector(".styled-button");
const caption = document.getElementById("caption");

styledButton.addEventListener("mouseover", () => {
    styledButton.style.backgroundColor = "#333"; // Change to your desired background color
    styledButton.style.color = "#fff"; // Change text color as needed
    styledButton.style.boxShadow = "0px 2px 4px rgba(0, 0, 0, 0.3)"; // Add a subtle shadow
});

styledButton.addEventListener("mouseout", () => {
    styledButton.style.backgroundColor = ""; // Reset background color
    styledButton.style.color = ""; // Reset text color
    styledButton.style.boxShadow = ""; // Reset shadow
});

caption.addEventListener("mouseover", () => {
    caption.style.backgroundColor = "#333"; // Change to your desired background color
    caption.style.color = "#fff"; // Change text color as needed
    caption.style.boxShadow = "0px 2px 4px rgba(0, 0, 0, 0.3)"; // Add a subtle shadow
});

caption.addEventListener("mouseout", () => {
    caption.style.backgroundColor = ""; // Reset background color
    caption.style.color = ""; // Reset text color
    caption.style.boxShadow = ""; // Reset shadow
});


// Select all table cells with class "table-cell" and add modern styling
const tableCells = document.querySelectorAll('.table-cell');

tableCells.forEach((cell) => {
    // Apply styling on mouse hover
    cell.addEventListener('mouseover', () => {
        cell.style.backgroundColor = '#333';
        cell.style.color = '#fff';
        cell.style.transition = 'background-color 0.3s, color 0.3s';
    });

    // Remove styling on mouse leave
    cell.addEventListener('mouseout', () => {
        cell.style.backgroundColor = '';
        cell.style.color = '';
    });
});
