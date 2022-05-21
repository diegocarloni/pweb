const Sequelize = require('sequelize');
const sequelize = new Sequelize('pweb', 'pweb', '123456',  {host: "localhost", dialect:"mysql"});

sequelize.authenticate().then(function(){
    console.log("conectado");
}).catch(function(erro){
    console.log("falha "+erro);
}) ;

module.exports = {
    Sequelize: Sequelize,
    sequelize: sequelize
}

