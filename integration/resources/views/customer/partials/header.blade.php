<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Elwin Store">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Elwin Store">
    <title>Elwin Life</title>

    <link rel="icon" type="image/png" href="{!! url('img/favicon.png') !!}">

    <link href="{!! url('vendor/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">

    <link href="{!! url('vendor/fontawesome-free/css/all.min.css') !!}" rel="stylesheet" type="text/css">

    <link href="{!! url('css/osahan.css') !!}" rel="stylesheet">
    <link href="{!! url('css/quill-snow.css') !!}" rel="stylesheet">

    <link rel="stylesheet" href="{!! url('vendor/owl-carousel/owl.carousel.css') !!}">
    <link rel="stylesheet" href="{!! url('vendor/owl-carousel/owl.theme.css') !!}">
    <script src="{!! url('js/quill.js') !!}"></script>
    <style>
        .boxd {
            position: relative;
        }

        .delete-btnd {
            position: absolute;
            top: 0;
            right: 0;
            font-size: 20px;
            cursor: pointer;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .tab-contents>.tab-pane {
            display: none
        }

        .tab-contents>.active {
            display: flex
        }


        .boxd:hover .delete-btnd {
            opacity: 1;
        }

        .ql-tooltip.ql-hidden {
            display: none;
        }

        .file-upload input[type="file"] {
            display: none;
        }

        .file-upload label {
            display: block;
            padding: 10px 15px;
            background: #1e90ff;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            text-align: center;
        }

        .file-upload label:hover {
            background: #007fff;
        }

        /* To hide file name */
        .inputfile {
            opacity: 0;
            position: absolute;
            top: 0;
        }

        #myVideo {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        #loading-button {
            background-color: blue;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        #loading-button.loading:after {
            content: "";
            display: inline-block;
            width: 16px;
            height: 16px;
            margin-left: 10px;
            border: 3px solid #fff;
            border-top-color: transparent;
            border-radius: 50%;
            animation: loading-spinner 0.8s linear infinite;
        }

        .slider-container {
            position: relative;
            width: 100%;
            height: 400px;
            overflow: hidden;
        }

        .slider {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .slides {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .slides img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .swip-controls {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1;
        }

        .swip-controls button {
            background-color: rgba(255, 255, 255, 0.5);
            border: none;
            color: black;
            cursor: pointer;
            font-size: 20px;
            font-weight: bold;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }

        .swip-controls button:hover {
            background-color: rgba(255, 255, 255, 0.7);
        }

        .swip-controls button:focus {
            outline: none;
        }
        .miniatures {
            width: 100%;
             height : 165px;
        }

        .pagination {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
        }

        .round-images {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            object-fit: cover;
        }

        .pagination button {
            background-color: rgba(255, 255, 255, 0.5);
            border: none;
            color: black;
            cursor: pointer;
            font-size: 20px;
            font-weight: bold;
            margin: 0 5px;
            padding: 5px 10px;
            transition: background-color 0.3s ease;
        }

        .hoverable {
            position: relative;
            display: inline-block;
        }

        .close-button {
            position: absolute;
            top: -10px;
            right: -10px;
            width: 20px;
            height: 20px;
            line-height: 20px;
            text-align: center;
            font-size: 16px;
            color: white;
            background-color: red;
            border-radius: 50%;
            opacity: 0;
            border: none;
            outline: none;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: opacity 0.3s ease-in-out;
        }

        .hoverable:hover .close-button {
            opacity: 1;
        }

        .pagination button.active {
            background-color: rgba(255, 255, 255, 0.7);
        }
        .pub-header__bg {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background-position: center center;
  background-attachment: scroll;
  background-size: cover;
  background-repeat: no-repeat;
  z-index: -1;
}

        @keyframes loading-spinner {
            to {
                transform: rotate(360deg);
            }
        }
    </style>

</head>
