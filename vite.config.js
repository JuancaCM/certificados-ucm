import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.scss",
                "resources/css/sb-admin-2.min.css",
                "resources/js/app.js",
                "resources/js/sb-admin-2.min.js",
            ],
            refresh: true,
        }),
    ], server:{host:'localhost'}
});
