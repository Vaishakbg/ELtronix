import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite';
import { resolve } from 'path';

export default defineConfig({
  plugins: [tailwindcss()],

  server: {
    host: 'localhost',
    port: 5173,
    strictPort: true,
    origin: 'http://localhost:5173',
  },

  build: {
    outDir: 'dist',
    emptyOutDir: true,
    manifest: true,
    rollupOptions: {
      input: {
        app: resolve(__dirname, 'assets/js/app.js'),
      },
    },
  },
});