// всплывающее мобильное меню

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("burger").addEventListener("click", function() {
        document.querySelector(".header-mobile").classList.toggle("open")
    })
})

// всплывающее планшетное меню

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("burger-tablet").addEventListener("click", function() {
        document.querySelector(".header-tablet").classList.toggle("open")
    })
})

// модальное окно

let modalWindow = document.getElementById("modal-window");

let modalButton = document.getElementById("modal-btn");


let modalButton_sideBar = document.getElementById("modal-btn-sidebar");


let closeButton = document.getElementsByClassName("close")[0];

modalButton.onclick = function() {
    modalWindow.style.display = "block";
}

try {
    modalButton_sideBar.onclick = function() {
    modalWindow.style.display = "block";
    }
} catch {
    // console.log('');
}

closeButton.onclick = function() {
    modalWindow.style.display = "none";
}

