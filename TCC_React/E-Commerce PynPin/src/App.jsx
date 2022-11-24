import {
  BrowserRouter as Router,
  Routes,
  Route,
  Navigate
} from "react-router-dom";
import HomePage from "./Pages/HomePage"
import ProductList from "./Pages/ProductList";
import ProductPage from "./Pages/ProductPage";
import Register from "./Pages/Register";
import Cart from "./Pages/Cart";
import Login from "./Pages/Login";
import Pay from "./Pages/Pay";
import Success from "./Pages/Success";

//Switch virou Routes no React Router Dom V6

const App = () => {
  const user = false
  return (
    <Router>
      <Routes>
        <Route path="/" element={<HomePage/>} />
        <Route path="/produtos/:category" element={<ProductList/>} />
        <Route path="/produto/:id" element={<ProductPage/>} />
        <Route path="/carrinho" element={<Cart/>} />
        <Route path="/cadastro" element={user ? <Navigate to="/"/> :<Register/>} />
        <Route path="/login" element={user ? <Navigate to="/"/> :<Login/>} />
      </Routes>
    </Router>
  );
};

export default App;