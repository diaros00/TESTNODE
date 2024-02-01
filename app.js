import express from 'express'
import chalk from 'chalk'
import Debug from 'debug'
import morgan from 'morgan'
const debug = Debug('app')
const app = express()
const port = 3000

app.use(morgan('combined'))

app.get('/', (req, res) => {
  res.send('Hello born to dev. saveasdfasdf')
})

app.listen(port, () => {
  debug('Listening on port' + chalk.green(port))
})
