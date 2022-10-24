import React from 'react'
import styled from 'styled-components'
import LogoImage from '../Images/PynPin - Logo.png'
import { Badge } from '@material-ui/core';
import {Search, SupportAgent, ShoppingCartOutlined, FavoriteBorder, PersonOutline} from '@mui/icons-material';
import {mobile} from "../responsive.js"

const Container = styled.div`
  height:60px;
  ${mobile({height: "50px;"})}
`

const Wrapper = styled.div`
  padding: 10px 20px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  ${mobile({padding: "10px 0px;;"})}
`

const Left = styled.div`
  flex: 1;
  display: flex;
  align-items: center;
`

const CService = styled.span`
  font-size:14px;
  cursor: pointer;
  ${mobile({display: "none"})}
`

const SearchContainer = styled.div`
  border: 1px solid lightgray;
  display: flex;
  border-radius:8px;
  align-items: center;
  margin-left: 25px;
  padding-right: 5px;
`

const Input = styled.input`
  border: none;
  width: 100%;
  border-radius:8px 0 0 8px;
  padding: 7px;
  margin-right: 5px;
`

const Center = styled.div`
  flex: 1;
  text-align: center;

`

const Logo = styled.img`
  font-weight: bold;
  width: 100px;
  cursor: pointer;
  ${mobile({width: "80px", paddingLeft: "6px;"})}
`

const Right = styled.div`
  flex: 1;
  display: flex;
  text-align: center;
  align-items: center;
  justify-content: flex-end;
  ${mobile({flex:2, justifyContent: "center;"})}
`

const MenuItem = styled.div`
  font-size: 14px;
  cursor: pointer;
  margin: 0 13px;
  ${mobile({fontSize: "12px", marginLeft: "6px;"})}
`

const Navbar = () => {
  return (
    <Container>
      <Wrapper>
        <Left>
          <Logo src={LogoImage} alt="PynPin"/>
        </Left>
        <Center>
          <SearchContainer>
            <Input/>
            <Search style={{color:"#4a4a4a",fontSize:16}}/>
          </SearchContainer>
        </Center>
        <Right>
          <MenuItem><PersonOutline/></MenuItem>
          <MenuItem>
            <Badge badgeContent={1} color="primary">
            <ShoppingCartOutlined color="action" />
            </Badge>
          </MenuItem>
          <MenuItem>
            <FavoriteBorder color="action"/>
          </MenuItem>
          <MenuItem>
          <CService>
            <SupportAgent color="action"/>
          </CService>
          </MenuItem>
        </Right>
      </Wrapper>
    </Container>
  )
}

export default Navbar