<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card with Shadow and Confirmation Dialog</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .card-custom {
            max-width: 350px;
            margin: auto;
            margin-top: 50px;
            /* Custom shadow */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .card-custom img {
            max-height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card card-custom shadow-lg">
            <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Card Image">
            <div class="card-body">
                <h5 class="card-title">Card Title</h5>
                <p class="card-text">This is a brief description of the card content. It provides an overview and some interesting details.</p>
                <a href="#" class="btn btn-primary" id="card-button">Go somewhere</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script>
        document.getElementById('card-button').addEventListener('click', function(event) {
            event.preventDefault();
            if (confirm('Do you want to contact us?')) {
                // Replace with the URL of the contact page
                window.location.href = 'contact.html';
            } else {
                alert('Action canceled.');
            }
        });
    </script>
</body>
</html>
