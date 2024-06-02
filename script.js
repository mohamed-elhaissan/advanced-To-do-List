const md = document.getElementsByClassName("md");
const span = document.getElementsByClassName("main-task");
const savebtn = document.querySelectorAll(".save");
const rm = document.querySelectorAll('.rm');

for (let i = 0; i < md.length; i++) {
    md[i].addEventListener("click", function() {
        modify(i);
    });
}

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


let deleteRequest = new XMLHttpRequest();
deleteRequest.open('DELETE', 'http://localhost/advanced-to-do-list/delete.php', true);
deleteRequest.setRequestHeader('Content-Type', 'application/json');
deleteRequest.onreadystatechange = function (){
    if (deleteRequest.status = 200 && deleteRequest.readyState == 4) {
        let myreponse = JSON.parse(deleteRequest.responseText);
        console.log(myreponse); 
    }
}