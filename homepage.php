<?php 
include "header.php";
?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-warning text-center"><u>West Bengal Colleges Admission Portal</u></h1>
            </div>
        </div>
        <div class="row">

            <!-- <input type="text" id="searchInput" placeholder="Search for a college..." class="form-control"> -->
      
            <div class="col-12">
                <table class="table table-striped bg-light">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Website</th>
                        <th>Address</th>
                        <th>Admission Link</th>
                    </tr>
                    <?php
                    if ($result->num_rows > 0) {
                        // Output each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($row["clg_id"]) . "</td>";
                            echo "<td>" . htmlspecialchars($row["clg_name"]) . "</td>";
                            echo "<td>" . htmlspecialchars($row["clg_phone"]) . "</td>";

                            $url = htmlspecialchars($row["clg_website"]);
                            if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
                                $url = "https://". $url;
                            }
                            echo "<td><a href='". $url . "' target='_blank'>" .htmlspecialchars($row["clg_website"])."</a></td>";

                            echo "<td>" . htmlspecialchars($row["clg_address"]) . "</td>";
                            echo "<td><a href='student_registration.php?clg_id=" . urlencode($row["clg_id"]) . "' target='_blank'>Apply</a></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>No colleges found.</td></tr>";
                    }

                    // Close connection
                    $conn->close();
                    ?>
                </table>
            </div>
       
        </div>
    </div>


    <?php 
include "footer.php";
?>