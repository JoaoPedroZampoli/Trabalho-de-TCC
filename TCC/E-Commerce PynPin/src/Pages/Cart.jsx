import React from 'react'
import styled from 'styled-components'
import Navbar from '../Components/Navbar'
import Announcement from '../Components/Announcement'
import Footer from '../Components/Footer'
import Pijama1 from "../Images/Pijama1.png"
import Pijama2 from "../Images/Pijama2.png"
import { Add, Remove } from '@material-ui/icons'
import Newsletter from '../Components/Newsletter'

const Container = styled.div`

`

const Wrapper = styled.div`
  padding: 20px;
`

const Title = styled.h1`
  font-weight: 400;
  text-align: center;
`

const Top = styled.div`
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px;
`

const TopButton = styled.button`
  padding: 10px;
  font-weight: 600;
  width: 200px;
  cursor: pointer;
  border-radius: 8px;
  border: ${props=>props.type === "filled" && "none"};
  background-color: ${props=>props.type === "filled" ? "#FFC60A" : "transparent"};
  transition: 0.6s;

  &:hover{
    box-shadow: rgba(0, 0, 0, 0.2) 0px 6px 14px 0px, rgba(0, 0, 0, 0.1) 0px 1px 2px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;
  // color: ${props=>props.type === "filled" && "black"};
`

const TopTexts = styled.div`

`

const TopText = styled.span`
  text-decoration: underline;
  cursor: pointer;
  margin: 0 10px;
`

const Bottom = styled.div`
  display: flex;
  justify-content: space-between;
`

const Info = styled.div`
  flex: 4;
  margin-right: 10%
`

const Product = styled.div`
  display: flex;
  justify-content: space-between;
`

const ProductDetail = styled.div`
  flex: 2;
  display: flex;
`

const Image = styled.img`
  width: 200px;
  border-radius: 10px;
`

const Details = styled.div`
  padding: 5px 20px;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
`

const ProductId = styled.div`

`

const ProductName = styled.span`

`

const ProductColor = styled.div`
  width: 20px;
  height: 20px;
  border-radius: 50%;
  background-color: ${props=> props.color};
`

const ProductSize = styled.span`

`

const PriceDetail = styled.div`
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  justify-content: center;
  margin-right:
`

const ProductAmountContainer = styled.div`
  display: flex;
  align-items: center;
  margin-bottom: 20px;
`

const ProductAmount = styled.div`
  font-size: 24px;
  margin: 5px;
`

const ProductPrice = styled.div`
  font-size: 30px;
  font-weight: 300;
`

const Hr = styled.hr`
  background-color: #eee;
  border: none;
  height: 1px;
  margin: 20px 0;
`

const Summary = styled.div`
  flex: 1;
  border: 1px solid lightgray;
  border-radius: 10px;
  padding: 20px;
  height: 50vh;
  box-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px 0px;
`

const SummaryTitle = styled.h1`
  font-weight: 400;
`

const SummaryItem = styled.div`
  margin: 30px 0;
  display: flex;
  justify-content: space-between;
  font-weight: ${props=>props.type === "total" && "500"};
  font-size: ${props=>props.type === "total" && "24px"};
`

const SummaryItemText = styled.span`

`

const SummaryItemPrice = styled.span`

`

const MarginCheckout = styled.div`
  height: -webkit-fill-available;
`

const SummaryButton = styled.button`
  width: 100%;
  padding: 10px;
  font-size: 18px;
  border: 1px solid lightgray;
  background-color: #FFC60A;
  color: black;
  font-weight: 600;
  border-radius: 8px;
  cursor: pointer;
  transition: 0.6s;

  &:hover{
    box-shadow: rgba(0, 0, 0, 0.2) 0px 6px 14px 0px, rgba(0, 0, 0, 0.1) 0px 1px 2px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;
  }
`

const Cart = () => {
  return (
    <Container>
      <Navbar/>
      <Announcement/>
      <Wrapper>
        <Title>Seu Carrinho</Title>
        <Top>
          <TopButton>Adicionar mais produtos</TopButton>
          <TopTexts>
            <TopText>Itens do Carrinho (2)</TopText>
            <TopText>Lista de Desejos (0)</TopText>
          </TopTexts>
          <TopButton type='filled'>Continuar</TopButton>
        </Top>
        <Bottom>
          <Info>
            <Product>
              <ProductDetail>
                <Image src={Pijama1}/>
                <Details>
                  <ProductId>1</ProductId>
                  <ProductName><b>Produto:</b> Teste1</ProductName>
                  <ProductColor color='black'/>
                  <ProductSize><b>Tamanho:</b> M</ProductSize>
                </Details>
              </ProductDetail>
              <PriceDetail>
                <ProductAmountContainer>
                  <Remove/>
                  <ProductAmount>1</ProductAmount>
                  <Add/>
                </ProductAmountContainer>
                <ProductPrice>R$ 79,99</ProductPrice>
              </PriceDetail>
            </Product>
            <Hr/>
            <Product>
              <ProductDetail>
                <Image src={Pijama2}/>
                <Details>
                  <ProductId><b>ID:</b> 2</ProductId>
                  <ProductName><b>Produto:</b> Teste2</ProductName>
                  <ProductColor color='blue'/>
                  <ProductSize><b>Tamanho:</b> G</ProductSize>
                </Details>
              </ProductDetail>
              <PriceDetail>
                <ProductAmountContainer>
                  <Remove/>
                  <ProductAmount>1</ProductAmount>
                  <Add/>
                </ProductAmountContainer>
                <ProductPrice>R$ 129,99</ProductPrice>
              </PriceDetail>
            </Product>
          </Info>
          <Summary>
            <SummaryTitle>Pedido:</SummaryTitle>
            <SummaryItem>
              <SummaryItemText>Subtotal</SummaryItemText>
              <SummaryItemPrice>R$ 209,98</SummaryItemPrice>
            </SummaryItem>
            <SummaryItem>
              <SummaryItemText>Frete Estimado</SummaryItemText>
              <SummaryItemPrice>R$ 9,90</SummaryItemPrice>
            </SummaryItem>
            <SummaryItem>
              <SummaryItemText>Desconto</SummaryItemText>
              <SummaryItemPrice>- R$ 9,90</SummaryItemPrice>
            </SummaryItem>
            <SummaryItem type="total">
              <SummaryItemText>Total</SummaryItemText>
              <SummaryItemPrice>R$ 209,98</SummaryItemPrice>
            </SummaryItem>
            <SummaryButton>Continuar</SummaryButton>
          </Summary>
        </Bottom>
      </Wrapper>
      <Newsletter/>
      <Footer/>
    </Container>
  )
}

export default Cart