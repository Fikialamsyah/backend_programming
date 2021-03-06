// import express
const express = require('express');

// import StudentController
const StudentController = require('../controllers/StudentController.js')

// buat object router
const router = express.Router();

// buat routing 
router.get('/', (req, res) => {
    res.send('Hello Express');
});

// buat routing student
router.get('/students/', StudentController.index);
router.post('/students/', StudentController.store);
router.put('/students/:id', StudentController.update);
router.delete('/students/:id',StudentController.destroy);

// export routing
module.exports = router;


