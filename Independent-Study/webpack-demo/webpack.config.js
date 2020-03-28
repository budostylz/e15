const path = require('path');

module.exports = {
    entry: './src/index.js',
    output: {
        filename: 'bundle.js',
        path: path.resolve(__dirname, 'dist'),
    },
    module: {
        rules: [
            {//styles
                test: /\.css$/,
                use: [
                    'style-loader',
                    'css-loader',
                ],
            },
            {//images
                test: /\.(png|svg|jpg|gif)/,
                use: [
                    'file-loader',
                ]
            },
            {// fonts
                test: /\.(woff|woff2|eot|ttf|otf)$/,
                use: [
                    'file-loader',
                ]
            },
            {//csv, tsv
                test: /\.(csv|tsv)/,
                use: [
                    'csv-loader',
                ],
            },
            {//xml
                test: /\.xml$/,
                use: [
                    'xml-loader',
                ],
            },

        ],
    },
};