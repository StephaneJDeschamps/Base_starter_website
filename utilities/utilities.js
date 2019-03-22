/* ! utilities.js v1.0.3 | MIT License | https://github.com/StephaneJDeschamps/base_starter_website */
'use strict'; // Mode strict du JavaScript

/* Utilities functions */

function getRandomInteger(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

function requestInteger(message, min, max) {
  do {
    var integer = parseInt(window.prompt(message));
  }
  while (isNaN(integer) == true || integer < min || integer > max);
  return integer;
}

function showImage(source) {
  document.write('<img src="' + source + '">');
}

function initEvent(selector, event, handler) {
  document.querySelector(selector).addEventListener(event, handler);
}

function saveDomStorage(name, data) {
  var jsonData = JSON.stringify(data);
  localStorage.setItem(name, data);
}

function loadDomStorage(name) {
  var jsonData = localStorage.getItem(name);
  var loadedData = JSON.parse(data);
  return loadedData;
}