// jshint ignore: start
/* eslint-disable */
var $ = require("jquery");

const cookieStorage = {
  getItem: (item) => {
      const cookies = document.cookie
          .split(';')
          .map(cookie => cookie.split('='))
          .reduce((acc, [key, value]) => ({ ...acc, [key.trim()]: value }), {});
      return cookies[item];
  },
  setItem: (item, value) => {
      document.cookie = `${item}=${value};`
  }
}

const storageType = cookieStorage;
const consentPropertyName = 'tva_studio_consent';
const shouldShowPopup = () => !storageType.getItem(consentPropertyName);
const saveToStorage = () => storageType.setItem(consentPropertyName, true);

window.onload = () => {
    setTimeout(() => {
        consentPopup.classList.add('hidden');
    }, 5000);

  const acceptFn = event => {
      saveToStorage(storageType);
      consentPopup.classList.add('hidden');
  }
  const consentPopup = document.getElementById('consent-popup');
  const acceptBtn = document.getElementById('accept');
  acceptBtn.addEventListener('click', acceptFn);

  if (shouldShowPopup(storageType)) {
      setTimeout(() => {
          consentPopup.classList.remove('hidden');
      }, 5000);
  }

};