<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/RSA" method="POST">
        <textarea type="text" name="src" placeholder="Исходное сообщение" style="resize:vertical;"></textarea>
        <textarea type="text" name="signature" placeholder="ЭЦП" style="resize:vertical;"></textarea>
        <div class="line">
            <select name="key_len">
                <option value="512">512</option>
                <option value="1024">1024</option>
                <option value="2048">2048</option>
                <option value="4096">4096</option>
            </select>
            <button name="function" value="create">Подписать</button>
            <button name="function" value="verify">Проверить ЭЦП</button>
        </div>
        @csrf
    </form>
</body>

<style>
    form {
        display: flex;
        flex-direction: column;

        max-width: 500px;
    }

    form>*+* {
        margin-top: 5px;
    }

    form .line {
        width: 100%;

        display: flex;
        justify-content: space-between;
    }

    form>.line>* {
        width: 30%;
    }
</style>

</html>