import { defineConfig } from 'vitest/config'

export default defineConfig({
    root: 'src',

    test: {
        include: [
            '**/test-js/*.{test,spec}.{js,mjs,cjs,ts,mts,cts,jsx,tsx}',
            '**/test-js/toolbars/*.{test,spec}.{js,mjs,cjs,ts,mts,cts,jsx,tsx}',
            '**/test-js/utilities/*.{test,spec}.{js,mjs,cjs,ts,mts,cts,jsx,tsx}',
        ],
        environment: 'happy-dom',
        globals: true,
        setupFiles: [
            'test-js/setup.js'
        ]
    },
})