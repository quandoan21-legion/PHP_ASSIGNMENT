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

    <section>
        <button>
            <a href="http://localhost/v_store/Items/CreateItemForm" target="" rel="noopener noreferrer">Add New</a>
        </button>
        <table>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Item Code</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Expired Date</th>
                    <th scope="col">Note</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $Items = $input["Items"];
                // echo "<pre>";
                // var_dump($Items);
                // echo "</pre>";
                // die();
                foreach ($Items as $Item) {
                    echo "<pre>";

                    echo '                
                    <tr style="background-color: #dacfe6;">
                    <td data-label="Data 1" style="font-weight: bold;">' . $Item["id"] . '</td>
                    <td data-label="Data 2">' . $Item["item_code"] . '</td>
                    <td data-label="Data 3">' . $Item["item_name"] . '</td>
                    <td data-label="Data 3">' . $Item["quantity"] . '</td>
                    <td data-label="Data 3">' . $Item["expried_date"] . '</td>
                    <td data-label="Data 3">' . $Item["note"] . '</td>
                    <td data-label="Data 4"><a href="http://localhost/v_store/Items/EditItem/' . $Item["id"] . '">Edit</a></td>
                    <td data-label="Data 4"><a href="http://localhost/v_store/Items/DeleteItem/' . $Item["id"] . '">Delete</a></td>
                </tr>';
                }
                ?>
            </tbody>
        </table>

    </section>
</body>

</html>