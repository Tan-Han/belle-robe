// MOBILE MENU

function mobileMenu() {
    var menu = document.getElementById("menuLinks");
    if (menu.style.display === "block") {
        menu.style.display = "none";
    } else {
        menu.style.display = "block";
    }
}

window.onclick = (event) => {
    const screenWidth = window.innerWidth;
    const menu = document.getElementById("menuLinks");
    const icon = document.getElementById("menuIcon");

    if (screenWidth <= 1150 && event.target !== icon && menu.style.display === "block" && !event.target.closest("#menuLinks")) {
        menu.style.display = "none";
    }
}


// DROPDOWN MENU

// Function to toggle dropdown content for Brudekjoler
function dropdownMenuBrudekjoler() {
    var dropdownContent = document.getElementById("dropContentBrudekjoler");
    dropdownContent.classList.toggle("show");
}

// Function to toggle dropdown content for Fest- & Gallakjoler
function dropdownMenuFestGallakjoler() {
    var dropdownContent = document.getElementById("dropContentGallakjoler");
    dropdownContent.classList.toggle("show");
}

// Function to toggle dropdown content for Konfirmationskjoler
function dropdownMenuKonfirmation() {
    var dropdownContent = document.getElementById("dropContentKonfirmation");
    dropdownContent.classList.toggle("show");
}

// Function to toggle dropdown content for Sko & Tilbehør
function dropdownMenuSko() {
    var dropdownContent = document.getElementById("dropContentSko");
    dropdownContent.classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.addEventListener('click', function (event) {
    // Close all dropdowns except the one clicked
    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var i = 0; i < dropdowns.length; i++) {
        var dropdown = dropdowns[i];
        if (event.target.closest('.dropbtn') !== dropdown.previousElementSibling && dropdown.classList.contains('show')) {
            dropdown.classList.remove('show');
        }
    }
});

// PRODUCT FILTER - OPEN AND CLOSE ON SMALLER SCREENS

function toggleProductFilter() {
    var filter = document.getElementById("productFilter");
    var button = document.querySelector(".filter-button");
    if (filter.style.display === "none" || filter.style.display === "") {
        filter.style.display = "flex";
        button.innerHTML = "Luk filter"; // Change button text
    } else {
        filter.style.display = "none";
        button.innerHTML = "Filter"; // Change button text
    }
}

// DROPDOWN MENU - OM OS PAGE

// Helper function to toggle dropdown content
function toggleDropdown(event) {
    var dropdownContent = event.currentTarget.nextElementSibling;
    dropdownContent.classList.toggle("show");
}

// Add event listeners to all dropdown buttons
var dropdownBtns = document.querySelectorAll(".dropbtn_about_us");
dropdownBtns.forEach(function (btn) {
    btn.addEventListener("click", toggleDropdown);
});

// Close the dropdown content if the user clicks outside of it
window.addEventListener("click", function (event) {
    dropdownBtns.forEach(function (btn) {
        var dropdownContent = btn.nextElementSibling;
        if (!btn.contains(event.target) && dropdownContent.classList.contains("show")) {
            dropdownContent.classList.remove("show");
        }
    });
});


// CONTACT FORM MODAL

 // Get the modal
 var modal = document.getElementById("contactForm");

 // Get the button that opens the modal
 var btn = document.getElementById("contactBtn");

 // Get the <span> element that closes the modal
 var span = document.getElementsByClassName("close")[0];

 // When the user clicks on the button, open the modal
 btn.onclick = function () {
     modal.style.display = "block";
 }

 // When the user clicks on <span> (x), close the modal
 span.onclick = function () {
     modal.style.display = "none";
 }

 // When the user clicks anywhere outside of the modal, close it
 window.onclick = function (event) {
     if (event.target == modal) {
         modal.style.display = "none";
     }
 } 

 // Video speed on hero video
 document.getElementById('heroVideo').playbackRate = 0.75;