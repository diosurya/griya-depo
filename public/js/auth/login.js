document.addEventListener('DOMContentLoaded', function () {
  const loginForm = document.getElementById('login-form');
  loginForm.addEventListener('submit', function (event) {
      event.preventDefault();

      const username = document.getElementById('username').value;
      const password = document.getElementById('password').value;

      fetch('http://localhost:8000/api/login', {
          method: 'POST',
          headers: {
              'Content-Type': 'application/json'
          },
          body: JSON.stringify({
              username: username,
              password: password
          })
      })
      .then(response => {
          console.log('Response:', response);
          if (!response.ok) {
              throw new Error('Login gagal');
          }
          return response.json();
      })
      .then(data => {
          console.log('Login berhasil:', data);
          localStorage.setItem('token', data.token);
      })
      .catch(error => {
          console.error('Error:', error);
      });
  });
});
