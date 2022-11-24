import { useEffect, useState } from "react"
import styled from "styled-components"
import { popularProducts } from "../data"
import { tablet } from "../responsive"
import Product from "./Product"
import axios from "axios"

const Container = styled.div`
  padding: 20px;
  display: grid;
  justify-content: space-between;
  grid-template-columns: repeat(auto-fill, 280px); /* 2 */
  ${tablet({gridTemplateColumns: "repeat(auto-fill, 100%)"})}
  grid-gap: 1rem;

  &::after{
    content: "";
    flex: auto;
  }
`

const SectionTitle = styled.h1`
  font-weight: 600;
  display: flex;
  width: 100%;
  justify-content: center;
  margin: 10px;
  font-size 44px;
`

const Products = ({ cat, filters, sort }) => {
  const [products, setProducts] = useState([]);
  const [filteredProducts, setFilteredProducts] = useState([]);

  useEffect(() => {
    const getProducts = async () => {
      try {
        const res = await axios.get(
          cat
            ? `http://localhost:5000/api/products?category=${cat}`
            : "http://localhost:5000/api/products"
        );
        setProducts(res.data);
      } catch (err) {}
    };
    getProducts();
  }, [cat]);

  useEffect(() => {
    cat &&
      setFilteredProducts(
        products.filter((item) => {
          return Object.entries(filters).every(([key, value]) => {
            return item[key].includes(value);
          });
        })
      );
    console.log(filteredProducts);
  }, [products, cat, filters]);

  useEffect(() => {
    if (sort === "newestItems") {
      setFilteredProducts((prev) =>
        [...prev].sort((a, b) => a.createdAt - b.createdAt)
      );
    } else if (sort === "ascItems") {
      setFilteredProducts((prev) =>
        [...prev].sort((a, b) => a.price - b.price)
      );
    } else {
      setFilteredProducts((prev) =>
        [...prev].sort((a, b) => b.price - a.price)
      );
    }
    console.log(sort)
  }, [sort]);

  return (
    <Container>
        {cat
        ? popularProducts.map((item) => <Product item={item} key={item.id} />)
        : products
            .slice(0, 6)
            .map((item) => <Product item={item} key={item.id} />)}
    </Container>
  )
}

export default Products