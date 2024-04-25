// authRouter.js
const express = require('express')
const router = express.Router()
const { sql, poolPromise } = require('./sqlConfig') // Adjust the path accordingly
const ActiveDirectory = require('activedirectory2')
const session = require('express-session')

// Express session configuration
router.use(
  session({
    secret: 'your_session_secret',
    resave: true,
    saveUninitialized: true,
  })
)

// LDAP configuration
const ldapConfig = {
  url: 'LDAP://TS.TSA.CO.TH',
  // baseDN: 'your_ldap_base_dn',
  // username: 'your_ldap_username',
  // password: 'your_ldap_password',
}

// Route to handle rendering the login form

// Route to handle user login
router.post('/login', async (req, res) => {
  const { username, password } = req.body

  try {
    // Validate against SQL Server
    // const sqlQuery = `SELECT * FROM users WHERE username = '${username}' AND password = '${password}'`
    // const sqlResult = await sql.query(sqlQuery)

    // if (sqlResult.recordset.length > 0) {
    // Validate against LDAP
    const ad = new ActiveDirectory(ldapConfig)

    const username = username + '@tsa'
    ad.authenticate(username, password, (err, auth) => {
      if (err) {
        console.error('LDAP Authentication Error:', err)
        res.status(500).send('Internal Server Error')
      } else if (auth) {
        // Store username in session
        req.session.username = username
        res.redirect('/auth/dashboard')
      } else {
        res.status(401).send('Invalid credentials')
      }
    })
    // } else {
    //   res.status(401).send('Invalid credentials')
    // }
  } catch (error) {
    console.error('Error executing SQL query', error)
    res.status(500).send('Internal Server Error')
  }
})

// Route to handle the dashboard (protected route)
router.get('/dashboard', (req, res) => {
  const username = req.session.username

  if (username) {
    res.send(`Welcome to the dashboard, ${username}!`)
  } else {
    res.redirect('/auth/login')
  }
})

module.exports = router
