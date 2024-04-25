const express = require('express')
const chalk = require('chalk')
const debug = require('debug')('app')
const morgan = require('morgan')
const path = require('path')
const sql = require('mssql')
const session = require('express-session')
const passport = require('passport')
const LdapStrategy = require('passport-ldapauth')
const bodyParser = require('body-parser')

const filesRounter = require('./routes/filesRounter')
const dashboardRounter = require('./routes/dashboardRounter')
// const authRouter = require('./routes/authRouter')

// const filesRounter = express.Router()
const accountRounter = express.Router()

const cors = require('cors')
const app = express()
const PORT = process.env.PORT

app.use(cors())
app.use(bodyParser.json())
app.use(bodyParser.urlencoded({ extended: true }))

app.use(morgan('combined'))
app.use(express.static(path.join(__dirname, '/public/')))

app.set('views', './src/views')
app.set('view engine', 'ejs')

app.use('/files', filesRounter)
app.use('/account', accountRounter)
app.use('/dashboard', dashboardRounter)

// app.use('/auth', authRouter)

// Set up sessions
app.use(
  session({
    secret: 'your_session_secret',
    resave: true,
    saveUninitialized: true,
  })
)

accountRounter.route('/').get((req, res) => {
  res.render('account', {
    username: 'Chatraporn.Yon',
  })
})

// ใชคำส่ัง path.join เพื่อเชื่อม path เต็ม ของไฟล์ myform.html
app.get('/', function (req, res) {
  res.sendFile(path.join(__dirname, 'src/views/index.html'))
})

dashboardRounter.route('/').get((req, res) => {
  res.sendFile(path.join(__dirname, 'src/views/dashboard.ejs'))
})

const ldapConfig = {
  url: 'LDAP://TS.TSA.CO.TH',
  // baseDN: 'your_ldap_base_dn',
  // username: 'your_ldap_username',
  // password: 'your_ldap_password',
}
// เมื่อมีการ POST ข้อมูลมาที่ path "/echo"
app.post('/login', function (req, res) {
  console.log(typeof req.body)
  console.log(req.body)

  const username = req.body.username
  const password = req.body.password

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
        res.redirect('/dashboard')
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

// authRouter.get('/login', (req, res) => {
//   // res.sendFile('../src/views/login.ejs')
//   // res.sendFile('./src/views/login.ejs')
// })

// app.get('/', (req, res) => {
//   res.render('index', {
//     username: 'Chatraporn.Yon',
//     customer: ['Kitti', 'Kittikorn11', 'Ampon'],
//   })
// })

// Configure LDAP strategy
passport.use(
  new LdapStrategy({
    server: {
      url: 'LDAP://TS.TSA.CO.TH',
      // bindDN: 'cn=admin,dc=example,dc=com', // Your LDAP admin DN
      // bindCredentials: 'admin-password',   // Your LDAP admin password
      // searchBase: 'ou=users,dc=example,dc=com',
      // searchFilter: '(uid={{username}})'
    },
  })
)

passport.serializeUser((user, done) => {
  done(null, user)
})

passport.deserializeUser((user, done) => {
  done(null, user)
})

app.listen(PORT, () => {
  debug('Listening on PORT : ' + chalk.green(PORT))
})

process.on('SIGINT', () => {
  sql.close()
  process.exit()
})

process.on('exit', () => {
  sql.close()
})
