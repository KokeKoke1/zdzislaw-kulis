const images = document.querySelectorAll("img");
let modal; 

function createModal() {
    modal = document.createElement("div");
    modal.classList.add("modal");
    document.body.appendChild(modal);
}
createModal();

for (let i=0;i<images.length;i++) {
    images[i].addEventListener("click", () => {
        if (!modal.classList.contains("showModal")) {
            modal.innerHTML = `<img src="${images[i].src}"><button>x</button>"`;
            modal.classList.toggle("showModal");
            const btn = document.querySelector(".showModal > button");
            btn.addEventListener("click", () => {
                modal.innerHTML = ``;
                modal.classList.remove("showModal");
            })
        } else {
            modal.innerHTML = ``;
            modal.classList.toggle("showModal");
        }
    })
}
