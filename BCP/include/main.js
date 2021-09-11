btns = [...document.querySelectorAll('ul li')];
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
    let number = Math.floor(Math.random() * 4)
    for ( let i = 0; lis.length > i; i++ ) {
        if ( i === number ) {
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