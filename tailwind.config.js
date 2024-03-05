/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
  theme: {
    extend: {
        colors: {
            "primary-color": "var(--primary-color)",
            "secondary-color": "var(--secondary-color)",
            "accent-color": "var(--accent-color)",
            "spotify-green": "#1DB954",
            "spotify-hover-green": "#1ed760",
        },
    },
  },
  plugins: [],
}

