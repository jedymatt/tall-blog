import './bootstrap';

import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()

import EasyMDE from 'easymde';

window.EasyMDE = EasyMDE;

window.initEasyMDE = (elementId) => {
    const textArea = document.getElementById(elementId);

    const easymde = new EasyMDE({
        element: textArea,
        spellChecker: false
    });

    easymde.codemirror.on('change', () => {
        textArea.value = easymde.value();
    });

    return easymde;
}
