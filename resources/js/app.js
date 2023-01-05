import './bootstrap';
console.log('Bonjour laravel js');
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/Linda.css',
                'resources/js/app.js',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
});
