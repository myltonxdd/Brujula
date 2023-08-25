function leftY(event) {
    let year = document.getElementById("number");
    event.preventDefault();
    year.stepDown(1);
    // console.log(year.value);
}
function rightY(event) {
    let year = document.getElementById("number");
    event.preventDefault();
    year.stepUp(1);
    // console.log(year.value);
}