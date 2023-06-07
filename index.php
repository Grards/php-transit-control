<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./assets/css/style.min.css">
    <title>Transit Control</title>
</head>
<body>
    <header class="home-header">
        <h1 class="header__title">Transit control</h1>
        <section class="header__banner"></section>
    </header>

    <main class="home-main">
        <section class="main__form">   
            <form method="POST" action="" class="form__identity-control">
                <fieldset>
                    <legend>Identity informations</legend>

                    <label for="firstname">First Name : </label>
                    <input type="text" id="firstname" minlength="3" maxlength="100" name="firstname">

                    <label for="lastname">Last Name : </label>
                    <input type="text" id="lastname" minlength="3" maxlength="100" name="lastname">

                    <label id="sexe" for="sexe">Gender : </label>
                    <input type="radio" id="sexem" name="sexe" value="m" checked>
                    <input type="radio" id="sexef" name="sexe" value="f">

                    <label for="birthday">Date of birth : </label>
                    <input type="date" id="birthday" min="1900-01-01" name="birthday">

                    <label for="country-birth">Country of birth : </label>
                    <select id="country-birth" name="country-birth">
                    </select>

                    <label for="register">National register number: </label>
                    <input type="number" id="register" name="register">
                </fieldset>
                
            </form>
        </section>
    </main>
</body>
</html>