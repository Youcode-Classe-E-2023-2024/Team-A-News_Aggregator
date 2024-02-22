<script src="https://cdn.tailwindcss.com"></script>
<form id="registration-form">
    @csrf
    <h1 class="text-red-500" id="errors_here"></h1>
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Register</button>
</form>

<script>
    let errors = document.querySelector('#errors_here');

    document.getElementById('registration-form').addEventListener('submit', function (event) {
        // alert('hey');
        event.preventDefault();

        fetch('/api/register', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            },
            body: JSON.stringify({
                name: this.elements['name'].value,
                email: this.elements['email'].value,
                password: this.elements['password'].value
            })
        })
            .then(response => {
                console.log(response); // Log the response
                return response.json();
            })
            .then(data => {
                console.log(data); // Handle token
                if (data.errors) {
                    errors.textContent = data.errors.join(', ');
                } else {
                    errors.textContent = '';
                }
            })
            .catch(error => console.error('Error:', error));

    });
</script>
