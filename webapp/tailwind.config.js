/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{js,ts,jsx,tsx,mdx}",
  ],
  theme: {
    extend: {
      colors: {
        brand: {
          blue: "#52C1EE",
          dark: "#0B1221",
        },
      },
      fontFamily: {
        display: ["Inter", "Pretendard", "Noto Sans KR", "system-ui", "sans-serif"],
      },
      keyframes: {
        marquee: {
          "0%": { transform: "translateX(0)" },
          "100%": { transform: "translateX(-50%)" },
        },
        rollDown: {
          "0%": { transform: "translateY(-16%)", opacity: 0 },
          "60%": { transform: "translateY(6%)", opacity: 1 },
          "100%": { transform: "translateY(0)", opacity: 1 },
        },
      },
      animation: {
        marquee: "marquee 30s linear infinite",
        rollDown: "rollDown 1.1s ease-out both",
      },
    },
  },
  plugins: [],
};

