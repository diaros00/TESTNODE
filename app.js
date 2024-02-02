const express = require('express')
const chalk = require('chalk')
const debug = require('debug')('app')
const morgan = require('morgan')
const path = require('path')
// import { fileURLToPath } from '/public/';

const app = express()
const PORT = process.env.PORT

app.use(morgan('combined'))
app.use(express.static(path.join(__dirname, '/public/')))

app.set('views', './src/views')
app.set('view engine', 'ejs')

app.get('/', (req, res) => {
  res.render('index', {
    username: 'Chatraporn.Yon',
    customer: ['Kitti', 'Kittikorn11', 'Ampon'],
  })
})

app.listen(PORT, () => {
  debug('Listening on PORT : ' + chalk.green(PORT))
})
