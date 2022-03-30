<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"
            integrity="sha512-eP6ippJojIKXKO8EPLtsUMS+/sAGHGo1UN/38swqZa1ypfcD4I0V/ac5G3VzaHfDaklFmQLEs51lhkkVaqg60Q=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<style>

    @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,400;1,700&display=swap');

    body {
        background: #f9f9f9; /* fallback for old browsers */
        font-family: "Lato", sans-serif;
        color: #151515;
    }
    a {
        color: black;
        font-weight: 600;
        font-size: 0.85em;
        text-decoration: none;
    }
    label {
        color: black;
        font-weight: 600;
        font-size: 0.85em;
    }
    input:focus {
        outline: none;
    }
    .container {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 86vh;
        background-color: white;
        background-image: url("<?= IMAGES ?>Hero_General.png");
        background-repeat: no-repeat;
        background-size: contain;
    background-position-y: 143px;
    }
    .form {
        display: flex;
        width: auto;
        background: #fff;
        margin: 15px;
        padding: 25px 40px;
        padding-top: 5px;
        border: 1px solid #ccc;
    }
    .sign-in-section {

    }
    .sign-in-section h6 {
        margin-top: 0px;
        font-size: 0.75em;
    }
    .sign-in-section h1 {
        text-align: center;
        font-weight: 700;
        position: relative;
    }
    .sign-in-section h1:after {
        position: absolute;
        content: "";
        height: 5px;
        bottom: -15px;
        margin: 0 auto;
        left: 0;
        right: 0;
        width: 40px;
        background: #2a92bd;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #2a92bd, #2195c4);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #2a92bd, #2195c4); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        -o-transition: 0.25s;
        -ms-transition: 0.25s;
        -moz-transition: 0.25s;
        -webkit-transition: 0.25s;
        transition: 0.25s;
    }
    .sign-in-section h1:hover:after {
        width: 100px;
    }
    .sign-in-section ul {
        list-style: none;
        padding: 0;
        margin: 0;
        text-align: center;
    }
    .sign-in-section ul > li {
        display: inline-block;
        padding: 10px;
        font-size: 15px;
        width: 20px;
        text-align: center;
        text-decoration: none;
        margin: 5px 2px;
        border-radius: 50%;
        box-shadow: 0px 3px 1px #0000000f;
        border: 1px solid #e2e2e2;
    }
    .sign-in-section p {
        text-align: center;
        font-size: 0.85em;
    }
    .form-field {
        display: block;
        width: 300px;
        margin: 10px auto;
    }
    .form-field label {
        display: block;
        margin-bottom: 10px;
    }
    .form-field input[type="email"],
    input[type="password"] {
        width: -webkit-fill-available;
        padding: 15px;
        border-radius: 10px;
        border: 1px solid #e8e8e8;
    }
    .form-field input::placeholder {
        color: #e8e8e8;
    }
    .form-field input:focus {
        border: 1px solid #2a92bd;
    }
    .form-field input[type="checkbox"] {
        display: inline-block;
    }
    .form-options {
        display: block;
        margin: auto;
        width: 300px;
    }
    .checkbox-field {
        display: inline-block;
        float: left;
    }
    .form-options a {
        float: right;
        text-decoration: none;
    }
    .btn {
        padding: 15px;
        font-size: 1em;
        width: 100%;
        border-radius: 25px;
        border: none;
        margin: 20px 0px;
    }
    .btn-signin {
        cursor: pointer;
        background: #2a92bd;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #2a92bd, #2195c4);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #2195c4, #2a92bd); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        color: #fff;
    }
    .links a:nth-child(1) {
        float: left;
    }
    .links a:nth-child(2) {
        float: right;
    }
    .navv{
        display: flex;
        width: 100%;
        height: 50px;
        background: #2a92bd;
    }
    .navoneside{
        display: flex;
        width: 30%;
        flex-direction: row;

    }
    .navoneside h2{
        margin-left: 20px;
        margin-top: 10px;
        color: white;
    }
</style>
<body>
<input type="hidden" id="HTTP_HOST" value="<?= HTTP_HOST ?>">
<div class="navv">
    <div class="navoneside">
        <h2>FireFly</h2>
    </div>
    <div class="navootherside"></div>
</div>
<div class="container">

    <div class="form" id="target" >
        <div class="sign-in-section">
            <h1>Log in</h1>
            <ul>
                <li style="cursor: pointer"><i class="fab fa-facebook-f"></i></li>
                <li style="cursor: pointer"><i class="fab fa-google"></i></li>
                <li style="cursor: pointer"><i class="fab fa-twitter"></i></li>
            </ul>
            <p>or use your email</p>
            <p style="color:red;" class="errorMessage"></p>
            <form method="POST">
                <div class="form-field">
                    <label for="email">Email</label>
                    <input id="email" type="email" placeholder="Email" />
                </div>
                <div class="form-field">
                    <label for="password">Password</label>
                    <input id="password" type="password" placeholder="Password" />
                </div>
                <div class="form-options">
                    <div class="checkbox-field">
                        <input id="rememberMe" type="checkbox" class="checkbox" />
                        <label for="rememberMe">Remember Me</label>
                    </div>
                    <a href="#">Forgot Password?</a>
                </div>
                <div class="form-field">
                    <input type="submit"  id="login_btn" class="btn btn-signin" value="Submit" />
                </div>
            </form>
            <div class="links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
            </div>
        </div>
    </div>
    
</div>
<div class="navv">
    <div class="navoneside">
        <h2></h2>
    </div>
    <div class="navootherside"></div>
</div>
<script type="text/javascript">

    $( "#target" ).submit(function( event ) {
        let data = {}
        let HTTP_HOST=$("#HTTP_HOST").val();
        let email = $('#email').val()
        let password = $('#password').val()
        let rememberme = $('#rememberMe').val()
            data = {'email':email,'password':password,'rememberme':rememberme}
            sendLoginFormData(HTTP_HOST+"login",data)
                .done(function( Response,textStatus ) {
                   if(Response.Message === "success")
                   {
                       window.location.href = "createquote";
                   }
                   else{

                    $('.errorMessage').text(Response.Message)
                   }
                }).fail(function( jqXHR, textStatus ) {
                alert( "form not submitted " + textStatus );
            });


        event.preventDefault();
    });

 const sendLoginFormData=($url,$data={})=>{

     return  $.ajax({
         url: $url,
         method: "POST",
         data: $data,
     });
 }
</script>
</body>
</html>



