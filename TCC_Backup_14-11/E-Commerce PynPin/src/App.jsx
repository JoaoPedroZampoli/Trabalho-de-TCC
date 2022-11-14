import HomePage from "./Pages/HomePage"
import ProductList from "./Pages/ProductList";
import ProductPage from "./Pages/ProductPage";
import Register from "./Pages/Register";
import Cart from "./Pages/Cart";
import Login from "./Pages/Login";
import Pay from "./Pages/Pay";
import Success from "./Pages/Success";


const App = () => {
  return (
    /*<Router>
      <Switch>
        <Route path="/pay">
          <Pay/>
        </Route>
        <Route path="/success">
          <Success/>
        </Route>
      </Switch>
    </Router>*/
    <Login/>
  );
};

export default App;