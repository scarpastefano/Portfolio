import 'bootstrap';
import './bootstrap';

// session message duration 4 sec
let flash = document.querySelector('#flash');
setTimeout(function () {
    flash.classList.add('transition-custom');
}, 4000);


let toast = document.querySelector('#toast-success');
setTimeout(function () {
    toast.classList.add('transition-custom');
}, 4000);