/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*{php,html,css}", "./template-parts/*.{php,html,css}"],
  theme: {
    extend: {
      fontFamily: {
        mulish: ["Mulish", "sans-serif"],
        oswald: ["Oswald", "sans-serif"],
        teko: ["Teko", "sans-serif"],
        montserrat: ["Montserrat", "sans-serif"],
      },
      colors: {
        theme_black: "#222",
        theme_light_black: "#121516",
        theme_light_gray: "#afafaf",
        theme_lighter_gray: "#f4f5f5",

        theme_gray: "#777",
        theme_gray_400: "#444",
        theme_dark_gray: "#87888a",
        theme_btn_dark_gray: "#32373c",
      },
    },
    screens: {
      xl2: { max: "1800px" },
      // => @media (max-width: 1279px) { ... }
      xl: { max: "1300px" },
      // => @media (max-width: 1023px) { ... }

      md: { max: "900px" },
      // => @media (max-width: 767px) { ... }

      sm: { max: "639px" },
      // => @media (max-width: 639px) { ... }
    },
  },
  plugins: [],
};
