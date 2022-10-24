const mongoose = require("mongoose")

const userSchema = new mongoose.Schema(
    {
        nome: {type: String, required: true},
        sobrenome: {type: String, required: true},
        email: {type: String, required: true, unique: true},
        cpf: {type: String, required: true, unique: true},
        telefone: {type: String, required: true},
        genero: {type: String, required: true},
        datanasc: {type: String, required: true},
        senha: {type: String, required: true},
        isAdmin: {type: Boolean, default: false},
    },
    {timestamps: true}

);

module.exports = mongoose.model("User", userSchema);