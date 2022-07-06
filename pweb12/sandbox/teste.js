const Sequelize = require('sequelize');
const sequelize = new Sequelize('test', 'root', 'Onix2016',  {host: "localhost", dialect:"mysql"});

sequelize.authenticate().then(function(){
    console.log("conectado");
}).catch(function(erro){
    console.log("falha "+erro);
}) ;