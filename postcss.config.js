import postcssNesting from "postcss-nesting";
import tailwindcss from "tailwindcss";
import autoprefixer from "autoprefixer";

/** @type {import('postcss').ProcessOptions} */
export default {
    plugins: [postcssNesting, tailwindcss, autoprefixer],
};
