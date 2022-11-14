const mongoose = require("mongoose")

const productSchema = new mongoose.Schema(
    {
        nomeProduto: {type: String, required: true, unique: true},
        categoria: {type: Array, required: true},
        size: {type: String},
        color: {type: String},
        img: {type: String, required: true},
        alt: {type: String, required: true, unique: true},
        promoInfo: {type: String},
        promoInfoColor: {type: String},
        promoInfoBackground: {type: String},
        price: {type: String, required: true},
    },
    {timestamps: true}

);

module.exports = mongoose.model("Product", productSchema)