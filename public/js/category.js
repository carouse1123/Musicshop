const categories = document.querySelector("#categories"),
    carousel = document.querySelector('#carousel'),
    category = document.querySelectorAll('#category'),
    button = document.querySelectorAll('.arrow');

let index = 1,
    intervalid;

const slide = () => {
    index = index === category.length ? 0 : index < 0 ? category.length - 1 : index;
    carousel.style.transform = `translate(-${index * 17}%)`;
}
const updateClick = (i) => { 
    index += i.target.id === "next" ? 1 : -1;
    slide(index);
    console.log(index);
}
button.forEach((button) => button.addEventListener("click",updateClick));