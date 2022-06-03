const row = document.querySelector("#articles");
const btnloadsite = document.querySelector(".btnloadsite");
let postsList = [];
let posts = 0;
// const nav = document.querySelector("nav");

// window.addEventListener("scroll", () => {
    
//     if (this.scrollY > 50) {
//         nav.style.position = "fixed";
//         nav.style.padding = "0px 10px 0px 10px";
//     } else {
//         nav.style.position = "";
//         nav.style.padding = "15px 10px 15px 10px";
//     }
// })
const postCreateElement = (selector, className) => {
    let e = document.createElement(selector);
    if (className != null) {
        e.classList.add(className);
    }
    return e;
}

async function generatePost(number) {
    try {
        if (postsList.length == 0) {
            let result = await fetch("app/functions/api.php", {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    option: "getArticles"
                })
            })
            let data = await result.json();
            for (let i=0;i<data.length;i++) {
                postsList.push(data[i]);
            }
        }
        console.log(postsList);
        for (let i=0;i<number;i++) {
            if (posts < postsList.length) {
                createPost(postsList[posts].ID, postsList[posts].TITLE, postsList[posts].TEXT);
                posts++;
            }
        }
    }
    catch { console.log("Error"); }
}
// fetch("app/functions/api.php")
// .then(res => res.json())
// .then(data => {
//     posts++;
//     createPost(data[posts].TITLE, data[posts].TEXT);
// })
const createPost = (i,n,t) => {
    
    let card = postCreateElement("div", "col");
    let name = postCreateElement("h3", "null");

    let text = postCreateElement("div", "text");


    card.appendChild(name);
    card.appendChild(text);
    
    t = t.slice(0, 320);

    row.appendChild(card);
    setTimeout(() => {
        name.innerHTML = `<a href="?article=${i}&title=${n}">${n}</a>`;
        text.innerHTML = t + `... <a href='?article=${i}&title=${n}'>Czytaj dalej.</a>`;
    }, 300);
}

generatePost(2);

btnloadsite.addEventListener("click", () => {
    generatePost(2);
})
// window.addEventListener("scroll", () => {
//     if (this.scrollY+document.body.clientHeight+50 > document.body.scrollHeight)
//     setTimeout(() => generatePost(1), 100);
// })