import mask from "./blocks/mask";
import scrolling from "./blocks/scrolling";
import forms from "./blocks/forms";
import sliderSimple from "./blocks/sliderSimple";
import other from "./blocks/other";

'use strict';

window.addEventListener('DOMContentLoaded', () => {
    mask('input[type="tel"]');
    scrolling();
    forms();
    sliderSimple();
    other();
});