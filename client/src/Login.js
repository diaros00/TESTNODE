import React, { useState } from 'react'
import { Container, Form, Button } from 'react-bootstrap'

const Login = () => {
  const [username, setUsername] = useState('')
  const [password, setPassword] = useState('')

  const handleSubmit = (e) => {
    e.preventDefault()
    console.log('Login clicked!')
    // Handle login logic here
  }

  return (
    <Container className='mt-5'>
      <h2>Login</h2>
      <Form onSubmit={handleSubmit}>
        <Form.Group className='mb-3' controlId='formBasicUsername'>
          <Form.Label>Username</Form.Label>
          <Form.Control
            type='text'
            placeholder='Enter username'
            value={username}
            onChange={(e) => setUsername(e.target.value)}
          />
        </Form.Group>

        <Form.Group className='mb-3' controlId='formBasicPassword'>
          <Form.Label>Password</Form.Label>
          <Form.Control
            type='password'
            placeholder='Enter password'
            value={password}
            onChange={(e) => setPassword(e.target.value)}
          />
        </Form.Group>

        <Button variant='primary' type='submit'>
          Login
        </Button>
      </Form>
    </Container>
  )
}

export default Login
