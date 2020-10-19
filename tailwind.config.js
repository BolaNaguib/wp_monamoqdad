module.exports = {
	// purge: {
	// 	enabled: true,
	// 	content: ["./**/*.php"],
	// },
	theme: {
		extend: {
			filter: {
				grayscale: "grayscale(1)",
				nograyscale: "grayscale(0)",
			},
			colors: {
				main: "#303030",
				secondary: "#0374ff",
				orange: "#f1543a",
			},
			fontFamily: {
				body: ["Roboto Mono", "monospace"],
				display: ["Lobster Two", "cursive"],
				number: ["sans-serif"],
			},
		},
	},
	variants: {
		filter: ["responsive", "hover", "focus"],
		zIndex: ["responsive", "hover"],
		borderRadius: ["responsive", "hover"],
		opacity: ["group-hover"],
		margin: ["group-hover"],
		scale: ["group-hover", "hover"],
		translate: ["responsive", "group-hover", "hover"],
		backgroundColor: ["group-hover", "hover"],
	},
	plugins: [require("tailwindcss-filters")],
};
