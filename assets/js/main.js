document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("burger").addEventListener("click", function() {
        document.querySelector(".header-mobile").classList.toggle("open")
    })
})

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("burger-tablet").addEventListener("click", function() {
        document.querySelector(".header-tablet").classList.toggle("open")
    })
})