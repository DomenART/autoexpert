;(function () {

    let menuBtn = document.querySelector('.menu-btn');
    let header = document.querySelector('.header');

    menuBtn.addEventListener('click', () => {
        menuBtn.classList.toggle('menu-btn_opened-menu');
        header.classList.toggle('header_opened-menu');
    });
    
})();