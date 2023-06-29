import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

function confirmDelete() {
    return confirm('Do you really want to delete this book?');
}
