// Popup
window.addEventListener('DOMContentLoaded', (event) => {
    const close = document.querySelector('.popup__close');
    const popup = document.querySelector('.popup');
    const darkness = document.querySelector('.player__darkness')
    close.addEventListener('click', function() {
    popup.style.display = 'none';
});
    const showWhere = document.querySelector('.player__show-where');
    const buttonShowWhere = document.querySelector('#buttonShowWhere')
    buttonShowWhere.addEventListener('click', function () {
    showWhere.style.display = 'inline-block';
    darkness.style.display = 'block';
    })
});

// Player
const showWhere = document.querySelector('.player__show-where');
const darkness = document.querySelector('.player__darkness')
const play = document.querySelector('#music-player');
const playButton = document.querySelector('.player__button');
const icon = document.querySelector('#player__icon')
playButton.addEventListener('click', function() {
    showWhere.style.display = 'none';
    darkness.style.display = 'none';
    play.play();
    play.volume = '0.2';
    icon.classList.toggle('fa-play');
    icon.classList.toggle('fa-pause')
    console.log(icon.className);
    if (icon.className === 'fas fa-2x fa-pause') {
        playButton.addEventListener('click', function() {
            play.pause();
        })
    } else if (icon.className === 'fas fa-2x fa-play') {
        playButton.addEventListener('click', function() {
            play.play();
        })
    }
    play.addEventListener('ended', function () {
        icon.classList.toggle('fa-play');
        icon.classList.toggle('fa-pause')
    })
})


