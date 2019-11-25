<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script
        src="https://code.jquery.com/jquery-3.2.0.min.js"
        integrity="sha256-JAW99MJVpJBGcbzEuXk4Az05s/XyDdBomFqNlM3ic+I="
        crossorigin="anonymous"></script>
    <title>Ajax Indicator</title>
    <style>
        .modal-busy
        {
            position: fixed;
            z-index: 999;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            background-color: Black;
            filter: alpha(opacity=60);
            opacity: 0.6;
            -moz-opacity: 0.8;
        }
        .center-busy
        {
            z-index: 1000;
            margin: 300px auto;
            padding: 0px;
            width: 130px;
            filter: alpha(opacity=100);
            opacity: 1;
            -moz-opacity: 1;
        }
        .center-busy img
        {
            height: 128px;
            width: 128px;
        }
    </style>
</head>
<body>
    <h1>Fill the form to show  </h1>
    <form id="indicatorForm">
        <table>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input type="text" name="name" id="name"/> </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="text" name="email" id="email"/> </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" id="submit"/>
                </td>
            </tr>
        </table>
    </form>
    <div class="modal-busy" style="display: none">
        <div class="center-busy">
            <img alt="" src="img/ajax-loading.gif" />
        </div>
    </div>
</body>
</html>



<script type="text/javascript">
    $("form#indicatorForm").on("submit",function (e) {
        e.preventDefault();
        var name = $("#name").val();
        var email = $("#email").val();

        if (name == ""){
            alert("Please enter name");
        } else if (email == ""){
            alert("Please enter email ");
        } else{
            $(".modal-busy").show('fast');
                $.post("ajax.php",{key:"getData",name:name,email:email},function (response) {
                  // alert(response);
                    var data = response.split('^');
                    if (data[1] == "success"){
                      //  alert("Your data is saved");
                        $("#name").val("");
                        $("#email").val("");
                        $(".modal-busy").hide('fast');

                    } else{
                        alert("Some error occured !");
                    }

                });
        }
    });
























</script>