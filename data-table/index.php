<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data table</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>
<body>
    <div class="container">
        <h2 align="center">DataTable Example</h2>
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                    <th>Sr.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Ankit</td>
                    <td>cs.ankitpajapati@gmail.com</td>
                    <td>790526028</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ankit2</td>
                    <td>cs.ankitpajapati@gmail.com</td>
                    <td>790526028</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Ankit 3</td>
                    <td>cs.ankitpajapati@gmail.com</td>
                    <td>790526028</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Ankit4</td>
                    <td>cs.ankitpajapati@gmail.com</td>
                    <td>790526028</td>
                </tr>
            </tbody>
        </table>
    </div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#myTable").dataTable();
    });
</script>
</body>
</html>