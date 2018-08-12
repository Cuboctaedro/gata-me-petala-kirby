const path = require('path')

module.exports = {
    entry: './src/js/custom/index.js',
    output: {
        path: path.resolve(__dirname, 'public/assets/js'),
        filename: 'scripts.js'
    }
};
