import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/ui/css/app.css", "resources/ui/js/app.js"],
            refresh: true,
        }),
    ],
});
