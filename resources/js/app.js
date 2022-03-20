import ClipboardJS from 'clipboard'
import { createPopper } from '@popperjs/core/lib/popper-lite';

window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


const clipboard = new ClipboardJS('[data-copy]');
clipboard.on('success', (e) => {
    console.info('Action:', e.action);
    console.info('Text:', e.text);
    console.info('Trigger:', e.trigger);

    e.clearSelection();
});

clipboard.on('error', function(e) {
    console.error('Action:', e.action);
    console.error('Trigger:', e.trigger);
});




