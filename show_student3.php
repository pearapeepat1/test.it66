<?php
include 'header.php';
include 'banner.php';
include 'navigater.php';
include 'connect_s1.php';
?>
<div class="container mt-5">
    <h1>Data of Student3</h1>
    <table class = "table table-striped">
        <th>StudentID</th>
        <th>Name</th>
        <th>GroupID</th>
        <th>Grade</th>

        <?php
        $sql = "SELECT * FROM student3";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $row['student_id']?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['group_id']?></td>
                        <td><?php echo $row['level_group']?></td>
                    </tr>
                <?php
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </table>
</div>


<?php
include 'footer.php';
?>