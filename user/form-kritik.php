<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kritikan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <h2>Form Kritikan</h2>
    <form action="https://formspree.io/f/mwkjpkev" method="post" id="contact-form">
        <div class="form-group">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" placeholder="name">
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" placeholder="email">
        </div>
        <div class="form-group">
            <label for="message" class="form-label">Message</label>
            <textarea name="message" id="message" rows="3"></textarea>
        </div>
        <button type="submit" class="btn-btn-primary">Kirim</button>
    </form>

    <script src="tankyou.js"></script>
</body>

</html>