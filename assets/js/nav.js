/*
@ASSESSME.USERID: ls5273
@ASSESSME.AUTHOR: Lana Sorak
@ASSESSME.ANALYZE: YES
*/

document.addEventListener("DOMContentLoaded", function() {
    let navButton = document.querySelector('.navbutton');
    let menu = document.querySelector('.menu');

    navButton.addEventListener('click', () => {
        menu.classList.toggle('show');
    })
})