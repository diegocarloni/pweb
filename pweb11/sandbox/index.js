const express = require('express');
const morgan  = require('morgan');
const cors  = require('cors');
const bodyParser  = require('body-parser');
const router = require('./config/route');

const app = express();

app.use(morgan('dev'));
app.use(bodyParser.urlencoded({extended :false}));
app.use(express.json());
app.use(cors());
app.use('/', router);


app.listen(2020,()=>{
    console.log('nodejs started');
});