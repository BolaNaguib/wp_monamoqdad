module.exports = {
	purge: {
		enabled: true,
		content: ["./**/*.php"],
	},
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
				royal: "#7D0121",
			},
			fontFamily: {
				body: ["Roboto Mono", "monospace"],
				display: ["Lobster Two", "cursive"],
				number: ["sans-serif"],
			},
			animation: {
				fadeIn: "fadeIn 2s ease-in forwards",
				scaleIn: "fadeIn 2s ease-in forwards"
			  },
			  keyframes: {
				fadeIn: {
				  "0%": { opacity: 0 },
				  "100%": { opacity: 1 }
				},
				scaleIn: {
					"0%": { scale: 0 },
					"100%": { scale: 1 }
				  }
			  }
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
		animation: ["motion-safe"]

	},
	plugins: [require("tailwindcss-filters")],
};
