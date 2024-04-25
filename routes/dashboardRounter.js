const express = require('express')
const router = express.Router()
const { sql, poolPromise } = require('./sqlConfig') // Adjust the path accordingly

router.get('/', async (req, res) => {
  try {
    const pool = await poolPromise
    const result = await pool.request().query('SELECT * FROM file_table')
    // const query = 'SELECT * FROM file_table'
    // const result = await sql.query(query)
    const data = result.recordset

    res.render('dashboard', { data })
  } catch (error) {
    console.error('Error executing query', error)
    res.status(500).send('Internal Server Error')
  }
})

module.exports = router
