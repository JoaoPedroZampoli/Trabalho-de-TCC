import styled from "styled-components";
import { max700, mobile, smallmonitor, tablet } from "../responsive";
import LoginImage from "../Images/Ecommerce_Login.svg";
import LogoImage from "../Images/PynPin - Logo.png";
import { ArrowBack } from "@material-ui/icons";
import { TextField } from "@material-ui/core";


const Container = styled.div`
    width: 100vw;
    min-height: 100vh;
    /*background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url("https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80");
    background-repeat: no-repeat;
    background-size: cover;*/
    background-color: #e98dff;
    background-image: linear-gradient(223deg, #e98dff 0%, #ff9a8f 46%, #ffb53c 100%);
    display: flex;
    align-items: center;
    justify-content: center;
`

const Wrapper = styled.div`
    display: flex;
    padding: 20px;
    width: 95%;
    height: auto;
    border-radius: 12px;
    /*background: linear-gradient(rgb(255 181 60),rgb(233 141 255));
    background-color: #e98dff;
    background-image: linear-gradient(43deg, #e98dff 0%, #ff9a8f 46%, #ffb53c 100%);*/
    background: rgb(255, 239, 213, 0.3);
    border-radius: 16px;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(10.2px);
    -webkit-backdrop-filter: blur(10.2px);
    border: 1px solid rgba(255, 255, 255, 0.03);
    ${tablet({width: "85%"})}
    ${smallmonitor({height: "90%"})}

`

const ImgWrapper = styled.div`
    display: flex;
    flex-direction: column;
    width: 58%;
    border-radius: 12px;
    ${smallmonitor({display: "none"})}

`

const HeaderImage = styled.div`
    display: flex;
`

const VoltarLink = styled.a`
    display: flex;
    margin: 10px 20px;
    font-size: 24px;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    cursor: pointer;
    position: relative;
    color: rgb(60, 60, 60);
    padding-bottom: 4px;

    &:after{
        content: "";
        position: absolute;
        width: 100%;
        transform: scaleX(0);
        height: 3px;
        bottom: 0;
        left: 0;
        background-color: #823EB7;
        transform-origin: bottom right;
        transition: transform 0.25s ease-out;
    }

    &:hover{
        &:after{
            transform: scaleX(1);
            transform-origin: bottom left;
        }
    }
`

const LogoImg = styled.img`
    width: 180px;
    margin-bottom: 15px;
`

const Image = styled.img`
    height: -webkit-fill-available;
    width: 100%;
`

const FormWrapper = styled.div`
    display: flex;
    flex-direction: column;
    align-items: center;
    align-self: center;
    padding: 20px;
    width: 42%;
    border-radius: 12px;
    /*background: rgb(255, 239, 213, 0.3);
    border-radius: 16px;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(10.2px);
    -webkit-backdrop-filter: blur(10.2px);
    border: 1px solid rgba(255, 255, 255, 0.03);*/
    ${smallmonitor({width: "80%", margin: "auto"})}
    ${tablet({width: "85%"})}
    ${tablet({margin: "auto"})}
`

const Title = styled.h1`
    font-size: 28px;
    font-weight: 500;
    text-align: center;
`

const SubTitle = styled.h2`
    font-size: 20px;
    font-weight: 400;
    text-align: center;
`

const Form = styled.form`
    display: flex;
    flex-wrap: wrap;
`

const Input = styled.input`
    flex: 1;
    min-width: 80%;
    border-radius: 8px;
    border: 1.5px solid lightgray;
    margin: 20px 10px 0 10px;
    padding: 10px;
    transition: 0.6s;
    
    &:focus-visible{
        border: 1.5px solid #823DB7;
        outline: 1.5px solid #823DB7;
    }
`

const InputSenha = styled.input`
    flex: 1;
    min-width: 80%;
    border-radius: 8px;
    border: 1.5px solid lightgray;
    margin: 20px 10px 20px; 10px;
    padding: 10px;
    transition: 0.6s;
    
    &:focus-visible{
        border: 1.5px solid #823DB7;
        outline: 1.5px solid #823DB7;
    }
`

const Esqueceu = styled.div`
    display:flex;
    margin: 15px auto;
`

const Link = styled.a`
    width: 100%;
    text-align: center;
    text-decoration: underline;
    cursor: pointer;
    margin-bottom: 30px;
    color: #611799;
    font-weight: 500;
    transition: 0.4s;

    &:hover{
        color: #3A0066;
    }
`

const Button = styled.button`
    width: 40%;
    border: none;
    padding: 15px 20px;
    background: ${props => props.bg};
    color: ${props => props.cl};
    font-size: 16px;
    font-weight: 500;
    cursor: pointer;
    width: 48%;
    margin: 1%;
    border-radius: 10px;
    transition: 0.6s;
    ${mobile({width: "100%"})}

    &:hover{
        box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;
    }
`

const Register = () => {
  return (
    <Container>
        <Wrapper>
            <ImgWrapper>
                <HeaderImage>
                    <VoltarLink><ArrowBack/>Voltar</VoltarLink>
                    {/*<LogoImg src={LogoImage}/>*/}
                </HeaderImage>
                <Image src={LoginImage} alt="React Logo"/>
            </ImgWrapper>
            <FormWrapper>
            <LogoImg src={LogoImage}/>
                <Title>Bem-Vindo de Volta!</Title>
                <SubTitle>Entre em sua Conta</SubTitle>
                <Form>
                    <Input type="email" placeholder="Digite aqui o seu E-mail"/>
                    <TextField id="Teste" label="Teste" variant="outlined"/>
                    <InputSenha type="password" placeholder="Digite aqui a sua Senha"/>
                    <Link>Esqueceu sua Senha?</Link>
                    <Button bg="#FFC60A" color="#F9F9F9">Registrar-se</Button><Button bg="#823DB7" cl="#FFFFFF">Entrar</Button>
                </Form>
            </FormWrapper>
        </Wrapper>
    </Container>
  )
}

export default Register