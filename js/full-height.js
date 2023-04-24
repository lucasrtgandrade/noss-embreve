function setMinHeight(){
    const nav = document.querySelector('header').clientHeight;
    const footer = document.querySelector('footer').clientHeight;
    const root = document.querySelector(':root');
    root.style.setProperty('--navHeight', `${nav}px`);
    root.style.setProperty('--footHeight', `${footer}px`);
}

    window.addEventListener('DOMContentLoaded', setMinHeight);
    window.addEventListener('resize', setMinHeight);