

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <h1>Tipos de cuentas bancarias</h1>
    <div class="container">
    <div class="card">
        <img src="./img1.png" alt="">
        <h3>Cuenta Corriente</h3>
        <p>Es una cuenta bancaria que permite a los clientes realizar depósitos y retiros de dinero. Los depósitos pueden ser realizados en cualquier momento y los retiros pueden ser realizados en cualquier momento, siempre y cuando el cliente tenga fondos disponibles en la cuenta.</p>
        <p>Si necesitas saber alguna informacion haz click aca</p>
        <button onclick="location='cuentaCorriente.php'">Click</button>
    </div>
    <div class="card">
        <img src="./abrir-cuenta-bancaria-online-sin-nomina_1677381251.jpg" alt="">
        <h3>Cuenta de Ahorros</h3>
        <p>Es una cuenta bancaria que permite a los clientes depositar dinero en la cuenta y ganar intereses sobre el saldo de la cuenta. Los clientes pueden realizar depósitos y retiros de dinero en cualquier momento, pero los retiros pueden estar sujetos a ciertas restricciones.</p>
        <p>Si necesitas saber alguna informacion haz click aca</p>
        <button onclick="location='cuentaAhorros.php'">Click</button>
    </div>
    <div class="card">
        <img src="./img3.jpeg" alt="">
        <h3>Cuenta de Cheques</h3>
        <p>Es una cuenta bancaria que permite a los clientes realizar depósitos y retiros de dinero. Los depósitos pueden ser realizados en cualquier momento y los retiros pueden ser realizados en cualquier momento, siempre y cuando el cliente tenga fondos disponibles en la cuenta.</p>
        <p>Si necesitas saber alguna informacion haz click aca</p>
        <button onclick="location='cuentaCheques.php'">Click</button>
    </div>
    <div class="card">
        <img src="./img4.jpeg" alt="">
        <h3>Cuenta de Inversión</h3>
        <p>Es una cuenta bancaria que permite a los clientes invertir su dinero en diferentes instrumentos financieros, como acciones, bonos, fondos mutuos, etc. Los clientes pueden ganar intereses sobre su inversión y pueden retirar su dinero en cualquier momento, pero pueden estar sujetos a ciertas restricciones.</p>
        <p>Si necesitas saber alguna informacion haz click aca</p>
        <button onclick="location='cuentaInversion.php'">Click</button>
    </div>
</div>
</body>
</html>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
    }

    h1 {
        text-align: center;
        margin-top: 50px;
        color: #333;
    }

    div {
        margin: 20px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #fff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    img {
        width: 100px;
        height: 100px;
        margin-right: 10px;
        float: left;
    }

    h3 {
        margin-top: 0;
        color: #333;
    }

    p {
        margin-bottom: 10px;
        color: #666;
    }

    button {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #45a049;
    }
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }
    .card {
        width: 300px;
        margin: 20px;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        text-align: center;
    }
    .card img {
        width: 100px;
        height: 100px;
        margin-bottom: 10px;
    }
    .card h3 {
        margin: 0;
        color: #333;
    }
    .card p {
        margin-bottom: 20px;
        color: #666;
    }
    .card button {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .card button:hover {
        background-color: #45a049;
    }
</style>