import 'bootstrap';
import './bootstrap';

// session message duration 3 sec
let flash = document.querySelector('#flash');
setTimeout(function () {
    flash.classList.add('hidden');
}, 4000);