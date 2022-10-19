import { ArrowBackIosNew, ArrowForwardIos, ArrowForward } from "@mui/icons-material"
import { useState } from "react"
import styled from "styled-components"
import {sliderItems} from "../data"

const Container = styled.div`
    width: 100%;
    height: 65vh;
    display: flex;
    position: relative;
    overflow: hidden;
`

const Arrow = styled.div`
    width: 50px;
    height: 50px;
    background-color: #fdfdfd;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    top: 0;
    bottom: 0;
    left: ${props=> props.direction === "left" && "10px"};
    right: ${props=> props.direction === "right" && "10px"};
    margin: auto;
    cursor: pointer;
    opacity: 0.7;
    z-index: 2;
`;

const Wrapper = styled.div`
    height: 100%;
    display: flex;
    transition: transform 1.5s ease;
    transform: translateX(${props=>props.slideIndex * -100}vw);
`

const Slide = styled.div`
    width: 100vw;
    height: 100%;
    display: flex;
    align-items: center;
    background-color: ${props=>props.bg};
`

const ImageContainer = styled.div`
    flex: 1;
    height: inherit;
    text-align: center;
`

const Image = styled.img`
    width: 100%;
    height: 100%;
    object-fit: cover;
`

const InfoContainer = styled.div`
    flex: 1;
    padding: 50px;
`

const Title = styled.h1`
    font-size: 70px;
`

const Description = styled.p`
    margin: 50px 0;
    font-size: 20px;
    font-weight: 500;
    letter-spacing: 3px;
`

const Button = styled.button`
    padding: 10px;
    font-size: 20px;
    display: flex;
    border-radius: 4px;
    background-color: transparent;
    cursor: pointer;
`

const Slider = () => {
  const [slideIndex, setSlideIndex] = useState(0);
  const handleClick = (direction) => {
    if(direction === "left"){
        setSlideIndex(slideIndex > 0 ? slideIndex -1 : 2);
    }
    else{
        setSlideIndex(slideIndex < 2 ? slideIndex +1 : 0);
    }
  }

  return (
    <Container>
        <Arrow direction="left" onClick={()=>handleClick("left")}>
            <ArrowBackIosNew/>
        </Arrow>
        <Wrapper slideIndex={slideIndex}>
            {sliderItems.map((item) => (
            <Slide bg={item.bg} key={item.id}>
                <ImageContainer>
                    <Image src={item.img} alt={item.alt}/>
                </ImageContainer>
                <InfoContainer>
                    <Title>{item.Title}</Title>
                    <Description>{item.Description}</Description>
                    <Button>Veja Agora&nbsp;<ArrowForward/></Button>
                </InfoContainer>
            </Slide>
            ))}
        </Wrapper>
        <Arrow direction="right" onClick={()=>handleClick("right")}>
            <ArrowForwardIos/>
        </Arrow>
    </Container>
  )
}

export default Slider