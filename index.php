<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container" style="margin-top:100px">
        <div class="row justify-content-center">
            <div class="col-md-6 col-md-offset-3" align="center">
                <input id="name" placeholder="Name" class="form-control mb-3">
                <input id="email" placeholder="Email" class="form-control mb-3">
                <input id="subject" placeholder="Subject" class="form-control mb-3">
                <textarea class="form-control mb-3" id="body" placeholder="Email Body"></textarea>
                <input type="button" onclick="sendEmail()" value="Send An Email" class="btn btn-outline-dark btn-lg btn-block">
            </div>
        </div>
    </div>

    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/main.js"></script>
    

</body>
</html>