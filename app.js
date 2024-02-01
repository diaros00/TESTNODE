import express from 'express'
import chalk from 'chalk'
import Debug from 'debug'
import morgan from 'morgan'
import path from 'path'
import { fileURLToPath } from '/public/';

const debug = Debug('app')
const app = express()
const port = 3000

app.use(morgan('combined'))
app.use(express.static(path.join(__dirname, '/public/')))

app.get('/', (req, res) => {
  res.send('Hello born to dev. saveasdfasdf11')
})

app.listen(port, () => {
  debug('Listening on port' + chalk.green(port))
})