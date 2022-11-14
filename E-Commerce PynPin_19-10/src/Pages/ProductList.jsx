import React from 'react'
import styled from "styled-components"
import Announcement from '../Components/Announcement'
import Footer from '../Components/Footer'
import Navbar from '../Components/Navbar'
import Newsletter from '../Components/Newsletter'
import Products from '../Components/Products'

const Container = styled.div`

`

const Title = styled.h1`
    margin: 20px;
`

const FilterContainer = styled.div`
    display: flex;
    justify-content: space-between;
    
`

const Filter = styled.div`
    margin: 20px;
`

const FilterText = styled.span`
    font-size: 20px;
    font-weight: 600;
    margin-right: 20px;
`

const Select = styled.select`
    padding: 6px 10px;
    margin-right: 20px;
    border-radius: 8px;
`

const Option = styled.option`
    border-radius: 8px;
`

const ProductList = () => {
  return (
    <Container>
        <Navbar/>
        <Announcement/>
        <Title>Texto</Title>
        <FilterContainer>
            <Filter>
                <FilterText>Filtros:</FilterText>
                <Select>
                    <Option disabled selected> Cor </Option>
                    <Option>Branco</Option>
                    <Option>Vermelho</Option>
                    <Option>Azul</Option>
                    <Option>Roxo</Option>
                    <Option>Amarelo</Option>
                    <Option>Rosa</Option>
                </Select>
                <Select>
                    <Option disabled selected> Tamanho </Option>
                    <Option>PP</Option>
                    <Option>P</Option>
                    <Option>M</Option>
                    <Option>G</Option>
                    <Option>GG</Option>
                    <Option>XG</Option>
                </Select>
            </Filter>
            <Filter>
                <FilterText>Ordenação:</FilterText>
                <Select>
                    <Option selected> Mais novo </Option>
                    <Option>Preço (Menor para Maior)</Option>
                    <Option>Preço (Maior para Menor)</Option>
                    <Option>Mais Populares</Option>
                </Select>
            </Filter>
        </FilterContainer>
        <Products/>
        <Newsletter/>
        <Footer/>
    </Container>
  )
}

export default ProductList