document.getElementById('bookingForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const email = document.getElementById('email').value;
    const productId = document.getElementById('product_id').value;

    fetch('book_now.php?product_id=' + productId, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams('email=' + encodeURIComponent(email))
    })
    .then(response => response.text())
    .then(data => {
        alert(data);
        document.getElementById('bookingForm').reset();
        var bookingModal = bootstrap.Modal.getInstance(document.getElementById('bookingModal'));
        bookingModal.hide();
    })
    .catch(error => console.error('Error:', error));
});