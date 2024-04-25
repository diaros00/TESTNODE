const sql = require('mssql')

const config = {
  user: 'sa',
  password: 'P@ssw0rd@PUR',
  server: 'TSG-PURDBPRD01.ts.tsa.co.th',
  database: 'ContractTemplate',
  synchronize: true,
  options: {
    encrypt: true, // For Azure SQL
  },

  trustServerCertificate: true,
}

const poolPromise = new sql.ConnectionPool(config)
  .connect()
  .then((pool) => {
    console.log('Connected to SQL Server')
    return pool
  })
  .catch((err) => console.error('Error connecting to SQL Server', err))

module.exports = {
  sql,
  poolPromise,
}
