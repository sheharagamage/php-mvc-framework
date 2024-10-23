let items = document.querySelectorAll(".slider .item");
let prevBtn = document.getElementById("prev");
let nextBtn = document.getElementById("next");
let lastPosition = items.length - 1;
let firstPosition = 0;
let active = 0;

nextBtn.onclick = () => {
    active++;
    setSlider();
}

prevBtn.onclick = () => {
    active--;
    setSlider();
}
const setSlider = () => {
    let oldActive = document.querySelector(".slider .item.active");
    if(oldActive) oldActive.classList.remove("active");
    items[active].classList.add("active");  

    nextBtn.classList.remove("d-none");
    prevBtn.classList.remove("d-none");
    if(active == lastPosition) nextBtn.classList.add("d-none");
    if(active== firstPosition) prevBtn.classList.add("d-none");


}
setSlider();
const setDiameter =() => {
    let slider = document.querySelector(".slider");
    let widthslider = slider.offsetWidth;
    let heightslider =slider.offsetHeight;
    let diameter = Math.sqrt(Math.pow(widthslider, 2) + Math.pow(heightslider, 2));
    document.documentElement.style.setProperty('--diameter', diameter + 'px');
}
setDiameter();
window.addEventListener('resize', setDiameter);