btns = [...document.querySelectorAll('ul li')];
sections = [...document.querySelectorAll('section')]

for (let i = 0; btns.length > i; i++ ) {
    btns[i].addEventListener('click', function(){
        showItem = btns[i].dataset.section;
        for (let i = 0; sections.length > i; i++ ){
            // jeżeli klasa zawiera nazwę taką jak dataset
            if ( sections[i].classList.contains(showItem) ) {
                // schowaj wszystkie
                for (let i = 0; sections.length > i; i++ ){
                    sections[i].classList.add('off')
                }
                // włącz wybrany
                sections[i].classList.remove('off')
            }
        }
    })
}

document.querySelector('header img').addEventListener('click', ()=>{
    console.log('klik')
    for (let i = 0; sections.length > i; i++ ){
        if ( i === 0) {
            sections[i].classList.remove('off')
        } else {
            sections[i].classList.add('off')
        }
    }
})

lightbox.option({
    'resizeDuration': 150,
    'wrapAround': true
  })