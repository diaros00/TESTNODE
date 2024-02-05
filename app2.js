const Connection = require('tedious').Connection
const Request = require('tedious').Request

const config = {
  server: 'TSG-PURDBPRD01.ts.tsa.co.th',
  authentication: {
    type: 'default',
    options: {
      userName: 'sa', // update me
      password: 'P@ssw0rd@PUR', // update me
    },
  },
}

const connection = new Connection(config)

connection.on('connect', (err) => {
  if (err) {
    console.log(err)
  } else {
    executeStatement()
  }
})

function executeStatement() {
  request = new Request('select * from file_table', (err, rowCount) => {
    if (err) {
      console.log(err)
    } else {
      console.log(`${rowCount} rows`)
    }
    connection.close()
  })

  request.on('row', (columns) => {
    columns.forEach((column) => {
      if (column.value === null) {
        console.log('NULL')
      } else {
        console.log(column.value)
      }
    })
  })

  connection.execSql(request)
}

const express = require('express')
const app = express()
const port = 3000

app.get('/', (req, res) => {
  res.send(executeStatement())
})

app.listen(port, () => {
  console.log(`Example app listening on port ${port}`)
})
