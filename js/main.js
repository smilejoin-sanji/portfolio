"use strict";
{
    const $nav = document.getElementById('js-nav');

    let $windowWidth = window.innerWidth;

    window.addEventListener('scroll', () => {
        let scrollY = window.scrollY;


        if($windowWidth < 470) {

            if (scrollY > 130) {
                $nav.classList.add('nav-fixed');
            } else {
                $nav.classList.remove('nav-fixed');
            }

        } else if($windowWidth < 825) {

            if (scrollY > 182) {
                $nav.classList.add('nav-fixed');
            } else {
                $nav.classList.remove('nav-fixed');
            }

        } else if($windowWidth < 1570) {

            if (scrollY > 282) {
                $nav.classList.add('nav-fixed');
            } else {
                $nav.classList.remove('nav-fixed');
            }

        } else if($windowWidth > 1570) {

            if (scrollY > 442) {
                $nav.classList.add('nav-fixed');

            } else {
                $nav.classList.remove('nav-fixed');
            }
        }

    });

}

{
    // ハンバーガーメニュー
    const hamburger = document.getElementById('hamburger');
    const nav = document.getElementById('js-nav');
    // const navLink = document.querySelector('.js-navLink');
    let count = 0;

    hamburger.addEventListener('click', () => {

        if( count == 1) {
            hamburger.classList.remove('hamburger-active');
            nav.classList.remove('js-nav-active');
            count = 0;
        } else {

            hamburger.classList.add('hamburger-active');
            nav.classList.add('js-nav-active');
            count = 1;
        }
    });

    // navLink.addEventListener('click', () => {

    //     nav.classList.remove('js-nav-active');
        
    //     count = 0;
    // }) ;
}