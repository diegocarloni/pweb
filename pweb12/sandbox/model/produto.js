const db = require('./db')

const Produto = db.sequelize.define('produto', {  
    titulo: {type: db.Sequelize.STRING},
    descritivo: {type: db.Sequelize.STRING},
    qtd: {type: db.Sequelize.INTEGER},
    valor: {type: db.Sequelize.DECIMAL},
    categoria: {type: db.Sequelize.STRING}
});

//Produto.sync({force: true});
Produto.sync();
console.log("produto");
module.exports = Produto;
