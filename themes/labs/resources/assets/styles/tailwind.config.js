/*
Tailwind - The Utility-First CSS Framework
 */

let colors = {
  'blue': '#0000FF',
  'transparent': 'transparent',
  'grey-light': '#ECECEC',
  'white': '#ffffff',
  'black': '#000000',
  'blue-light': '#BEDDFF',
}

module.exports = {
  colors: colors,

  /*
  | Class name: .{screen}:{utility}
  */

  screens: {
    sm: "576px",
    md: "768px",
    lg: "992px",
    xl: "1200px",
  },

  /*
  | Class name: .font-{name}
  */

  fonts: {
    sans: [
      "system-ui",
      "BlinkMacSystemFont",
      "-apple-system",
      "Helvetica Neue",
      "Segoe UI",
      "Roboto",
      "Ubuntu",
      "sans-serif",
    ],
  },

  /*
  | Class name: .text-{size}
  */

  textSizes: {
    xs: ".75rem", // 12px
    sm: ".875rem", // 14px
    regular: "1rem", // 16px
    base: "1.125rem", // 18px
    lg: "1.5rem", // 24px
    "2xlm": "1.75rem", // 28px
    xl: "2.25rem", // 36px
    "3xlm": "2.5rem", // 40px
    "2xl": "3rem", // 48px
    "3xl": "3.75rem", // 60px
  },

  /*
  | Class name: .font-{weight}
  */

  fontWeights: {
    normal: 400,
    medium: 500,
    semibold: 600,
    bold: 700,
    extrabold: 800,
    black: 900,
  },

  /*
  | Class name: .leading-{size}
  */

  leading: {
    none: 1,
    tight: 1.25,
    snug: 1.35,
    normal: 1.5,
    loose: 2,
  },

  /*
  | Class name: .tracking-{size}
  */

  tracking: {
    tight: "-0.05em",
    normal: "0",
    wide: "0.05em",
  },

  /*
  | Class name: .text-{color}
  */

  textColors: colors,

  /*
  | Class name: .bg-{color}
  */

  backgroundColors: colors,

  /*
  | Class name: .bg-{size}
  */

  backgroundSize: {
    auto: "auto",
    cover: "cover",
    contain: "contain",
  },

  /*
  | Class name: .border{-side?}{-width?}
  */

  borderWidths: {
    default: "1px",
    0: "0",
    2: "2px",
    4: "4px",
    8: "8px",
  },

  /*
  | Class name: .border-{color}
  */

  borderColors: global.Object.assign({ default: colors["grey-light"] }, colors),

  /*
  | Class name: .rounded{-side?}{-size?}
  */

  borderRadius: {
    none: "0",
    sm: ".125rem",
    default: ".25rem",
    lg: ".5rem",
    full: "9999px",
  },

  /*
  | Class name: .w-{size}
  */

  width: {
    auto: "auto",
    px: "1px",
    1: "0.25rem",
    2: "0.5rem",
    3: "0.75rem",
    4: "1rem",
    5: "1.25rem",
    6: "1.5rem",
    8: "2rem",
    10: "2.5rem",
    12: "3rem",
    16: "4rem",
    24: "6rem",
    32: "8rem",
    48: "12rem",
    64: "16rem",
    "1/2": "50%",
    "1/3": "33.33333%",
    "2/3": "66.66667%",
    "1/4": "25%",
    "3/4": "75%",
    "1/5": "20%",
    "2/5": "40%",
    "3/5": "60%",
    "4/5": "80%",
    "1/6": "16.66667%",
    "5/6": "83.33333%",
    full: "100%",
    screen: "100vw",
  },

  /*
  | Class name: .h-{size}
  */

  height: {
    auto: "auto",
    px: "1px",
    1: "0.25rem",
    2: "0.5rem",
    3: "0.75rem",
    4: "1rem",
    5: "1.25rem",
    6: "1.5rem",
    8: "2rem",
    10: "2.5rem",
    12: "3rem",
    16: "4rem",
    24: "6rem",
    32: "8rem",
    48: "12rem",
    64: "16rem",
    full: "100%",
    screen: "100vh",
  },

  /*
  | Class name: .min-w-{size}
  */

  minWidth: {
    0: "0",
    full: "100%",
  },

  /*
  | Class name: .min-h-{size}
  */

  minHeight: {
    0: "0",
    full: "100%",
    screen: "100vh",
  },

  /*
  | Class name: .max-w-{size}
  */

  maxWidth: {
    xs: "20rem",
    sm: "30rem",
    md: "40rem",
    lg: "50rem",
    xl: "60rem",
    "2xl": "70rem",
    "3xl": "80rem",
    "4xl": "90rem",
    "5xl": "100rem",
    full: "100%",
  },

  /*
  | Class name: .max-h-{size}
  */

  maxHeight: {
    full: "100%",
    screen: "100vh",
  },

  /*
  | Class name: .p{side?}-{size}
  */

  padding: {
    px: "1px",
    0: "0",
    1: "0.25rem",
    2: "0.5rem",
    3: "0.75rem",
    4: "1rem",
    5: "1.25rem",
    6: "1.5rem",
    8: "2rem",
    10: "2.5rem",
    12: "3rem",
    16: "4rem",
    18: "4.5rem",
    20: "5rem",
    24: "6rem",
    32: "8rem",
  },

  /*
  | Class name: .m{side?}-{size}
  */

  margin: {
    auto: "auto",
    px: "1px",
    0: "0",
    1: "0.25rem",
    2: "0.5rem",
    3: "0.75rem",
    4: "1rem",
    5: "1.25rem",
    6: "1.5rem",
    8: "2rem",
    10: "2.5rem",
    12: "3rem",
    16: "4rem",
    20: "5rem",
    24: "6rem",
    32: "8rem",
  },

  /*
  | Class name: .-m{side?}-{size}
  */

  negativeMargin: {
    px: "1px",
    0: "0",
    1: "0.25rem",
    2: "0.5rem",
    3: "0.75rem",
    4: "1rem",
    5: "1.25rem",
    6: "1.5rem",
    8: "2rem",
    10: "2.5rem",
    12: "3rem",
    16: "4rem",
    20: "5rem",
    24: "6rem",
    28: "7rem",
    32: "8rem",
  },

  /*
  | Class name: .shadow-{size?}
  */

  shadows: {
    default: "0 2px 4px 0 rgba(0,0,0,0.10)",
    md: "0 4px 8px 0 rgba(0,0,0,0.12), 0 2px 4px 0 rgba(0,0,0,0.08)",
    lg: "0 15px 30px 0 rgba(0,0,0,0.11), 0 5px 15px 0 rgba(0,0,0,0.08)",
    inner: "inset 0 2px 4px 0 rgba(0,0,0,0.06)",
    outline: "0 0 0 3px rgba(82,93,220,0.3)",
    none: "none",
  },

  /*
  | Class name: .z-{index}
  */

  zIndex: {
    auto: "auto",
    0: 0,
    10: 10,
    20: 20,
    30: 30,
    40: 40,
    50: 50,
  },

  /*
  | Class name: .opacity-{name}
  */

  opacity: {
    0: "0",
    25: ".25",
    35: ".35",
    50: ".5",
    75: ".75",
    100: "1",
  },

  /*
  |-----------------------------------------------------------------------------
  | SVG fill                                   https://tailwindcss.com/docs/svg
  |-----------------------------------------------------------------------------
  |
  | Here is where you define your SVG fill colors. By default we just provide
  | `fill-current` which sets the fill to the current text color. This lets you
  | specify a fill color using existing text color utilities and helps keep the
  | generated CSS file size down.
  |
  | Class name: .fill-{name}
  |
  */

  svgFill: {
    current: "currentColor",
    white: "#fff",
  },

  /*
  |-----------------------------------------------------------------------------
  | SVG stroke                                 https://tailwindcss.com/docs/svg
  |-----------------------------------------------------------------------------
  |
  | Here is where you define your SVG stroke colors. By default we just provide
  | `stroke-current` which sets the stroke to the current text color. This lets
  | you specify a stroke color using existing text color utilities and helps
  | keep the generated CSS file size down.
  |
  | Class name: .stroke-{name}
  |
  */

  svgStroke: {
    current: "currentColor",
  },

  /*
  |-----------------------------------------------------------------------------
  | Modules                  https://tailwindcss.com/docs/configuration#modules
  |-----------------------------------------------------------------------------
  |
  | Here is where you control which modules are generated and what variants are
  | generated for each of those modules.
  |
  | Currently supported variants:
  |   - responsive
  |   - hover
  |   - focus
  |   - active
  |   - group-hover
  |
  | To disable a module completely, use `false` instead of an array.
  |
  */

  modules: {
    appearance: ["responsive"],
    backgroundAttachment: ["responsive"],
    backgroundColors: ["responsive", "hover", "focus"],
    backgroundPosition: ["responsive"],
    backgroundRepeat: ["responsive"],
    backgroundSize: ["responsive"],
    borderCollapse: [],
    borderColors: ["responsive", "hover", "focus"],
    borderRadius: ["responsive"],
    borderStyle: ["responsive"],
    borderWidths: ["responsive"],
    cursor: ["responsive"],
    display: ["responsive"],
    flexbox: ["responsive"],
    float: ["responsive"],
    fonts: ["responsive"],
    fontWeights: ["responsive", "hover", "focus"],
    height: ["responsive"],
    leading: ["responsive"],
    lists: ["responsive"],
    margin: ["responsive"],
    maxHeight: ["responsive"],
    maxWidth: ["responsive"],
    minHeight: ["responsive"],
    minWidth: ["responsive"],
    negativeMargin: ["responsive"],
    opacity: ["responsive"],
    outline: ["focus"],
    overflow: ["responsive"],
    padding: ["responsive"],
    pointerEvents: ["responsive"],
    position: ["responsive"],
    resize: ["responsive"],
    shadows: ["responsive", "hover", "focus"],
    svgFill: ["responsive", "hover", "focus"],
    svgStroke: ["responsive", "hover", "focus"],
    tableLayout: ["responsive"],
    textAlign: ["responsive"],
    textColors: ["responsive", "hover", "focus"],
    textSizes: ["responsive"],
    textStyle: ["responsive", "hover", "focus"],
    tracking: ["responsive"],
    userSelect: ["responsive"],
    verticalAlign: ["responsive"],
    visibility: ["responsive"],
    whitespace: ["responsive"],
    width: ["responsive"],
    zIndex: ["responsive"],
  },

  /*
  |-----------------------------------------------------------------------------
  | Plugins                                https://tailwindcss.com/docs/plugins
  |-----------------------------------------------------------------------------
  |
  | Here is where you can register any plugins you'd like to use in your
  | project. Tailwind's built-in `container` plugin is enabled by default to
  | give you a Bootstrap-style responsive container component out of the box.
  |
  | Be sure to view the complete plugin documentation to learn more about how
  | the plugin system works.
  |
  */

  plugins: [
    require("tailwindcss/plugins/container")({
      center: true,
      padding: "1rem",
    }),
    require("tailwindcss-grid/index.js")({
      grids: [1, 2, 3, 4, 5, 6, 8, 10, 12],
      gaps: {
        0: "0",
        1: "0.25rem",
        2: "0.5rem",
        4: "1rem",
        8: "2rem",
      },
      variants: ["responsive"],
    }),
  ],

  /*
  |-----------------------------------------------------------------------------
  | Advanced Options         https://tailwindcss.com/docs/configuration#options
  |-----------------------------------------------------------------------------
  |
  | Here is where you can tweak advanced configuration options. We recommend
  | leaving these options alone unless you 32ly need to change them.
  |
  */

  options: {
    prefix: "",
    important: false,
    separator: ":",
  },
};
