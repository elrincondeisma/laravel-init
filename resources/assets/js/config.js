/**
 * Config
 * -------------------------------------------------------------------------------------
 * ! IMPORTANT: Make sure you clear the browser local storage In order to see the config changes in the template.
 * ! To clear local storage: (https://www.leadshook.com/help/how-to-clear-local-storage-in-google-chrome-browser/).
 */

'use strict';

// JS global variables
let config = {
  colors: {
    primary: '#5a8dee',
    secondary: '#69809a',
    success: '#39da8a',
    info: '#00cfdd',
    warning: '#fdac41',
    danger: '#ff5b5c',
    dark: '#495563',
    black: '#000',
    white: '#fff',
    body: '#f2f2f6',
    headingColor: '#516377',
    axisColor: '#a8b1bb',
    borderColor: '#e9ecee'
  },
  colors_label: {
    primary: '#5a8dee29',
    secondary: '#69809a29',
    success: '#39da8a29',
    info: '#00cfdd29',
    warning: '#fdac4129',
    danger: '#ff5b5c29',
    dark: '#49556329'
  },
  colors_dark: {
    cardColor: '#283144',
    headingColor: '#d8deea',
    axisColor: '#8295ba',
    borderColor: '#36445d'
  },
  enableMenuLocalStorage: true // Enable menu state with local storage support
};

let assetsPath = document.documentElement.getAttribute('data-assets-path'),
  baseUrl = document.documentElement.getAttribute('data-base-url') + '/',
  templateName = document.documentElement.getAttribute('data-template'),
  rtlSupport = true; // set true for rtl support (rtl + ltr), false for ltr only.
