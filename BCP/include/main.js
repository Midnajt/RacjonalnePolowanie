btns = [...document.querySelectorAll('ul .li')];
sections = [...document.querySelectorAll('section')];

for (let i = 0; btns.length > i; i++ ) {
    btns[i].addEventListener('click', function(){
        showItem = btns[i].dataset.section;
        for (let i = 0; sections.length > i; i++ ){
            if ( sections[i].classList.contains(showItem) ) {
                for (let i = 0; sections.length > i; i++ ){
                    sections[i].classList.add('off')
                }
                sections[i].classList.remove('off')
            }
        }
    })
}

document.querySelector('header img').addEventListener('click', ()=>{
    for (let i = 0; sections.length > i; i++ ){
        if ( i === 0) {
            sections[i].classList.remove('off')
        } else {
            sections[i].classList.add('off')
        }
    }
})

lis = [...document.querySelectorAll('li')];

setInterval(()=>{
    let randomNumber = Math.floor(Math.random() * 4)
    for ( let i = 0; lis.length > i; i++ ) {
        if ( i === randomNumber ) {
            lis[i].classList.add('feature')
            setTimeout(()=>{
                lis[i].classList.remove('feature')
            }, 600)
        }

    }
}, 5000)

lightbox.option({
    'resizeDuration': 150,
    'wrapAround': true
  })


function switchLang(lang){
    const firstA = document.querySelector('.lang a:first-child');
    const firstImg = document.querySelector('.lang a:first-child img')
    const secondA = document.querySelector('.lang a:last-child');
    const secondImg = document.querySelector('.lang a:last-child img')

    if(lang === 'pl'){
        firstA.href = '?lang=pl';
        firstImg.src = 'Images/pl.jpg';
        secondA.href = '?lang=eng';
        secondImg.src = 'Images/eng.png';
    } else {
        firstA.href = '?lang=eng';
        firstImg.src = 'Images/eng.png';
        secondA.href = '?lang=pl';
        secondImg.src = 'Images/pl.jpg';
    }
}