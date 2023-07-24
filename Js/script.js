document.querySelector('.burger').addEventListener('click', function() {
    this.classList.toggle('active');
    document.querySelector('.menu').classList.toggle('open');
});


document.querySelectorAll('.menu-item_1').forEach(item => {
    item.addEventListener('click', function() {
        document.querySelector('.menu').classList.toggle('open');
    });
});




//Вместо верхнего можно вставить это но не будет анимации!
// function toggleMenu() {
//     let menu = document.querySelector('.menu');
//     menu.classList.toggle('open');
// }