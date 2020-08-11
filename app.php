<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uSound</title>

    <link rel="icon" href="images/icons/logo-black.png">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Varta:wght@300;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body class="app">
<main>

    <section class="app-top-content">
        <div class="app-nav__container">
            <nav class="app-nav">
                <div class="app-nav__logo-box">
                    <img src="images/icons/logo.png" alt="Logo" class="app-nav__logo">
                </div>

                <div class="app-nav__group">
                    <div class="app-nav__item">
                        <a href="#" class="app-nav__link">Search</a>
                    </div>


                        <div class="app-nav__item">
                            <a href="#" class="app-nav__link">Browse</a>
                        </div>


                        <div class="app-nav__item">
                            <a href="#" class="app-nav__link">Your music</a>
                        </div>


                        <div class="app-nav__item">
                            <a href="#" class="app-nav__link">Profile</a>
                        </div>
                </div>
            </nav>
        </div>
    </section>

    <div class="player">
        <div class="player__bar">
            <div class="player__bar__left">
                <div class="player__bar__left__content">
                    <span class="player__bar__left__album-link">
                        <img src="images/album-placeholder.png" alt="Album Cover" class="player__bar__left__album-link__image">
                    </span>
                    <div class="player__bar__left__track-info">
                        <span class="player__bar__left__track-info__name">
                            <span>Lost It All</span>
                        </span>
                        <span class="player__bar__left__track-info__artist">
                            <span>Black Veil Brides</span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="player__bar__middle">
                <div class="player__bar__middle__content player__bar__middle__controls">
                    <div class="player__bar__middle__buttons">
                        <button class="player__bar__middle__buttons__button player__bar__middle__buttons__button--shuffle" title="Shuffle">
                            <img src="images/icons/shuffle.png" alt="Shuffle" class="player__bar__middle__buttons__icon player__bar__middle__buttons__icon--shuffle">
                        </button>

                        <button class="player__bar__middle__buttons__button player__bar__middle__buttons__button--previous" title="Previous">
                            <img src="images/icons/previous.png" alt="Previous" class="player__bar__middle__buttons__icon player__bar__middle__buttons__icon--previous">
                        </button>

                        <button class="player__bar__middle__buttons__button player__bar__middle__buttons__button--play" title="Play">
                            <img src="images/icons/play.png" alt="Play" class="player__bar__middle__buttons__icon player__bar__middle__buttons__icon--play">
                        </button>

                        <button class="player__bar__middle__buttons__button player__bar__middle__buttons__button--pause" title="pause">
                            <img src="images/icons/pause.png" alt="Pause" class="player__bar__middle__buttons__icon player__bar__middle__buttons__icon--pause">
                        </button>

                        <button class="player__bar__middle__buttons__button player__bar__middle__buttons__button--next" title="Next">
                            <img src="images/icons/next.png" alt="Next" class="player__bar__middle__buttons__icon player__bar__middle__buttons__icon--next">
                        </button>

                        <button class="player__bar__middle__buttons__button player__bar__middle__buttons__button--repeat" title="Repeat">
                            <img src="images/icons/repeat.png" alt="Repeat" class="player__bar__middle__buttons__icon player__bar__middle__buttons__icon--repeat">
                        </button>
                    </div>

                    <div class="player__bar__progressBar">
                        <span class="player__bar__progressBar__time player__bar__progressBar__time--current">0.00</span>
                        <div class="player__bar__progressBar__bar">
                            <div class="player__bar__progressBar__bar__background">
                                <div class="player__bar__progressBar__bar__progress"></div>
                            </div>
                        </div>
                        <span class="player__bar__progressBar__time player__bar__progressBar__time--remaining">0.00</span>
                    </div>
                </div>
            </div>

            <div class="player__bar__right">
                <div class="player__bar__right__volumeBar">

                    <button class="player__bar__right__volumeBar__controlButton" title="Volume Button">
                        <img src="images/icons/volume.png" alt="Volume Icon" class="player__bar__right__volumeBar__icon player__bar__right__volumeBar__icon--mute">
                    </button>

                    <div class="player__bar__progressBar__bar player__bar__progressBar__bar--volume">
                        <div class="player__bar__progressBar__bar__background">
                            <div class="player__bar__progressBar__bar__progress"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>
