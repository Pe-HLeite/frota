import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';

import App from './App.vue';
import PrimeVue from 'primevue/config';

// import 'primevue/resources/themes/lara-light-blue/theme.css';
// import 'primevue/resources/primevue.min.css';
// import 'primeicons/primeicons.css';

createInertiaApp({
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob('./Pages/**/*.vue')
        ),
    setup({ el, App, props }) {
        const app = createApp({ render: () => h(App, props) });
        
        app.use(PrimeVue);

        app.mount(el);
    },
});
