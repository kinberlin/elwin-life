<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ELWIN | Accueil</title>
    <!-- Favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{!! url('welcome/assets/images/favicons/apple-touch-icon.png') !!}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{!! url('welcome/assets/images/favicons/favicon-32x32.png') !!}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{!! url('welcome/assets/images/favicons/favicon-16x16.png') !!}" />
    <link rel="manifest" href="{!! url('welcome/assets/images/favicons/site.webmanifest') !!}" />
    <link href="https://vjs.zencdn.net/8.3.0/video-js.css" rel="stylesheet" />

    <meta name="description" content="Gifall HTML 5 Template " />

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Amita:wght@400;700&family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{!! url('welcome/assets/vendors/animate/animate.min.css') !!}" />
    <link rel="stylesheet" href="{!! url('welcome/assets/vendors/animate/custom-animate.css') !!}" />
    <link rel="stylesheet" href="{!! url('welcome/assets/vendors/bootstrap/css/bootstrap.min.css') !!}" />
    <link rel="stylesheet" href="{!! url('welcome/assets/vendors/bootstrap-select/css/bootstrap-select.min.css') !!}" />
    <link rel="stylesheet" href="{!! url('welcome/assets/vendors/bxslider/jquery.bxslider.css') !!}" />
    <link rel="stylesheet" href="{!! url('welcome/assets/vendors/fontawesome/css/all.min.css') !!}" />
    <link rel="stylesheet" href="{!! url('welcome/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') !!}" />
    <link rel="stylesheet" href="{!! url('welcome/assets/vendors/jquery-ui/jquery-ui.css') !!}" />
    <link rel="stylesheet" href="{!! url('welcome/assets/vendors/nice-select/nice-select.css') !!}" />
    <link rel="stylesheet" href="{!! url('welcome/assets/vendors/nouislider/nouislider.min.css') !!}" />
    <link rel="stylesheet" href="{!! url('welcome/assets/vendors/nouislider/nouislider.pips.css') !!}" />
    <link rel="stylesheet" href="{!! url('welcome/assets/vendors/odometer/odometer.min.css') !!}" />
    <link rel="stylesheet" href="{!! url('welcome/assets/vendors/owl-carousel/owl.carousel.min.css') !!}" />
    <link rel="stylesheet" href="{!! url('welcome/assets/vendors/owl-carousel/owl.theme.default.min.css') !!}" />
    <link rel="stylesheet" href="{!! url('welcome/assets/vendors/swiper/swiper.min.css') !!}" />
    <link rel="stylesheet" href="{!! url('welcome/assets/vendors/timepicker/timePicker.css') !!}" />
    <link rel="stylesheet" href="{!! url('welcome/assets/vendors/tiny-slider/tiny-slider.min.css') !!}" />
    <link rel="stylesheet" href="{!! url('welcome/assets/vendors/vegas/vegas.min.css') !!}" />
    <link rel="stylesheet" href="{!! url('welcome/assets/vendors/thm-icons/style.css') !!}">
    <link rel="stylesheet" href="{!! url('welcome/assets/vendors/slick-slider/slick.css') !!}">
    <link rel="stylesheet" href="{!! url('welcome/assets/vendors/language-switcher/polyglot-language-switcher.css') !!}">
    <link rel="stylesheet" href="{!! url('welcome/assets/vendors/reey-font/stylesheet.css') !!}">

    <!-- template styles -->
    <link rel="stylesheet" href="{!! url('welcome/assets/css/gifall.css') !!}" />
    <link rel="stylesheet" href="{!! url('welcome/assets/css/gifall-responsive.css') !!}" />
    <style>
        .ql-editor {
            user-select: none;
            pointer-events: none;
        }

        input[type="text"][data-formula][data-link][data-video] {
            display: none;
        }

        /* Example CSS code */
        div.ql-clipboard[tabindex="-1"][contenteditable="true"] {
            display: none;
        }
    </style>
    <script>
        var qlEditorDiv = document.querySelector('.ql-editor');
        qlEditorDiv.setAttribute('contenteditable', 'false');
        var input = document.querySelector('input[data-formula][data-link][data-video]');
        input.remove();

        var div = document.querySelector('div.ql-clipboard[tabindex="-1"][contenteditable="true"]');
        div.remove();
    </script>
</head>
