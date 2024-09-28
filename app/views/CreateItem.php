<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/af63d23d76.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" type="text/css" href="/v_store/app/assets/css/icon.css">
    <link rel="stylesheet" type="text/css" href="/v_store/app/assets/css/table.css">
    <script src="v_store/app/assets/js/main.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>Doan Anh Quan Portfolio</title>
</head>

<body>
    <section id="contact-me">
        <div class="title">
            Let's <strong style="color: #f75023"> "Create"</strong> New Item!
        </div>
        <div id="contact-info">
            <form id="contact-me-form" method="POST" action="http://localhost/v_store/Items/Add">
                <div id="form-error">
                    <div id="form-error-heading">
                        Please make sure that your form input value satisfy these conditions:
                    </div>
                </div>
                <div id="contact-me-input-fields">
                    <input type="text" placeholder="Your Item Name" name="ItemName" id="ItemName">
                    <input type="text" placeholder="YourItem Code" name="ItemCode" id="ItemCode">
                    <input type="date" placeholder="Your Expried Date" name="ItemExpriedDate" id="Quanity">
                    <input type="text" placeholder="Your Quantity" name="ItemQuantity" id="Quanity">
                    <input type="text" placeholder="Your Note" name="ItemNote" id="Note">
                    >
                    <input type="submit" id="send-button" value="Add" onclick="validateForm()">
                </div>
            </form>
        </div>
    </section>

</body>

</html>