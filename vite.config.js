import { defineConfig, loadEnv } from 'vite'
import laravel, { refreshPaths } from 'laravel-vite-plugin'

export default defineConfig(({ mode }) => {
    const env = loadEnv(mode, process.cwd(), 'VITE_')
    return {
        plugins: [
            laravel({
                input: ['resources/css/app.css', 'resources/js/app.js'],
                refresh: [
                    ...refreshPaths,
                ],
            }),
        ],
        server: {
            hmr: {
                protocol: 'wss',
                host: env.VITE_APP_URL,
            },
        },
    }
})
