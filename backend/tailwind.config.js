/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "../frontend/src/**/*.{js,ts,jsx,tsx,mdx}",
    "./templates/**/*.html.twig",
  ],
  theme: {
    colors: {
      green95: "#067A7B",
      gray95: "#CCCCCC",
      blue95: "#1818B7",
      red95: "#FD0100",
      white95: "#FFFFFF",
      yellow95: "#FEFF99",
    },
    extend: {},
  },
  plugins: [],
};
