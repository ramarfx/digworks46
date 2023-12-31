import { Collapse } from 'flowbite';

// set the target element that will be collapsed or expanded (eg. navbar menu)
const $targetEl = document.getElementById('targetEl');

// optionally set a trigger element (eg. a button, hamburger icon)
const $triggerEl = document.getElementById('triggerEl');

// optional options with default values and callback functions
const options = {
    onCollapse: () => {
        console.log('element has been collapsed');
        $targetEl.classList.add('hidden');
    },
    onExpand: () => {
        console.log('expand');
        $targetEl.classList.add('md:hidden');
    },
    onToggle: () => {
    },
};

const instanceOptions = {
    id: 'targetEl',
    override: true
};


/*
 * $targetEl: required
 * $triggerEl: optional
 * options: optional
 */
const collapse = new Collapse($targetEl, $triggerEl, options, instanceOptions);
