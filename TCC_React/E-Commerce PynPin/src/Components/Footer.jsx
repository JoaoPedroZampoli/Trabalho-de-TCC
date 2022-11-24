import { Facebook, Instagram, Map, Twitter, WhatsApp, Phone, Mail } from '@material-ui/icons'
import React from 'react'
import styled from 'styled-components'
import LogoImage from '../Images/PynPin - Logo.png'
import { tablet } from '../responsive'

const Container = styled.div`
    display: flex;
    ${tablet({flexDirection: "column"})}
`

const Logo = styled.img`
    width: 120px;
`

const Description = styled.p`
    margin: 20px 0;
`

const SocialContainer = styled.div`
    display: flex;
`

const SocialIcon = styled.div`
    width: 40px;
    height: 40px;
    border-radius: 50%;
    color: white;
    background-color: #${props=>props.color};
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 20px;
    cursor: pointer;
`

const Left = styled.div`
    flex: 1;
    display: flex;
    flex-direction: column;
    padding: 20px;
`

const Center = styled.div`
    flex: 1;
    padding: 20px;
    ${tablet({display: "none"})}
`

const Title = styled.h3`
    margin-bottom: 30px;
`

const List = styled.ul`
    margin: 0;
    padding: 0;
    list-style: none;
    display: flex;
    flex-wrap: wrap;
`

const ListItem = styled.li`
    width: 50%;
    margin-bottom: 10px;
    cursor: pointer;
`
const Right = styled.div`
    flex: 1;
    padding: 20px;
    ${tablet({backgroundColor: "#f8f8f8"})}
`

const ContactItem = styled.div`
    margin-bottom: 20px;
    display: flex;
    align-items: center;
`

const Payment = styled.img`
    width: 50%;
`

const Footer = () => {
  return (
    <Container>
        <Left>
            <Logo src={LogoImage}></Logo>
            <Description>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In semper purus mauris, at aliquam risus vestibulum eu. Etiam ut aliquet leo, sed malesuada purus. Sed sagittis ultricies facilisis. Pellentesque sed ultricies est. Praesent ut molestie sapien, vitae tincidunt ligula.</Description>
            <SocialContainer>
                <SocialIcon color="3B5999">
                    <Facebook/>
                </SocialIcon>
                <SocialIcon color="E4405F">
                    <Instagram/>
                </SocialIcon>
                <SocialIcon color="55ACEE">
                    <Twitter/>
                </SocialIcon>
                <SocialIcon color="48C857">
                    <WhatsApp/>
                </SocialIcon>
            </SocialContainer>
        </Left>
        <Center>
            <Title>Mapa do Site</Title>
            <List>
                <ListItem>Home</ListItem>
                <ListItem>Carrinho</ListItem>
                <ListItem>Moda Masculina</ListItem>
                <ListItem>Moda Feminina</ListItem>
                <ListItem>Acessórios</ListItem>
                <ListItem>Minha Conta</ListItem>
                <ListItem>Meus Pedidos</ListItem>
                <ListItem>Lista de Desejos</ListItem>
                <ListItem>Termos e Condições</ListItem>
            </List>
        </Center>
        <Right>
            <Title>Contatos</Title>
            <ContactItem><Map style={{marginRight: "10px"}}/>Endereço Qualquer</ContactItem>
            <ContactItem><Phone style={{marginRight: "10px"}}/>Número Qualquer</ContactItem>
            <ContactItem><Mail style={{marginRight: "10px"}}/>E-mail Qualquer</ContactItem>
            <Payment src=""/>
        </Right>
    </Container>
  )
}

export default Footer