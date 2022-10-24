import styled from "styled-components"
import { tablet } from "../responsive"


const Container = styled.div`
    flex: 1;
    margin: 3px;
    height: 50vh;
    position: relative;
    border-radius: 8px;
    
`

const Image = styled.img`
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(65%);
    border-radius: 8px;
    ${tablet({height: "25vh"})};
`

const Info = styled.div`
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
`

const Title = styled.h1`
    color: white;
    margin-bottom: 20px;
    font-family: "Urbanist", "Inter", sans-serif;
    letter-spacing: 2px;
    text-align: center;
`

const Button = styled.button`
    border: none;
    padding: 10px;
    background-color: #ffc60a;
    border-radius: 8px;
    color; gray;
    transition: 0.8s ease;
    cursor: pointer;
    font-weight: 600;
`

const CategoryItem = ({item}) => {
    function CategoryButtonHoverIn(event) {
        event.target.style.background = '';
        event.target.style.boxShadow = "rgba(187, 133, 237, 0.5) 0px 4px 12px";
      }
    function CategoryButtonHoverOut(event){
        event.target.style.background="";
        event.target.style.boxShadow = "";
      }
    return (
    <Container>
        <Image src={item.img} alt={item.alt} />
        <Info>
            <Title>{item.Title}</Title>
            <Button onMouseOver={CategoryButtonHoverIn} onMouseOut={CategoryButtonHoverOut}>Compre Agora</Button>
        </Info>
    </Container>
  )
}

export default CategoryItem