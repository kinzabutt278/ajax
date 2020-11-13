<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajax</title>
    <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
<div class="container">

    <form action="http://localhost/schoolM/index.php/api/getStudents" method="post" id="myForm">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary" id="submit_btn">Submit</button>

        <div id="response"></div>
    </form>

</div>
<script>

    $(function () {

        $("#myForm").submit(function(e){
            e.preventDefault();

            let formData = new FormData(document.getElementById("myForm"));

            alert("hi");
            $.ajax({
                url: "http://localhost/schoolM/index.php/api/getStudents",
                type: "post",
                dataType: "json",
                data: formData,
                // data: $("#myForm").serialize(),
                success: function (result) {
                    if (result.success)
                        $("#response").html(result.students_table);
                    else
                        alert(result.msg);
                },
                error: function (e) {
                    console.log(e);
                },
                complete: function () {

                }
            })
        })

        let count = 0;
        $("#submit_btn").on("click", function (e) {
            // e.preventDefault();

            // $.ajax({
            //     url: "http://localhost/schoolM/index.php/api/getStudents",
            //     type: "post",
            //     dataType: "json",
            //     data: {
            //         key: $("#password").val(),
            //     },
            //     success: function (result) {
            //         if (result.success)
            //             $("#response").html(result.students_table);
            //         else
            //             alert(result.msg);
            //     },
            //     error: function (e) {
            //         console.log(e);
            //     },
            //     complete: function () {
            //
            //     }
            // })


            // $.ajax({
            //     url: "http://localhost/schoolM/index.php/api/getStudents",
            //     type: "post",
            //     dataType: "json",
            //     data: {
            //         key: $("#password").val(),
            //     },
            //     success: function (result) {
            //         if (result.success)
            //             $("#response").html(result.students_table);
            //         else
            //             alert(result.msg);
            //     },
            //     error: function (e) {
            //         console.log(e);
            //     },
            //     complete: function () {
            //
            //     }
            // })


        })

    });

</script>
</body>
</html>