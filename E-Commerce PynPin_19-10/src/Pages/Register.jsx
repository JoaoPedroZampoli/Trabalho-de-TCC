import styled from "styled-components"



const Container = styled.div`
    width: 100vw;
    height: 100vh;
    background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url("https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80");
    background-repeat: no-repeat;
    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: center;
`

const Wrapper = styled.div`
    padding: 20px;
    width: 40%;
    border-radius: 12px;
    background-color: white;
`

const Title = styled.h1`
    font-size: 24px;
    font-weight: 500;
    text-align: center;
`

const Form = styled.form`
    display: flex;
    flex-wrap: wrap;
`

const Input = styled.input`
    flex: 1;
    min-width: 90%;
    border-radius: 8px;
    border: 1px solid lightgray;
    margin: 20px 10px 0 10px;
    padding: 10px;
    transition: 0.4s;

    &:focus-visible{
        border: 1px solid #823DB7;
        outline: 1px solid #823DB7;
    }
`

const Agreement = styled.span`
    font-size: 12px;
    margin: 20px 0;
`

const Button = styled.button`
    width: 40%;
    border: none;
    padding: 15px 20px;
    background-color: #823DB7;
    color: white;
    font-size: 16px;
    cursor: pointer;
`

const Register = () => {
  return (
    <Container>
        <Wrapper>
            <Title>Crie sua Conta</Title>
            <Form>
                <Input placeholder="Digite aqui o seu Nome"/>
                <Input placeholder="Digite aqui o seu Sobrenome"/>
                <Input placeholder="Digite aqui o seu E-mail"/>
                
                <Input placeholder="Digite aqui o seu CPF"/>
                <Input placeholder="Digite aqui o seu Telefone"/>
                <Input placeholder="Selecione o seu Gênero"/>
                <Input type="date" placeholder="Digite aqui a sua Data de Nascimento"/>
                <Input placeholder="Digite aqui a sua Senha"/>
                <Input placeholder="Confirme aqui a sua Senha"/>
                <Agreement>Ao criar a conta, declaro que aceito os <b>Termos de Uso</b> e a <b>Política de Privacidade</b>, incluindo como meus dados são processados</Agreement>
                <Button>Criar</Button>
            </Form>
        </Wrapper>
    </Container>
  )
}

export default Register