<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
<!--    <link href="css/bootstrap.min.css" rel="stylesheet">-->
<!--    <link href="css/custom.css" rel="stylesheet">-->
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.min.css">

</head>
<body>


<div class="container">
    <div class="layout">
        <div class="row justify-content-md-center">


            <div class="form-group">
                <select name="city" id="city"  data-placeholder="Choose a Country..." class="chosen-select form-control">
                    <option value="">Select City</option>
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="c">C</option>
                    <option value="d">D</option>
                </select>
            </div>
        </div>
    </div>
</div>










<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- JS -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min.js">
</script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script>
    $(function(){
        $(".chosen-select").chosen()
    });
</script>

</body>
</html>