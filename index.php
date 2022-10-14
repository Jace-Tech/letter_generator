<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                color: #555;
            }
            

            .container {
                max-width: 700px;
                margin: 0 auto;
                width: 90%;
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }

            form {
                width: 100%;
                margin-top: 2rem;
            }

            label {
                display: block;
                font-size: 1rem;
                margin-bottom: .5rem;
                font-weight: 600;
                letter-spacing: 1px;
            }

            .form-group:not(:last-of-type) {
                margin-bottom: .8rem;
            }

            .form-control {
                display: block;
                width: 100%;
                border: 1px solid #aaa;
                border-radius: 4px;
                padding: .9rem 1rem;
                font-size: .9rem;
                outline: none;
            }

            .title {
                font-size: 2rem;
                font-weight: 400;
                margin-bottom: 2rem;
            }

            .btn-holder {
                margin-top: 1rem;
            }

            .btn {
                display: inline-block;
                padding: 1rem 3rem;
                cursor: pointer;
                border: 1px solid transparent;
                border-radius: 5px;
                background-color: #555;
                color: #eee;
            }

        </style>
    </head>

    <body>
        <div class="container">
            <form method="post" action="./handler.php">
                <h2 class="title">Generate Template</h2>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="">Date</label>
                    <input type="date" name="date" class="form-control" />
                </div>

                <div class="btn-holder">
                    <button class="btn" name="generate">Generate</button>
                </div>
            </form>
        </div>
    </body>
</html>