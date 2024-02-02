const express = require('express')
const chalk = require('chalk')
const debug = require('debug')('app')
const morgan = require('morgan')
const path = require('path')
const filesRounter = express.Router()
const accountRounter = express.Router()
// import { fileURLToPath } from '/public/';

const app = express()
const PORT = process.env.PORT

app.use(morgan('combined'))
app.use(express.static(path.join(__dirname, '/public/')))

app.set('views', './src/views')
app.set('view engine', 'ejs')

filesRounter.route('/').get((req, res) => {
  res.render('files', {
    username: 'Chatraporn.Yon',
  })
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
