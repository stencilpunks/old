export default async function (eleventyConfig) {
	// plugins

	// shortcodes

	// passthroughs
	eleventyConfig.addPassthroughCopy('./assets');

	eleventyConfig.setServerOptions({
		watch: ['_site/**/*.css', '_site/**/*.js'],
	});

	return {
		dir: {
			layouts: '_layouts',
		},
		templateFormats: ['html', 'liquid', 'md'],
		markdownTemplateEngine: 'liquid',
		htmlTemplateEngine: 'liquid',
	};
}
