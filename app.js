const button = document.querySelector("button");
const ionicon = document.getElementById('add');
console.log(ionicon);
console.log(button);
button.addEventListener("click", function() {
    // ionicon.style.transform = 'rotate(360deg)';
    ionicon.style.color = "red";
});
