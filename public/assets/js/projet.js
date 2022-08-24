const cursor = document.querySelector('.cursor');

document.addEventListener('mousemove', e => {
    cursor.style.top = `${e.pageY - 20}px`
    cursor.style.left = `${e.pageX - 20}px`
})


const allLinks = document.querySelectorAll('section ul li');

console.log(allLinks);

allLinks.forEach(link => {

    const location = link.getAttribute('data-loc');

    link.addEventListener('mouseover', () => {
        cursor.classList.add('hovered');
        cursor.style.backgroundImage = `url(assets/img/${location})`;
    })

    

    link.addEventListener('mouseout', () => {
        cursor.classList.remove('hovered');
        cursor.style.backgroundImage = `none`;
    })


})
