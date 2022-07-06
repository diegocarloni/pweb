const Sequelize = require('sequelize');
const conexao = new Sequelize('pw12', 'root', '1234',  {host: "localhost", dialect:"mysql"});

conexao.authenticate().then(function(){
    console.log("conectado");
}).catch(function(erro){
    console.log("falha "+erro);
}) ;

module.exports = {
    Sequelize: Sequelize,
    sequelize: conexao
}

