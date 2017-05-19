// 搭建服务器
var express = require("express");
var todoController = require("./controller/todocontroller");
var app = express();

// 监听
app.listen("5000");

// 配置ejs视图引擎
app.set("view engine","ejs");

// 配置服务器识别静态文件
app.use(express.static("./public"));

// 调用方法 传实参
todoController(app);
