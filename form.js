const inputs = document.getElementsByClassName('input-form');
const subBtn = document.getElementsByClassName('slideButton')[0];
for (const input of inputs) {
    input.addEventListener('blur',(e)=>{
        if(e.target.validationMessage !== ""){
            e.target.nextElementSibling.innerHTML = e.target.validationMessage;
            e.target.nextElementSibling.classList.remove('alert-inactive');
                  } else{
            e.target.nextElementSibling.classList.add('alert-inactive');
        }

    const alert = document.getElementsByClassName('alert-inactive');
    if(alert.length === 4){
        subBtn.classList.remove('inactive');
    }
    else{
        subBtn.classList.add('inactive');
    }
    })

}


