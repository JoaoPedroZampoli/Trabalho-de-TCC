const router = require("express").Router();
const User = require("../models/User");
const CryptoJS = require("crypto-js");

//Registro de Usuário
router.post("/register", async (req, res) => {
    //Possível usar aqui o if para validação de dados
    
    const newUser = new User({
        nome: req.body.nome,
        sobrenome: req.body.sobrenome,
        nomecompleto: req.body.nome + " " + req.body.sobrenome,
        email: req.body.email,
        cpf: req.body.cpf,
        telefone: req.body.telefone,
        genero: req.body.genero,
        datanasc: req.body.datanasc,
        senha: CryptoJS.AES.encrypt(req.body.senha, process.env.PASS_SEC).toString(),
    });

    try{
        const savedUser = await newUser.save()
        console.log(savedUser);
        res.status(201).json(savedUser)
    }
    catch(err){
        console.log(err);
        res.status(500).json(err);
    }
});

module.exports = router;