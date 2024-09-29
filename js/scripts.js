$('#submit').on('click', function() {
    const name = $('#name').val();
    const email = $('#email').val();
    const subject = $('#subject').val();
    const body = $('#body').val();

    // Prosta walidacja
    if (name && email && subject && body) {
        $.ajax({
            type: "POST",
            url: "send_email.php",
            data: { name: name, email: email, subject: subject, body: body },
            success: function(response) {
                alert(response); // Wyświetlenie odpowiedzi
                $('#myForm')[0].reset(); // Resetowanie formularza
            },
            error: function() {
                alert('Wystąpił błąd. Proszę spróbować ponownie.');
            }
        });
    } else {
        alert('Proszę wypełnić wszystkie pola.');
    }
});
