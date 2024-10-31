import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/viewer.js',  // 新添加的入口文件
            ],
            refresh: true,
        }),
    ],
    // 如果需要处理一些 CommonJS 模块
    optimizeDeps: {
        include: ['@grapecity/activereports', '@grapecity/activereports-localization']
    }
});