const CryptoJS = require("crypto-js");
const User = require("../models/User");

const { verifyToken, verifyTokenAndAuthorization, verifyTokenAndAdmin } = require("./verifyToken");

const router = require("express").Router();

//Update de Dados
router.put("/:id", verifyTokenAndAuthorization, async (req, res) => {
    if(req.body.senha){
        req.body.senha = CryptoJS.AES.encrypt(req.body.senha, process.env.PASS_SEC).toString();
    }
    if(req.body.cpf){
        req.body.cpf = CryptoJS.AES.encrypt(req.body.cpf, process.env.PASS_SEC).toString();
    }
    if(req.body.telefone){
        req.body.telefone = CryptoJS.AES.encrypt(req.body.telefone, process.env.PASS_SEC).toString();
    }

    try{
        const updatedUser = await User.findByIdAndUpdate(req.params.id, {
            $set: req.body
        }, {new: true});
        res.status(200).json(updatedUser);
    }
    catch(err){
        res.status(500).json(err);
    }
});

//Deletar Usuário

router.delete("/:id", verifyTokenAndAuthorization, async (req, res) => {
    try{
        await User.findByIdAndDelete(req.params.id)
        res.status(200).json("Usuário foi deletado")
    }
    catch(err){
        res.status(500).json(err)
    }
})


//Obter Usuário

router.get("/find/:id", verifyTokenAndAdmin, async (req, res) => {
    try {
      const user = await User.findById(req.params.id);
      const { senha, ...others } = user._doc;
      res.status(200).json(others);
    } catch (err) {
      res.status(500).json(err);
    }
  });
  

//Obter todos os Usuários

router.get("/", verifyTokenAndAdmin, async (req, res) => {
    const query = req.query.new
    try{
        const Users = query ? await User.find().sort({_id:-1}).limit(5) : await User.find()
        res.status(200).json(Users);
    }
    catch(err){
        res.status(500).json(err)
    }
})

//Obter Informações de Usuários

router.get("/stats", verifyTokenAndAdmin, async (req, res) => {
    const date = new Date();
    const lastYear = new Date(date.setFullYear(date.getFullYear() - 1));
  
    try {
      const data = await User.aggregate([
        { $match: { createdAt: { $gte: lastYear } } },
        {
          $project: {
            month: { $month: "$createdAt" },
          },
        },
        {
          $group: {
            _id: "$month",
            total: { $sum: 1 },
          },
        },
      ]);
      res.status(200).json(data)
    } catch (err) {
      res.status(500).json(err);
    }
});

module.exports = router;