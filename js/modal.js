var modal = document.getElementById('modal');
var open = document.getElementById('popup-login__open');
var close = document.getElementById('popup-login__close');

    open.addEventListener('click', function() {
        modal.style.display = 'block';
        open.style.display = 'none';
    })

    close.addEventListener('click', function() {
        modal.style.display = 'none';
        open.style.display = 'block';
    })

    window.onclick = function (event) {
        if(event.target === modal) {
            modal.style.display = 'none';
            open.style.display = 'block';
        }
    }

