<?php require 'traitement.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Calculatrice</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    </head>
    <body>
        <a href="http://p11/tp1/" class="btn btn-primary">RELOAD</a>
        <a href="http://p11/" class="btn btn-primary">HOME</a>
        <form action="index.php" method="post">
            <div class="calculator">
                <table>
                    <tr>
                        <td><input readonly="readonly" type="text" name="value" value="<?= (count($_POST) > 0)? $calcul : 0; ?>" /></td>
                    </tr>
                    <tr>
                        <td><input readonly="readonly" type="text" name="result" value="<?= (isset($_POST['equal']))? $result : 0; ?>"/></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td><input name="7" type="submit" value="7" class="button"/></td>
                        <td><input name="8" type="submit" value="8" class="button"/></td>
                        <td><input name="9" type="submit" value="9" class="button"/></td>
                        <td><input name="multiplier" type="submit"  value="*"class="button"/></td>
                    </tr>
                    <tr>
                        <td><input name="4" type="submit" value="4" class="button"/></td>
                        <td><input name="5" type="submit" value="5" class="button"/></td>
                        <td><input name="6" type="submit" value="6" class="button"/></td>
                        <td><input name="division" type="submit"  value="/" class="button"/></td>
                    </tr>
                    <tr>
                        <td><input name="1" type="submit" value="1" class="button"/></td>
                        <td><input name="2" type="submit" value="2" class="button"/></td>
                        <td><input name="3" type="submit" value="3" class="button"/></td>
                        <td><input name="substract" type="submit"  value="-" class="button"/></td>
                    </tr>
                    <tr>
                        <td><input name="0" type="submit" value="0" class="button"/></td>
                        <td colspan="2"><input name="equal" type="submit"  value="=" class="button equal"/></td>
                        <td><input name="addition" type="submit"  value="+" class="button"/></td>
                    </tr>
                </table>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>