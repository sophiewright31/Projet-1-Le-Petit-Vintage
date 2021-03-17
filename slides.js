// const previousButton = document.getElementById('previous-button');
const nextButtons = document.getElementsByClassName('next');
const slideContainer = document.getElementById('slide-container');
const dots = document.getElementsByClassName('dot');
const submitButton = document.querySelector('.submit');
const errorDisplays = document.getElementsByClassName('error-display');
const timeline = document.querySelector('.timeline');

for (let nextButton of nextButtons) {
    nextButton.addEventListener('click',(e)=>{
        let rightInterval = slideContainer.offsetLeft -250;
        slideContainer.style.left = rightInterval.toString()+"px";
        let dotIndexToFill = parseInt(e.target.id.charAt(6));
        dots[dotIndexToFill].classList.add('dot-ok');
        dots[dotIndexToFill].classList.remove('dot-current');
        dots[dotIndexToFill+1].classList.add('dot-current');
        dots[dotIndexToFill].classList.remove('dot-incomplete')
        errorDisplays[dotIndexToFill].classList.add('inactive');
        console.log(errorDisplays);
    });
}

for (let dot of dots) {
     dot.addEventListener('click',(e)=>{
        let dotIndex = parseInt(e.target.id.charAt(3));
        let leftInterval = (dotIndex * -250).toString()+"px";
        slideContainer.style.left = leftInterval;
        let dotCurrentToRemove = document.querySelector('.dot-current');
        dotCurrentToRemove.classList.remove('dot-current');
        e.target.classList.add('dot-current');
    })
};

submitButton.addEventListener('click',()=>{
    let count = 0;
    for(let i = 0; i < dots.length-1; i++) {
        if (!dots[i].classList.contains('dot-ok')) {
            count++;
            dots[i].classList.add('dot-incomplete');
            errorDisplays[i].classList.remove('inactive')
        }
    }
    if (count === 0){
        dots[3].classList.add('dot-ok');
        slideContainer.style.left="-1000px";
        timeline.classList.add('timeline-ok');




    }

})
