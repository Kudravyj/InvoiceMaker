<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }
        th, td {
        border:1px solid black;
        padding-right: 10px;
        padding-left:10px;
        }
    </style>
</head>
<body>
    <div style="width: 100%">
        <div style="background-color: rgb(200, 200, 200); padding: 20px; margin-left: 160px; margin-right: 160px;">
            <h1 style="color: black; font-size: 30px;" >Faktura nr: {{ $date }}/{{$data->id}}</h1>
        </div>
    </div>
    <div style="width: 50%; margin-top: 30px; display: float; float: left;">
        <div style="border-style: double; padding: 10px; margin: 10px; height: 200px">
            <h3 style="color: black; font-size: 20px;" >Sprzedawca:</h3>
            <p>Przykladowa firma obslugi klienta</p>
            <p>Przykladowy adres firmy</p>
            <p>NIP: 9999999999</p>
            <p>kontakt: test@test</p>
        </div>
    </div>
    <div style="width: 50%; margin-top: 30px; display: float; float: right;">
        <div style="border-style: double; padding: 10px; margin: 10px; height: 200px ">
            <h3 style="color: black; font-size: 20px;" >Nabywca:</h3>
            <p>{{$data->name}} {{$data->middlename}}</p>
            <p>{{$data->addres}} </p>
            <p>{{$data->Postal}}</p>
        </div>
    </div>
    <div style="width: 100%; margin-top: 300 px; margin-left: 10px;">
        <table>
            <tr>
                <th>Product</th>
                <th>ilosc</th>
                <th>Cena netto</th>
                <th>stawka VAt</th>
                <th>Cena Brutto</th>
            </tr>
            <tr>
                <td>"{{ $product->name }}"</td>
                <td>1</td>
                <td>{{ $product->price}} $</td>
                <td>23%</td>
                <td>{{ $product->price / 100 * 123}} $</td>
            </tr>
        </table>
    </div>
        <p>{{ $data->title ?? '' }}</p>
    <div style="width: 40%; display: float; float: right;">
        <h1 style="font-size: 25px;">Razem do zaplaty: </h1>
        <H1 style="font-size: 25px; text-align: center;">{{ $product->price / 100 * 123}} $</H1>
        <hr>
    </div>
</body>
</html>