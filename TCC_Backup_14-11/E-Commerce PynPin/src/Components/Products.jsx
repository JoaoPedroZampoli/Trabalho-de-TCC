import styled from "styled-components"
import { popularProducts } from "../data"
import { tablet } from "../responsive"
import Product from "./Product"

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

const Products = () => {
  return (
    <Container>
        {popularProducts.map (item=>(
            <Product item={item} key={item.id}/>
        ))}
    </Container>
  )
}

export default Products