<?php
include('header/header.php')
?>
<?php
include('/xampp/htdocs/KTGK/src/config/config.php')
?>
<main>

    <div class="container-fluid clear">
        <div class="d-flex justify-content-center d-flex align-items-center" style="height: 200px;">
            <p class="h1">Detail Drug</p>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Barcode</th>
                    <th scope="col">Dose</th>
                    <th scope="col">Code</th>
                    <th scope="col">Cost Price</th>
                    <th scope="col">Selling Price</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Production Date</th>
                    <th scope="col">Expiration Date</th>
                    <th scope="col">Place</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $id = $_GET['id'];
                $sql = "Select * from drugs where id = $id";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <th scope="row"><?php echo $row['ID']; ?> </th>
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $row['Type']; ?></td>
                            <td><?php echo $row['barcode']; ?></td>
                            <td><?php echo $row['dose']; ?></td>
                            <td><?php echo $row['code']; ?></td>
                            <td><?php echo $row['cost_price']; ?></td>
                            <td><?php echo $row['selling_price']; ?></td>
                            <td><?php echo $row['expiry']; ?></td>
                            <td><?php echo $row['company_name']; ?></td>
                            <td><?php echo $row['production_date']; ?></td>
                            <td><?php echo $row['place']; ?></td>
                            <td><?php echo $row['quantity']; ?></td>
                            <td><a href="update-drug.php?id=<?php echo $row['ID']; ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td><a href="delete-drug.php?id=<?php echo $row['ID']; ?>"><i class="fa-solid fa-trash "></i></a></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</main>
<?php
include('footer/footer.php')
?>