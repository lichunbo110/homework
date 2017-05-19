var bodyParser = require("body-parser");
var urlencode = bodyParser.urlencoded({extended:false});

var item = [{name:"animal"},{name:30},{name:"165cm"}];

// 引入模块
var mongoose = require("mongoose");

// 使用mongoose对象连接数据库
mongoose.connect("mongodb://todo:000000@ds147711.mlab.com:47711/tododb");

// 创建数据库字段的类型(声明存储内容是什么类型)
var todoSchema = new mongoose.Schema({
    name:String
});

// 创建一个数据模型对象
var Todo = mongoose.model("todo",todoSchema);

// 使用数据模型对象向数据库中存储数据
Todo({name:"animal"}).save(function(err){
    if(err) throw err;
    console.log("存储成功");
});

// 处理逻辑(增删改查)
module.exports = function(app){
    app.get("/todo",function(req,res){
        // 使用数据模型对象查询数据库中所有的内容 {}代表所有
        Todo.find({},function(err,data){
            if(err) throw err;
            // 将从数据库中查询到的内容,返回给客户端
            res.render("index",{item:data});
        })
        // res.render("index",{item:item});
    });
    app.post("/todo",urlencode,function(req,res){
        Todo(req.body).save(function(err,data){
            if(err) throw err;
            res.json(data);
        });
        // item.push(req.body);
        // res.json(item);
    });
    app.delete("/todo/:item",function(req,res){
        Todo.find({name:req.params.item}).remove(function(err,data){
            if(err) throw err;
            res.json(data);
        });
        // res.json(item);
        // item = item.filter(function(todo){
        //     var data = todo.name !== req.params.item;
        //     return data;
        // })
        // res.json(item);
    })
};