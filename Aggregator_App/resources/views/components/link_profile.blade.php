<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodingDung | Profile Template</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #fff;
            margin-top: 20px;
        }

        .ui-w-80 {
            width: 80px !important;
            height: auto;
        }

        .btn-default {
            border-color: rgba(24, 28, 33, 0.1);
            background: rgba(0, 0, 0, 0);
            color: #4E5155;
        }

        label.btn {
            margin-bottom: 0;
        }

        .btn-outline-primary {
            border-color: #26B4FF;
            background: transparent;
            color: #26B4FF;
        }

        .btn {
            cursor: pointer;
        }

        .text-light {
            color: #babbbc !important;
        }

        .btn-facebook {
            border-color: rgba(0, 0, 0, 0);
            background: #3B5998;
            color: #fff;
        }

        .btn-instagram {
            border-color: rgba(0, 0, 0, 0);
            background: #000;
            color: #fff;
        }

        .card {
            border: #000 1px solid;
            background-clip: padding-box;
            box-shadow: 0 1px 4px rgba(24, 28, 33, 0.012);
        }

        .row-bordered {
            overflow: hidden;
        }

        .account-settings-fileinput {
            position: absolute;
            visibility: hidden;
            width: 1px;
            height: 1px;
            opacity: 0;
        }

        .account-settings-links .list-group-item.active {
            font-weight: bold !important;
        }

        html:not(.dark-style) .account-settings-links .list-group-item.active {
            background: transparent !important;
        }

        .account-settings-multiselect~.select2-container {
            width: 100% !important;
        }

        .light-style .account-settings-links .list-group-item {
            padding: 0.85rem 1.5rem;
            border-color: rgba(24, 28, 33, 0.03) !important;
        }

        .light-style .account-settings-links .list-group-item.active {
            color: #4e5155 !important;
        }

        .material-style .account-settings-links .list-group-item {
            padding: 0.85rem 1.5rem;
            border-color: rgba(24, 28, 33, 0.03) !important;
        }

        .material-style .account-settings-links .list-group-item.active {
            color: #4e5155 !important;
        }

        .dark-style .account-settings-links .list-group-item {
            padding: 0.85rem 1.5rem;
            border-color: rgba(255, 255, 255, 0.03) !important;
        }

        .dark-style .account-settings-links .list-group-item.active {
            color: #fff !important;
        }

        .light-style .account-settings-links .list-group-item.active {
            color: #4E5155 !important;
        }

        .light-style .account-settings-links .list-group-item {
            padding: 0.85rem 1.5rem;
            border-color: rgba(24, 28, 33, 0.03) !important;
        }
    </style>
    {{-- style button --}}
    <style>
        .margin-bottom-40 {
            margin-bottom: 40px;
        }

        /* Button Sizes*/

        .btn-mod.btn-large {
            height: auto;
            padding: 13px 52px;
            font-size: 15px;
        }

        .btn-mod.btn-medium {
            height: auto;
            padding: 10px 35px;
            font-size: 13px;
        }

        .btn-mod.btn-small {
            height: auto;
            padding: 6px 16px;
            font-size: 12px;
        }

        /* Button Mod to the original Bootstrap Buttons */

        .btn-mod.btn-circle {
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            border-radius: 30px;
        }

        .btn-mod.btn-border {
            color: #000000;
            border: 2px solid #000000;
            background: transparent;
        }

        .btn-mod,
        a.btn-mod {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 4px 13px;
            color: #fff;
            background: rgba(34, 34, 34, .9);
            border: 2px solid transparent;
            font-size: 11px;
            font-weight: 400;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 2px;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            -webkit-transition: all 0.2s cubic-bezier(0.000, 0.000, 0.580, 1.000);
            -moz-transition: all 0.2s cubic-bezier(0.000, 0.000, 0.580, 1.000);
            -o-transition: all 0.2s cubic-bezier(0.000, 0.000, 0.580, 1.000);
            -ms-transition: all 0.2s cubic-bezier(0.000, 0.000, 0.580, 1.000);
            transition: all 0.2s cubic-bezier(0.000, 0.000, 0.580, 1.000);
        }

        .btn-mod.btn-border:hover,
        .btn-mod.btn-border:focus {
            color: #fff;
            border-color: transparent;
            background: #000;
        }

        .btn-mod:hover,
        .btn-mod:focus,
        a.btn-mod:hover,
        a.btn-mod:focus {
            font-weight: 400;
            color: rgba(255, 255, 255, .85);
            background: rgba(0, 0, 0, .7);
            text-decoration: none;
            outline: none;
            border-color: transparent;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        /* Reveal icon on hover */

        a.btn.btn-mod.btn-border.animation-one span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.3s;
        }

        a.btn.btn-mod.btn-border.animation-one span:after {
            font-family: FontAwesome;
            content: "\f105";
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.3s;
        }

        a.btn.btn-mod.btn-border.animation-one:hover span {
            padding-right: 25px;
        }

        a.btn.btn-mod.btn-border.animation-one:hover span:after {
            opacity: 1;
            right: 0;
        }
    </style>

</head>
