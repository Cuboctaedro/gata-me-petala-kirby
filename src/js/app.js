import { addClass, removeClass, toggleClass, siblings } from "./modules/helpers.js";


var toggleTarget = function(toggleAttr, className) {
    var togglesArray = Array.from(document.querySelectorAll('[' + toggleAttr + ']')); 
    togglesArray.forEach(function(item) {
        item.addEventListener(
            'click',
            function(event) {
                var target = document.querySelectorAll(this.getAttribute(toggleAttr))[0];
                toggleClass(target, className);
                event.preventDefault();
            },
            false
        );
    });

}

toggleTarget('data-toggle-menu', 'show');
toggleTarget('data-toggle-form', 'show');
