import React from 'react'
import Announcement from '../Components/Announcement'
import Navbar from '../Components/Navbar'
import Newsletter from '../Components/Newsletter'
import Footer from '../Components/Footer'
import styled from 'styled-components'
import { Add, AddShoppingCart, Remove } from '@material-ui/icons'
import { Rating } from '@mui/material'
import { useLocation } from "react-router-dom"
import { useState } from 'react'
import { useEffect } from 'react'
import { publicRequest } from "../requestMethods"
import { tablet } from "../responsive"

const Container = styled.div`

`

const Wrapper = styled.div`
    padding: 50px;
    display: flex;
    width: 80vw;
    min-height: 60vh;
    margin: auto;

    ${tablet({flexDirection: "column"})};
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

const RatingDiv = styled.div`
    display: flex;
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

    &:checked{
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

    ${tablet({flexDirection: "column"})};
`

const AmountContainer = styled.div`
    display: flex;
    align-items: center;
    font-weight: 700;
    
    ${tablet({marginRight: "auto"})};
    ${tablet({marginBottom: "10px"})};
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

    ${tablet({width: "100%"})};
`

const ProductPage = () => {    

    const location = useLocation();
    const id = location.pathname.split("/")[2]
    const [ product, setProduct] = useState({})
    const [color, setColor] = useState("");
    const [size, setSize] = useState("");
    const [quantity, setQuantity] = useState(1)
    const handleQuantity = (type) =>{
        if(type === "decrement"){
            if (quantity>1){
                setQuantity(quantity-1)
            }
        }
        else{
            setQuantity(quantity+1)
        }
    }

    useEffect(() => {
        const getProduct = async () => {
            try{
                const res = await publicRequest.get("/products/find/"+id)
                setProduct(res.data);
            }
            catch{

            }
        }
        getProduct()
    }, [id])
  return (
    <Container>
        <Navbar/>
        <Announcement/>
        <Wrapper>
            <ImgContainer>
                <Image src={product.img}/>
            </ImgContainer>
            <InfoContainer>
                <Title>{product.nomeProduto}</Title>
                <RatingDiv>
                    <Rating name="read-only" value={4.5} precision={0.5} readOnly />
                    <RatingNumber></RatingNumber>
                </RatingDiv>
                <AdditionalText>Descrição:</AdditionalText>
                <Description>{product.descricao}</Description>
                <Price>R$ {product.price}</Price>
                <FilterContainer>
                    <Filter>
                        <FilterTitle>Cor:</FilterTitle>
                        {product.color?.map((c) => (
                            <FilterColor id="color" name="color" type="radio" color={c} key={c} onClick={() => setColor(c)} />
                        ))}
                    </Filter>
                    <Filter>
                        <FilterTitle>Tamanho:</FilterTitle>
                        <FilterSize onChange={(e)=>setSize(e.target.value)}>
                            {product.size?.map((s) =>(
                                <FilterSizeOption key={s} onClick={() => setSize(s)}>{s}</FilterSizeOption>
                            ))}
                        </FilterSize>
                    </Filter>
                </FilterContainer>
                <AddContainer>
                    <AmountContainer>
                        <Remove onClick={()=>handleQuantity("decrement")}/>
                        <Amount>{quantity}</Amount>
                        <Add onClick={()=>handleQuantity("increment")}/>
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