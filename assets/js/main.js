// jQuery(function ($) {}
document.getElementsByClassName('content')[0].onclick = change1;

function change1() {
    
    document.getElementsByClassName('hamburger__button')[0].classList.remove('toggled');
    document.getElementsByClassName('menu')[0].classList.remove('menu-drop');
    document.getElementsByClassName('content')[0].classList.remove('blur');

}

document.getElementsByClassName('hamburger__button')[0].onclick = change;

function change() {
    // document.getElementsByClassName('zero')[0].classList.toggle('one');
    document.getElementsByClassName('hamburger__button')[0].classList.toggle('toggled');
    document.getElementsByClassName('menu')[0].classList.toggle('menu-drop');
    document.getElementsByClassName('content')[0].classList.toggle('blur');

}
