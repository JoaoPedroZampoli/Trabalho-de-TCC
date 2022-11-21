import { Send } from '@material-ui/icons'
import React from 'react'
import styled from 'styled-components'
import { mobile, tablet } from '../responsive'


const Container = styled.div`
    height:35vh;
    background-color: #faf5ff;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
`

const Title = styled.h1`
    font-size: 70px;
    margin-bottom: 20px;
    font-family: "Urbanist", "Inter", sans-serif;
    ${mobile({fontSize: "50px"})}
`

const Description = styled.div`
    font-size: 24px;
    font-weight: 300;
    margin-bottom: 20px;
    margin-left: 15px;
    margin-right: 15px;
    ${tablet({textAlign: "center", fontSize: "18px"})}
`

const InputContainer = styled.div`
    width: 50%;
    height: 40px;
    background-color: white;
    border-radius: 1rem;
    display: flex;
    justify-content: space-between;
    border: 1px solid lightgray;
    ${tablet({width: "80%"})}
`

const Input = styled.input`
    border: none;
    border-radius: 1rem 0 0 1rem;
    flex: 8;
    padding-left: 20px;
    transition: 0.6s;
    outline: 1px solid transparent;

    &:focus-visible{
        border: 1px solid #823DB7;
        outline: 1px solid #823DB7;
    }
`

const Button = styled.button`
    flex: 1;
    border-radius: 0 1rem 1rem 0;
    border: none;
    background-color: #FFC60A;
    color: black;
    cursor: pointer;
    transition: 0.6s;

    &:hover{
        box-shadow: rgba(0, 0, 0, 0.2) 0px 6px 14px 0px, rgba(0, 0, 0, 0.1) 0px 1px 2px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;
      }
`
const Newsletter = () => {
  return (
    <Container>
        <Title>Newsletter</Title>
        <Description>Receba Novidades, Anúncios, Promoções Especiais e mais no seu E-mail.</Description>
        <InputContainer>
            <Input placeholder="Digite aqui seu E-mail" type="email"/>
            <Button>
                <Send/>
            </Button>
        </InputContainer>
    </Container>
  )
}

export default Newsletter