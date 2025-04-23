module.exports = {
    plugins: [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
        // Add a custom PostCSS plugin to replace deprecated color-adjust with print-color-adjust
        {
            postcssPlugin: 'replace-color-adjust',
            Declaration(decl) {
                if (decl.prop === 'color-adjust') {
                    decl.prop = 'print-color-adjust';
                }
            }
        }
    ]
}; 