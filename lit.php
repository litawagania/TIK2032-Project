    <?php
            $sql = "SELECT JUDUL, LINK FROM tabelblog";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<article>";
                    echo "<h3>" . $row["title"] . "</h3>";
                    echo "<p><a href='" . $row["url"] . "'>" . $row["title"] . "</a></p>";
                    echo "</article>";
                }
            } else {
                echo "<p>No blog posts found.</p>";
            }
            ?>
