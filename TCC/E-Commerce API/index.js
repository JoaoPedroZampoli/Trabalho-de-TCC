const express = require("express");
const app = express();
const cors = require('cors')
const mongoose = require("mongoose");
const dotenv = require("dotenv");
const userRoute = require("./routes/user");
const authRoute = require("./routes/auth");
const productRoute = require("./routes/product");
const cartRoute = require("./routes/cart");
const orderRoute = require("./routes/order");



dotenv.config();

mongoose.connect(process.env.MONGO_URL).then(()=>console.log("DBConnection Successful")).catch((err)=>{console.log(err);});

app.use(express.json());
app.use(cors())

app.get('/products/:id', function (req, res, next) {
  res.json({msg: 'This is CORS-enabled for all origins!'})
})

app.listen(80, function () {
  console.log('CORS-enabled web server listening on port 80')
})

app.use("/api/auth", authRoute);
app.use("/api/users", userRoute);
app.use("/api/products", productRoute);
app.use("/api/cart", cartRoute);
app.use("/api/orders", orderRoute);

app.get("/api/test", () => {
    console.log("Test is Successful");
})
app.listen(process.env.PORT || 5000, ()=>{
    console.log("Backend server is running");
});