<?php
include('header/header.php')
?>
<main>
    <div class="container-fluid clear">
        <div class="d-flex justify-content-center d-flex align-items-center" style="height: 200px;">
            <p class="h1">List Drug</p>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Details</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '/xampp/htdocs/KTGK/src/config/config.php';
                $sql = "Select id, name, quantity from drugs";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <th scope="row"><?php echo $row['id']; ?> </th>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['quantity']; ?></td>
                            <td><a href="detail-drug.php?id=<?php echo $row['id']; ?>"><i class="fa-solid fa-info"></i></a></td>
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