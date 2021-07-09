let fileInput = document.getElementById("file-input");
let imageContainer = document.getElementById("images");
let numberOfImage = document.getElementById("number-of-img");

function preview(){
    imageContainer.innerHTML = "";
    numberOfImage.textContent = fileInput.files.length + ' Files Selected';
    numberOfImage.style.color = "black";
    console.log(fileInput.files.length);

    for(i of fileInput.files){
        let reader = new FileReader();
        let figure = document.createElement("figure");
        let figcap = document.createElement("figcaption");
        figcap.innerText = i.name;
        figure.appendChild(figcap);
        reader.onload=()=>{
            let img = document.createElement("img");
            img.setAttribute("src",reader.result);
            figure.insertBefore(img,figcap);
        }
        imageContainer.appendChild(figure);
        reader.readAsDataURL(i);
    }
}