import axios from "axios"

const Base_Url = "http://localhost:5000/api/"
const Token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjYzNTljYmI0Y2UzZWZmOTc1MWEzNGJkYyIsImlzQWRtaW4iOnRydWUsImlhdCI6MTY2ODk5NTk4MywiZXhwIjoxNjY5MjU1MTgzfQ.7bZQPEaEfrNgra4R9skfSU9wH522VcOvFUlPMy2InA4"

export const publicRequest = axios.create({
    baseURL: Base_Url,
})

export const userRequest = axios.create({
    baseURL: Base_Url,
    header:{token: `Bearer ${Token}`},
})