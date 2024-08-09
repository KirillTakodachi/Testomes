document.getElementById('openModal').addEventListener('click', function() {
    document.getElementById('registrationModal').style.display = 'block';
});

document.getElementById('closeModal').addEventListener('click', function() {
    document.getElementById('registrationModal').style.display = 'none';
});

document.getElementById('registrationForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const formData = new FormData(this);

    fetch(this.action, {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
        }
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Регистрация успешна!');
                document.getElementById('registrationModal').style.display = 'none';
            } else {
                // обработка ошибок
                alert(data.message);
            }
        })
        .catch(error => console.error('Ошибка:', error));
});
