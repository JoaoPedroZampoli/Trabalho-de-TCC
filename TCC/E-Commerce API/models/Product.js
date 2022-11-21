const mongoose = require("mongoose")

const productSchema = new mongoose.Schema(
    {
        nomeProduto: {type: String, required: true, unique: true},
        descricao: {type: String, required: true},
        categorias: {type: Array, required: true},
        size: {type: Array},
        color: {type: Array},
        inStock: {type: Boolean, default: true},
        img: {type: String, required: true},
        alt: {type: String, required: true},
        promoInfo: {type: String},
        promoInfoColor: {type: String},
        promoInfoBackground: {type: String},
        price: {type: Number, required: true},
    },
    {timestamps: true}

);

module.exports = mongoose.model("Product", productSchema)