import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
// resources/js/bootstrap.js
// ici on peut initialiser axios, alpine, etc. (optionnel)
import 'whatwg-fetch'; // polyfill (optionnel)
// tu peux initialiser axios si tu l'utilises:
// window.axios = require('axios');
// window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
