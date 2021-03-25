const nextButtons = document.getElementsByClassName('next');
const slideContainer = document.getElementById('slide-container');
const dots = document.getElementsByClassName('dot');
const submitButton = document.querySelector('.submit');
const errorDisplays = document.getElementsByClassName('error-display');
const timeline = document.querySelector('.timeline');
const containerView = document.getElementsByClassName('window')[0];
const slides = document.getElementsByClassName('slide');
const haircutSelect = document.getElementById('hair-cut-choice');
const thanksDiv = document.getElementById('thanks');
let haircutSelected = haircutSelect.value.split('/')[2].replace('.jpg','');
const firstname = document.getElementById('first-name');
const mail = document.getElementById('email');
const tel = document.getElementById('tel');
const date = document.getElementById('date');
const result = document.getElementById('result')
let containerViewWidth;
let lastWindowPX;
let leftInterval ="0px";
let dotIndex = 0;
let frenchDate;
let hourChosen="";
let agenda =[
    ["Fermé"],
    ["Fermé"],
    ["10h00","11h00","14h30"],
    ["10h00","15h00"],
    ["11h30","14h30","16h00"],
    ["10h00","11h00","13h30","16h00"],
    ["10h00"],

]

function lastWindowPXCalculator (windowWidth){
 return '-'+parseInt(windowWidth)*4+'px';
}
function removeListener(element){
    element.replaceWith(element.cloneNode(true));

}
function sizeAdjustment (){
    containerViewWidth = window.innerWidth *5/6;
    timeline.style.width = containerViewWidth+"px";
    lastWindowPX = lastWindowPXCalculator(containerViewWidth);
    containerView.style.width = containerViewWidth+"px";
    slideContainer.style.left = "-"+dotIndex * containerViewWidth+"px";
    for (const slide of slides) {
        slide.style.width = containerViewWidth+"px";
    }
}
function getClickedDot(dot){
    return parseInt(dot.id.charAt(6));
}
function getChosenHour(element){
    return element.id.substr(1,5);
}
sizeAdjustment();

window.addEventListener('resize',sizeAdjustment);

for (let nextButton of nextButtons) {
    nextButton.addEventListener('click',(e)=>{
        let rightInterval = slideContainer.offsetLeft -containerViewWidth;
        slideContainer.style.left = rightInterval.toString()+"px";
        let dotIndexToFill = getClickedDot(e.target);
        dots[dotIndexToFill].classList.add('dot-ok');
        dots[dotIndexToFill].classList.remove('dot-current');
        dots[dotIndexToFill+1].classList.add('dot-current');
        dots[dotIndexToFill].classList.remove('dot-incomplete')
        errorDisplays[dotIndexToFill].classList.add('inactive');
    });
}

for (let dot of dots) {
     dot.addEventListener('click',(e)=>{
        dotIndex = parseInt(e.target.id.charAt(3));
        leftInterval = (dotIndex * -containerViewWidth).toString()+"px";
        slideContainer.style.left = leftInterval;
        let dotCurrentToRemove = document.querySelector('.dot-current');
        dotCurrentToRemove.classList.remove('dot-current');
        e.target.classList.add('dot-current');
    })
};

submitButton.addEventListener('click',(e)=>{
    let count = 0;
    for(let i = 0; i < dots.length-1; i++) {
        if (!dots[i].classList.contains('dot-ok')) {
            count++;
            dots[i].classList.add('dot-incomplete');
            errorDisplays[i].classList.remove('inactive');
        }
        let thanksString = `Merci ${firstname.value}, nous notons votre rendez vous qui aura lieu le 
        ${frenchDate} à ${hourChosen}. Nous vous avons envoyé un mail de cofirmation à 
        ${mail.value} et un SMS au ${tel.value}, vous avez choisi la coiffure "${haircutSelected}"`
        ;
        thanksDiv.innerHTML = thanksString;
    }
    if (count === 0){
        dots[3].classList.add('dot-ok');
        slideContainer.style.left=lastWindowPX;
        timeline.classList.add('timeline-ok');
        for (let dot of dots) {
            removeListener(dot);
        }
    }
})
date.addEventListener('change',()=>{
    //Oui je sais Guillaume ça ne te plaira pas j'aurais du fragmenter ce Event Listener en plein de fonctions mais trop peur de casser pour la présentation!!! Je ferai mieux, déso...
    let chosenDate = new Date(date.value);
    let numDay = chosenDate.getDay();
    let day ="";
    switch (numDay){
        case 0: day = "Dimanche";break;
        case 1: day = "Lundi";break;
        case 2: day = "Mardi";break;
        case 3: day = "Mercredi";break;
        case 4: day = "Jeudi";break;
        case 5: day = "Vendredi";break;
        case 6: day = "Samedi";break;
    }
    let month = chosenDate.toLocaleString('default', { month: 'long' });
    frenchDate = day + " " + chosenDate.getDate() +" "+month+" "+chosenDate.getFullYear();
    let html ="";
    result.innerHTML = frenchDate;
    for (const schedule of agenda[numDay]) {
        if (schedule === "Fermé"){
            html = `<p>${schedule}<p/>`;
        }else {
            html = `<p><button id= "h${schedule}" class="submitHour">${schedule}</button></p> `
        }
        result.innerHTML += html;
    }
    const hours = document.getElementsByClassName('submitHour');
    for (const hour of hours) {
        hour.addEventListener('click',(e)=>{
            let selected = document.getElementsByClassName('selected');
            if (selected.length === 1){
                selected[0].classList.remove('selected');
            }
            e.target.classList.add('selected');
            hourChosen = getChosenHour(e.target);
        })
    }
})