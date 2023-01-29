<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>
<?php

// echo $id;

// echo $name;

// echo $description;

// echo $adresse;

// echo $domaine; 

?>
<?php if (
    $_GET['id'] &&
    $_GET['name'] &&
    $_GET['description'] &&
    $_GET['adresse'] &&
    $_GET['domaine']
) { ?>
    <h1> affichage des clubs </h1>
    <table>
        <tr>
            <th>id : </th>
            <th>name : </th>
            <th>description : </th>
            <th>adresse : </th>
            <th>domaine : </th>
        </tr>
        <tr>



            <td> <?php $id = $_GET['id'];
                    echo $_GET['id']; ?> </td>
            <td> <?php $name = $_GET['name'];
                    echo $name; ?> </td>
            <td> <?php $description = $_GET['description'];
                    echo $description; ?> </td>
            <td> <?php $adresse = $_GET['adresse'];
                    echo $adresse; ?> </td>
            <td> <?php $domaine = $_GET['domaine'];
                    echo $domaine; ?> </td>

        </tr>
    <?php } else {
    echo 'Champs manquants';
} ?>
    </table>