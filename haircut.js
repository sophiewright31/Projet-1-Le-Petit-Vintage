const haircutImg = document.getElementById('hair-cut-img');
const haircutSelector = document.getElementById('hair-cut-choice');
haircutImg.src = haircutSelector.value;
haircutSelector.addEventListener('change',()=>{
    haircutImg.src = haircutSelector.value;
})
