const router = require("express").Router();
const User = require("../models/User");
const CryptoJS = require("crypto-js");
const { json } = require("express");
const jwt = require("jsonwebtoken");

//Registro de Usuário
router.post("/register", async (req, res) => {
    //Possível usar aqui o if para validação de dados

    const newUser = new User({
        nome: req.body.nome,
        sobrenome: req.body.sobrenome,
        email: req.body.email,
        cpf: CryptoJS.AES.encrypt(req.body.cpf, process.env.PASS_SEC).toString(),
        telefone: CryptoJS.AES.encrypt(req.body.senha, process.env.PASS_SEC).toString(),
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


//Login de Usuário

router.post("/login", async (req, res) => {
    try{
        const user = await User.findOne({ email: req.body.email });
        if (!user && res.status(401)){
            res.status(401).json("Credenciais Inválidas");
            return;
        }
        const hashedPassword = CryptoJS.AES.decrypt(user.senha, process.env.PASS_SEC);
        const senhaOriginal = hashedPassword.toString(CryptoJS.enc.Utf8);

        if(senhaOriginal !== req.body.senha && res.status(401)){
            res.status(401).json("Credenciais Inválidas");
            return;
        }

        const accessToken = jwt.sign({
            id: user._id,
            isAdmin: user.isAdmin
        }, process.env.JWT_SECRET,{expiresIn:"3d"}
        );
        
        const { senha, ...others} = user._doc;
        
        res.status(200).json({...others, accessToken});
    }
    catch(err){
        res.status(500).json(err);
        return;
    }
})

module.exports = router;