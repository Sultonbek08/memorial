import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        port: 5173, // Laravel bilan to‘qnashuv bo‘lmasligi uchun boshqa port tanlayapmiz
        strictPort: true, // Agar port band bo‘lsa, xatolik yuz beradi va boshqa portga o‘tmaydi
     },
});
