import GLightbox from '../../node_modules/glightbox/dist/js/glightbox.js';
require('../../node_modules/glightbox/dist/css/glightbox.css');

document.addEventListener('DOMContentLoaded', function() {
    
    
    if (document.getElementsByClassName('js-image').length > 0) {
    
        let image = GLightbox({
            selector: 'js-image'
        });
    }


}, false);
