<form id="login-form">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
</form>

<script>
    document.getElementById('login-form').addEventListener('submit', function(event) {
        event.preventDefault();

        fetch('/api/login', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify({
                email: this.elements['email'].value,
                password: this.elements['password'].value
            })
        })
            .then(response => response.json())
            .then(data => {
                console.log(data.token); // Handle token
            })
            .catch(error => console.error('Error:', error));
    });
</script>
