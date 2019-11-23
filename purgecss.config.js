module.exports = {
    content: ["./site/**/*.php"],
    css: ['./static/*.css'],
    //whitelistPatterns: [/red$/],
    extractors: [{
        extractor: class {
            static extract(content) {
                return content.match(/[A-z0-9-:\/]+/g) || []
            }
        },
        extensions: ["html","php"]
    }]
};
