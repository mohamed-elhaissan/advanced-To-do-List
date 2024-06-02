const md = document.getElementsByClassName("md");
const span = document.getElementsByClassName("main-task");
const savebtn = document.querySelectorAll(".save");
const rm = document.querySelectorAll('.rm');

for (let i = 0; i < md.length; i++) {
    md[i].addEventListener("click", function() {
        modify(i);
    });
}

// here in this function im trying with modify button

function modify(index) {
    let text = span[index].textContent;
    let input = document.createElement("input");
    input.value = text;
    input.style.borderColor = "#4783c7";
    
    span[index].parentElement.insertBefore(input, span[index]);
    span[index].style.display = "none";
    savebtn[index].style.display = "flex";
    md[index].classList.add("none");
    rm[index].style.display = "none";
    
}

// making sure that user if enter a task automaticly focued on the input again for typing
function autofocus(){
    document.querySelector("input").focus();
}


