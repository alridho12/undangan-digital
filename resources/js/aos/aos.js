function aosInit() {
    AOS.init({
        duration: 600,
        easing: 'ease-in-out',
        once: false,
        mirror: false
    });
}
window.addEventListener('load', aosInit);

const selectTyped = document.querySelector('.typed');
if (selectTyped) {
    let typed_strings = selectTyped.getAttribute('data-typed-items');
    typed_strings = typed_strings.split(',');
    new Typed('.typed', {
        strings: typed_strings,
        loop: true,
        typeSpeed: 50,
        backSpeed: 50,
        backDelay: 2000
    });
}
