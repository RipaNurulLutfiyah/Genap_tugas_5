<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Hewan</title>

    <style>

        body {
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 350px;
            margin: 100px auto;
            padding: 20px;
            border: 2px solid;
            border-radius: 5px;
        }

        h1 {
            text-align: center;
        }

        label, input, select {
            display: block;
            margin-bottom: 10px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            border: 1px solid grey;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: blue;
            color: white;
            border-radius: 4px; 
        }
        
    </style>
</head>

<body>
    <form method="post" action="proses.php">
        <h1>Form Data Hewan</h1>
        <label for="nama">Nama Hewan :</label>
        <input type="text" id="nama" name="nama">

        <label for="berat">Berat Badan (kg):</label>
        <input type="number" id="berat" name="berat">

        <label for="makanan">Jenis Makanan :</label>
        <select id="makanan" name="makanan">
            <option value=""></option>
            <option value="herbivora">Herbivora</option>
            <option value="karnivora">Karnivora</option>
            <option value="omnivora">Omnivora</option>
        </select>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
