import {css} from "styled-components"

export const mobile = (props) =>{
    return css`
        @media only screen and (max-width: 380px){
            ${props}
        }
    `;
        
};

export const tablet = (props) =>{
    return css`
        @media only screen and (max-width: 620px){
            ${props}
        }
    
    `
};

export const smallmonitor = (props) =>{
    return css`
        @media only screen and (max-width: 800px){
            ${props}
        }
    
    `
}

export const max700 = (props) =>{
    return css`
        @media only screen and (max-width: 700px){
            ${props}
        }
    `
}