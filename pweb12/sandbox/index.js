const express = require('express');
const morgan  = require('morgan');
const cors  = require('cors');
const bodyParser  = require('body-parser');
const routerCliente = require('./config/route');
const routerProduto = require('./config/routeProduto');


const app = express();

app.use((req, res, next) => {
    res.header("Access-Control-Allow-Origin", "*");	
    res.header("Access-Control-Allow-Methods", 'GET,PUT,POST,DELETE');
    app.use(cors());
    next();
});

app.use(morgan('dev'));
app.use(bodyParser.urlencoded({extended :false}));
app.use(express.json());

app.use('/', routerCliente);
app.use('/', routerProduto);

app.listen(2020,()=>{
    console.log('nodejs started 2020');
});