// import express
const express = require('express');

// import router
const router = require('./routes/api');

// buat object express
const app = express();

// menggunakan middleware
app.use(express.json());

// menggunakan routing (router)
app.use(router);

// definisikan port
app.listen(3000, ()=> {
    console.log('Server running at http://localhost:3000');
});