import React from 'react'
import { useState } from 'react'
import { useLocation } from 'react-router-dom'
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
    const location = useLocation();
    const cat = location.pathname.split("/")[2]
    const [filters, setFilters] = useState({});
    const handleFilters = (e) => {
        const value = e.target.value;
        setFilters({
            ...filters,
            [e.target.name]: value,
        });
    };
    console.log(filters)
    const [sort, setSort] = useState("newestItems");
  return (
    <Container>
        <Navbar/>
        <Announcement/>
        <Title>{cat}</Title>
        <FilterContainer>
            <Filter>
                <FilterText>Filtros:</FilterText>
                <Select name="color" onChange={handleFilters}>
                    <Option disabled selected> Cor </Option>
                    <Option name="white" value="white">Branco</Option>
                    <Option name="red" value="red">Vermelho</Option>
                    <Option name="blue" value="blue">Azul</Option>
                    <Option name="purple" value="purple">Roxo</Option>
                    <Option name="yellow" value="yellow">Amarelo</Option>
                    <Option name="pink" value="pink">Rosa</Option>
                </Select>
                <Select name="size" onChange={handleFilters}>
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
                <Select onChange={(e) => setSort(e.target.value)}>
                    <Option value={"newestItems"}>Mais novo </Option>
                    <Option value={"ascItems"}>Preço (Menor para Maior)</Option>
                    <Option value={"descItems"}>Preço (Maior para Menor)</Option>
                </Select>
            </Filter>
        </FilterContainer>
        <Products cat={cat} filters={filters} sort={sort} />
        <Newsletter/>
        <Footer/>
    </Container>
  )
}

export default ProductList