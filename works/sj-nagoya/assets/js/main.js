'use strict';

{
    const tabItems = document.querySelectorAll('.nav__list .nav__list__items a');
    const contents = document.querySelectorAll('.contents_container');

    tabItems.forEach(clickItem => {
        clickItem.addEventListener('click', e => {
            // aタグ機能削除
            // e.preventDefault();
            //tabMenuの設定
            tabItems.forEach(item => {
                item.classList.remove('is-active')
            });
            clickItem.classList.add('is-active');

            // contentsの設定
            contents.forEach(content => {
                content.classList.remove('contents__is-active');
            });
            document.getElementById(clickItem.dataset.id).classList.add('contents__is-active');
        })
    })
}

// moblie menu
{
    $(function () {
        // const mobileScreen = 768px;
        const mobileMenu = document.querySelectorAll(".mobile_navBox");
        const tabItems = document.querySelectorAll('.nav__list .nav__list__items a');

        // ３本線タップした時に
        $(mobileMenu).click(function () {
            // メニューボックスを表示する
            $(".nav").toggleClass("nav_is-active");
            // ３本線をクローズに変更する
            $(".mobile_navBox").toggleClass("nav_is-close");
        });

        // メニューアイテムをタップした時に 
        $(tabItems).click(function () {
            // メニューボックスを削除する
            $(".nav").removeClass("nav_is-active");
            // クローズから３本線に戻す
            $(".mobile_navBox").removeClass("nav_is-close");
        })
    });
}