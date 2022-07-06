var express = require("express");
const res = require("express/lib/response");
var router = express.Router();
var Produto = require("../model/produto");


router.get("/produto", function (req, res) {
  Produto.findAll().then(function(obj){    
      res.send(obj);
    }).catch(function(err){
      res.send('Oops! something went wrong, : ', err);
    });
  });

router.get("/produto/:id", function (req, res) {
  Produto.findAll({ where : {id: req.params.id }}).then(function(obj){    
      res.send(obj);
    }).catch(function(err){
      res.send('Oops! something went wrong, : ', err);
    });
  });

router.post("/produto", function (req, res) {
    Produto.create({
        titulo: req.body.titulo,
        descritivo: req.body.descritivo,
        qtd: req.body.qtd,
        valor: req.body.valor,
        categoria: req.body.categoria }).then(
          function(){
            res.send("produto criado com sucesso !!!"+ req.body.titulo);
          }).catch(
            function(erro){
              res.send("ocorreu um erro !!");
            }
          );
});

router.put("/produto/:id", function (req, res) { 
  Produto.update({
    titulo: req.body.titulo,
    descritivo: req.body.descritivo,
    qtd: req.body.qtd,
    valor: req.body.valor,
    categoria: req.body.categoria},
    {
      where: {id: req.params.id}
    }).then(
        function(){
          res.send("produto alterado com sucesso !!!"+ req.body.titulo);
        }).catch(
          function(erro){
            res.send("ocorreu um erro !!");
          }
        );

});

router.delete("/produto/:id", function (req, res) {  
  Produto.destroy(    
    {where: {id: req.params.id}}
    ).then(
        function(){
          res.send("produto removido com sucesso !!!"+req.params.id);
        }).catch(
          function(erro){
            res.send("ocorreu um erro !!");
          }
        );

});

module.exports = router;