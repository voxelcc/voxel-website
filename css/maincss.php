<?php
    header("Content-type: text/css; charset: UTF-8");
    require("cssvariables.php")
?>

html {
    word-break: break-word !important;
    overflow-wrap: break-word !important;
    scroll-behavior: smooth;
}

body {
    font-family: aktiv-grotesk-extended, sans-serif;
}

.anchor {
    display: block;
    position: relative;
    top: -100px;
    visibility: hidden;
}

/* h1,
h2,
h3,
h4,
h5,
h6 {} */

h1 {
    font-weight: 700;
    /*    font-size: 100px;*/
    font-size: 80px;
}

h2 {
    font-weight: 700;
    /*    font-size: 80px;*/
    font-size: 60px;
}

h3 {
    font-weight: 700;
    /*    font-size: 60px;*/
    font-size: 40px;
}

h4 {
    font-weight: 500;
    /*    font-size: 30px;*/
    font-size: 25px;
}

h5 {
    font-weight: 500;
    font-style: italic;
    /*    font-size: 25px;*/
    font-size: 25px;
}

h6 {
    font-weight: 500;
    font-size: 20px;
    /*    font-size: 25px;*/
}

p {
    font-weight: 300;
    font-size: 16px;
}

@media (max-width: 767px) {
    h1 {
        font-size: 60px;
    }
    h2 {
        font-size: 50px;
    }
    h3 {
        font-size: 30px;
    }
    h4 {
        font-size: 20px;
    }
    h5 {
        font-size: 20px;
    }
    h6 {
        font-size: 16px;
    }
    p {
        font-size: 14px;
    }
}

/* a {}

img {}

caption {}

button {} */

.jumbotron {
    border-radius: 0px;
    text-align: center;
    min-height: 525px;
    margin-top: 20px;
    color: white;
}

.modal-dialog {
    max-width: 90%;
    margin: 1.75rem auto;
}

.modal-content {
    background-color: transparent;
    border: 0px;
}

.modal-backdrop.show {
    opacity: 0.9;
}

.close {
    position: absolute;
    top: -30px;
    right: 25px;
    font-size: 48px;
    margin-left: 50px;
    font-weight: 900'';
    z-index: 1060;
}



.footer {
    background-color: <?php echo($tertiary_colour) ?>;
}

.masthead {
    height: 25vh;
    min-height: 500px;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.kickstarter-box {
    background-color: <?php echo($tertiary_colour) ?>;
    padding: 20px;
    border-radius: 4px;
    max-width: 700px;
}

.slickimage {
    max-height: 294px;
}

.navbar {
    position: absolute;
    width: 100vw;
    height: 88px;
    top: 0px
    background-color: white;
    padding-bottom: 30px;
}

.navbar-brand {
    margin: 0px;
    font-size: 40px;
}

.sidenav {
    height: 100%;
    /* 100% Full-height */
    width: 0;
    /* 0 width - change this with JavaScript */
    position: fixed;
    /* Stay in place */
    z-index: 1030 !important;
    /* Stay on top */
    top: 0px;
    left: 0;
    background-color: #111;
    /* Black*/
    overflow-x: hidden;
    /* Disable horizontal scroll */
    padding-top: 60px;
    /* Place content 60px from the top */
    transition: 0.5s;
    /* 0.5 second transition effect to slide in the sidenav */
}


/* The navigation menu links */

.sidenav a {
    padding: 8px 8px 8px 32px;
    /*    text-decoration: none;*/
    /*    font-size: 25px;*/
    color: <?php echo($sidenav_text); ?>;
    display: block;
    transition: 0.3s;
    flex-wrap: nowrap;
    word-break: keep-all !important;
    overflow-wrap: normal !important;
}


/* When you mouse over the navigation links, change their color */

.sidenav a:hover,
.offcanvas a:focus {
        color: <?php echo($sidenav_text_hover); ?>;
} 


/* Position and style the close button (top right corner) */

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 48px;
    margin-left: 50px;
    font-weight: 900''
}


/* Use class to control open close, toggled in js */

.sidenav.openclose {
    width: 55%;
}


/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */

@media screen and (max-height: 450px) {
    .sidenav {
        padding-top: 15px;
    }
    .sidenav a {
        font-size: 18px;
    }
}

@media screen and (max-width: 575px) {
    .sidenav.openclose {
        width: 100%;
    }
}


/* Featurettes
------------------------- */

.featurette-divider {
    margin: 3rem 0;
}

.featurette-heading {
    margin-bottom: 20px;
}

@media (min-width: 40em) {
    .featurette-heading {
        font-size: 50px;
    }
}

@media (min-width: 62em) {
    .featurette-heading {
        margin-top: 1rem;
    }
}

.button-container {
    display: inline-block;
    cursor: pointer;
    padding-top: 10px
}

.bar1,
.bar2 {
    width: 30px;
    height: 5px;
    background-color: <?php echo $primary_colour; ?>;
    margin: 10px 0;
}


/*LOGIN
------------------------*/

.form-signin {
    width: 100%;
    max-width: 420px;
    padding: 15px;
    margin: auto;
}

.form-label-group {
    position: relative;
    margin-bottom: 1rem;
}

.form-label-group>input,
.form-label-group>label {
    height: 3.125rem;
    padding: .75rem;
    font-family: sans-serif;
    text-align: left;
}

.form-label-group input {
    font-size: 40px;
}

.form-label-group>label {
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    margin-bottom: 0;
    /* Override default `<label>` margin */
    line-height: 1.5;
    color: #495057;
    pointer-events: none;
    cursor: text;
    /* Match the input under the label */
    border: 1px solid transparent;
    border-radius: .25rem;
    transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
    color: transparent;
}

.form-label-group input:-ms-input-placeholder {
    color: transparent;
}

.form-label-group input::-ms-input-placeholder {
    color: transparent;
}

.form-label-group input::-moz-placeholder {
    color: transparent;
}

.form-label-group input::placeholder {
    color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
    padding-top: 1.25rem;
    padding-bottom: .25rem;
}

.form-label-group input:not(:placeholder-shown)~label {
    padding-top: .25rem;
    padding-bottom: .25rem;
    font-size: 12px;
    color: #777;
}


/* Fallback for Edge
-------------------------------------------------- */

@supports (-ms-ime-align: auto) {
    .form-label-group>label {
        display: none;
    }
    .form-label-group input::-ms-input-placeholder {
        color: #777;
    }
}


/* Fallback for IE
-------------------------------------------------- */

@media all and (-ms-high-contrast: none),
(-ms-high-contrast: active) {
    .form-label-group>label {
        display: none;
    }
    .form-label-group input:-ms-input-placeholder {
        color: #777;
    }
}

.bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

@media (min-width: 768px) {
    .bd-placeholder-img-lg {
        font-size: 3.5rem;
    }
}