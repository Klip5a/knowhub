import { defineConfig } from "vite";
import vue from "@vitejs/plugin-vue";

// https://vite.dev/config/
export default defineConfig({
  plugins: [vue()],
  server: {
    host: "0.0.0.0", // Чтобы Vite мог слушать запросы в контейнере
    port: 5173,
    watch: {
      usePolling: true, // Для совместимости с Docker
    },
  },
});
