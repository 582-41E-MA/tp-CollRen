/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./node_modules/flowbite/**/*.js",
  ],
  theme: {
      extend: {
        colors: {
          "clr-fonce": {
            900: "#1e1e1e",
            800: "#373737",
            700: "#505050",
            600: "#646464",
            500: "#797979",
            400: "#8e8e8e",
            300: "#a3a3a3",
            200: "#b9b9b9",
            100: "#cfcfcf",
            50: "#e5e5e5",
          },
          "clr-mid": {
            900: "#53311d",
            800: "#6c4127",
            700: "#855234",
            600: "#9d6544",
            500: "#b37958",
            400: "#c78f70",
            300: "#d8a68b",
            200: "#e7bea9",
            100: "#f2d8ca",
            50: "#fbf2ed",
          },
          "clr-pale": {
              900: "#453720",
              800: "#5b492b",
              700: "#705b39",
              600: "#866e49",
              500: "#9b835d",
              400: "#af9874",
              300: "#c3ae8f",
              200: "#d5c4ac",
              100: "#e7dbcc",
              50: "#f7f3ee",
          },
          "clr-danger": "#834E2F",
          "clr-warning": "#E2B385",
        },
      },
  },
  plugins: [
  ],
};

