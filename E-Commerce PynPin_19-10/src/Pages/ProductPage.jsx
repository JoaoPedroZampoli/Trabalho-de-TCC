import React from 'react'
import Announcement from '../Components/Announcement'
import Navbar from '../Components/Navbar'
import Newsletter from '../Components/Newsletter'
import Footer from '../Components/Footer'
import styled from 'styled-components'
import { Add, AddShoppingCart, Remove } from '@material-ui/icons'
import { Rating } from '@mui/material'

const Container = styled.div`

`

const Wrapper = styled.div`
    padding: 50px;
    display: flex;
    width: 80vw;
    height: 60vh;
    margin: auto;
`

const ImgContainer = styled.div`
    flex: 1;
`

const Image = styled.img`
    width: 100%;
    height: 90%;
    object-fit: cover;
`

const InfoContainer = styled.div`
    flex: 1;
    padding: 0 50px;
`

const Title = styled.h1`
    font-weight: 300;
    font-size: 48px;
    margin-bottom: 12px;
`

const AdditionalText = styled.p`
    font-size: 22px;
    font-weight: 500;
    margin: 15px 0;
`

const RatingNumber = styled.p`

`

const Description = styled.p`
    margin: 10px 0 20px 0;
    font-size: 18px;
    color: #111111;
`

const Price = styled.span`
    font-weight: 200;
    font-size: 40px;
`

const FilterContainer = styled.div`
    display: inline;
    width: 100%;
    margin: 30px 0;
`

const Filter = styled.div`
    display: flex;
    align-content: center;
    align-items: center;
    margin: 10px 0;
`

const FilterTitle = styled.span`
    font-size: 20px;
    font-weight: 200;
`

const FilterColor = styled.div`
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background-color: ${props=>props.color};
    margin: 0px 5px;
    border: 1px solid gray;
    cursor: pointer;

    &:active{
        border: 2px solid black;
    }
`

const FilterSize = styled.select`
    margin-left: 10px;
    padding: 5px;

`

const FilterSizeOption = styled.option`
    
`

const AddContainer = styled.div`
    display: flex;
    align-items: center;
    width: 100%;
    justify-content: space-between;
`

const AmountContainer = styled.div`
    display: flex;
    align-items: center;
    font-weight: 700;
`

const Amount = styled.span`
    width: 30px;
    height: 30px;
    border-radius: 10px;
    border: 1px solid #9550D7;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0px 5px;
`

const ButtonAddToCart = styled.button`
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #823DB7;
    color: white;
    border: 1px solid lightgray;
    font-size: 20px;
    border-radius: 8px;
    padding: 8px 12px;

`

const ProductPage = () => {    

  return (
    <Container>
        <Navbar/>
        <Announcement/>
        <Wrapper>
            <ImgContainer>
                <Image src="https://images.unsplash.com/photo-1605131545453-6044234368a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80"/>
            </ImgContainer>
            <InfoContainer>
                <Title>Lorem Ipsum</Title>
                <Rating name="read-only" value={4.5} precision={0.5} readOnly />
                <AdditionalText>Descrição:</AdditionalText>
                <Description>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sit amet turpis nisi. Nam faucibus venenatis dolor quis pellentesque. Praesent congue nunc non dui volutpat feugiat. Sed auctor id erat vitae semper.</Description>
                <Price>R$ 129,99</Price>
                <FilterContainer>
                    <Filter>
                        <FilterTitle>Cor:</FilterTitle>
                        <FilterColor color="blue"/>
                        <FilterColor color="black"/>
                        <FilterColor color="gray"/>
                        <FilterColor color="white"/>
                    </Filter>
                    <Filter>
                        <FilterTitle>Tamanho:</FilterTitle>
                        <FilterSize>
                            <FilterSizeOption>PP</FilterSizeOption>
                            <FilterSizeOption>P</FilterSizeOption>
                            <FilterSizeOption>M</FilterSizeOption>
                            <FilterSizeOption>G</FilterSizeOption>
                            <FilterSizeOption>GG</FilterSizeOption>
                            <FilterSizeOption>XG</FilterSizeOption>
                        </FilterSize>
                    </Filter>
                </FilterContainer>
                <AddContainer>
                    <AmountContainer>
                        <Remove/>
                        <Amount>1</Amount>
                        <Add/>
                    </AmountContainer>
                    <ButtonAddToCart>
                        <AddShoppingCart/>&nbsp;Adicione no Carrinho
                    </ButtonAddToCart>
                </AddContainer>
            </InfoContainer>
        </Wrapper>
        <Newsletter/>
        <Footer/>
    </Container>
  )
}

export default ProductPage