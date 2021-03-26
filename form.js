const inputs = document.getElementsByClassName('input-form');
const subBtn = document.getElementsByClassName('slideButton')[0];
const nbRightAnswers = 4;
for (const input of inputs) {
    input.addEventListener('blur',(e)=>{
        if(e.target.validationMessage !== ""){
            e.target.nextElementSibling.innerHTML = e.target.validationMessage;
            e.target.nextElementSibling.classList.remove('alert-inactive');
          } else{
            e.target.nextElementSibling.classList.add('alert-inactive');
        }
    const goodAnswers = document.getElementsByClassName('alert-inactive');
    if(goodAnswers.length === nbRightAnswers){
        subBtn.classList.remove('inactive');
    }
    else{
        subBtn.classList.add('inactive');
    }
    })

}


