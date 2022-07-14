import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import EasyMDE from 'easymde';

window.EasyMDE = EasyMDE;

window.setAsEditor = (elementId) => {
    return new EasyMDE({
        element: document.getElementById(elementId),
        spellChecker: false,
        forceSync: true,
    });
};
