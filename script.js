document.addEventListener("DOMContentLoaded", function() {
    let title = document.getElementById("dynamic-title");
    title.innerText = "Título Modificado con JavaScript";
    
    title.addEventListener("mouseenter", function() {
        let randomColor = "#" + Math.floor(Math.random()*16777215).toString(16);
        title.style.color = randomColor;
    });
});