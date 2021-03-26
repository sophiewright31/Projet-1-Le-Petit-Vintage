const imgHairdressers = document.getElementsByClassName('hair-cut-img');
for (const imgHairdresser of imgHairdressers) {// const active = document.querySelector('.img-active');
    imgHairdresser.addEventListener('click',(e)=>{
    const active = document.querySelector('.img-active');
    const visible = document.querySelector('.visible');
    if (active!== null){
        active.classList.remove('img-active');
    }
    if (visible!== null){
        visible.classList.remove('visible');
        visible.classList.add('hidden');
    }
        e.target.classList.add("img-active");
        e.target.nextElementSibling.classList.remove('hidden');
        e.target.nextElementSibling.classList.add('visible');
    })

}