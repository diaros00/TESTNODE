const express = require('express')
const chalk = require('chalk')
const debug = require('debug')('app')
const morgan = require('morgan')
const path = require('path')
const sql = require('mssql')
const filesRounter = express.Router()
const accountRounter = express.Router()
// import { fileURLToPath } from '/public/';

const app = express()
const PORT = process.env.PORT

// const config = {
//   user: 'sa', // sql user
//   password: 'P@ssw0rd@PUR', //sql user password
//   server: 'TSG-PURDBPRD01.ts.tsa.co.th', // if it does not work try- localhost
//   database: 'ContractTemplate',
//   options: {
//     trustedconnection: true,
//     enableArithAbort: true,
//     instancename: 'SQLEXPRESS', // SQL Server instance name
//   },
// }

app.use(morgan('combined'))
app.use(express.static(path.join(__dirname, '/public/')))

app.set('views', './src/views')
app.set('view engine', 'ejs')

// config.query('SELECT * from file_table', function (err, rows) {
//   res.render('files', {
//     sql: rows,
//   })
// })

filesRounter.route('/').get((req, res) => {
  // var a = req.config.query.a
  res.render('files', {
    username: 'Chatraporn.Yon',
    sex: 'male',
    file: [
      { filename: 'file1', size: '20mb', count: 1 },
      { filename: 'file2', size: '100mb', count: 2 },
      { filename: 'file3', size: '40mb', count: 3 },
    ],
  })

  // config.query('SELECT * from file_table', function (err, rows) {
  //   res.render('files', {
  //     sql: rows,
  //   })
  // })
})

app.use('/files', filesRounter)

accountRounter.route('/').get((req, res) => {
  res.render('account', {
    username: 'Chatraporn.Yon',
  })
})

app.use('/account', accountRounter)

app.get('/', (req, res) => {
  res.render('index', {
    username: 'Chatraporn.Yon',
    customer: ['Kitti', 'Kittikorn11', 'Ampon'],
  })
})

app.listen(PORT, () => {
  debug('Listening on PORT : ' + chalk.green(PORT))
})
