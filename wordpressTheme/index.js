console.log("hi sdf");

const cursorDot = document.querySelector("cursor-dot");
const cursorOutLine = document.querySelector("cursor-outline");

window.addEventListener("mousemove", function (e) {
    const x = e.clientX;
    const y = e.clientY;
    cursorDot.style.left = `${x}px;`;
    cursorDot.style.top = `${y}px;`;
    cursorOutLine.style.top = `${x}px;`;
    cursorOutLine.style.top = `${y}px;`;


})
