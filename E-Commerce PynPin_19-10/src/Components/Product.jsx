import { AddShoppingCart, FavoriteBorder, OpenInNew, ShoppingCartOutlined, Star, StarHalf } from "@material-ui/icons"
import styled from "styled-components"

const ProductLike = styled.div`
    position: absolute;
    top: 0;
    right: 0;
    margin: 10px;
    opacity: 0;
    transition: 0.6s ease;
    color: black;
`

const PromoInfo = styled.span`
    padding: 5px 12px;
    position: absolute;
    border-radius: 8px;
    margin: 12px;
    font-weight: 500;
    color: ${props=>props.promoInfoColor};
    background-color: ${props=>props.promoInfoBackground};
    opacity: 0.6;
    transition: 0.7s ease;
`

const ProductPrice = styled.h4`
    color: #343434;
`

const Container = styled.div`
    flex: 1;
    margin: 5px;
    max-width: 300.5px;
    height: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    border-radius: 8px;

    &:hover ${ProductLike}{
        opacity: 1;
    }

    &:hover ${PromoInfo}{
        opacity: 1;
    }

    &:hover ${ProductPrice}{
        color: black;
    }
`

const Card = styled.div`
    background: #fff;
    padding: 20px;
    position: relative;
    border-radius: 8px;
    box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
    margin: 10px;
    max-width: 280px;
    max-height: 420px;
    cursor: pointer;
`

const ImageDiv = styled.div`

`



const Image = styled.img`
    border-radius: 4px;
    width: 220px;
    height: 270px;
    object-fit: cover;
`



const ProductDetails = styled.div`

`

const ProductTitle = styled.h3`

`

const ProductRate = styled.div`
    font-size: 15px;
    color: #ffcd4e;
    margin: 5px 5px 5px 0;
`

const DivProductPrice = styled.div`
    display: flex;
    justify-content: space-between;
    color: #e94560;
`

const AddButton = styled.button`
    background: none;
    color: #9550D7;
    font-size: 20px;
    transition: 0.5s;
    border: 1px solid rgb(3 0 71 / 9%);
    width: 35px;
    height: 35px;
    border-radius: 5px;
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: center;
    
    &:hover{
        background-color: #9550D7;
        color: #fff;
    }
`

const Product = ({item}) => {
  return (
    <Container>
       <Card>
       <PromoInfo promoInfoBackground={item.promoInfoBackground} promoInfoColor={item.promoInfoColor}>{item.promoInfo}</PromoInfo>
            <ImageDiv>
                
                <Image src={item.img} alt={item.alt}/>
                <ProductLike>
                    <FavoriteBorder color="white"/>
                </ProductLike>
            </ImageDiv>
            <ProductDetails>
                <ProductTitle>{item.nomeProduto}</ProductTitle>
                <ProductRate>
                    <Star/>
                    <Star/>
                    <Star/>
                    <Star/>
                    <StarHalf/>
                </ProductRate>
                <DivProductPrice>
                    <ProductPrice>{item.price}</ProductPrice>
                    <AddButton><ShoppingCartOutlined/></AddButton>
                </DivProductPrice>
            </ProductDetails>
       </Card>
    </Container>
  )
}

export default Product
