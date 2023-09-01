<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="../../../assets/css/main.css">
    <link rel="stylesheet" href="../../../assets/img/Logo_header.png">
    <link rel="stylesheet" href="../../auth/authentication.php">
</head>
<body>
    <?php include '../../components/header.php'?>
    <div class="list-blog">
        <div class="title">
            <h1>List Blog</h1>
        </div>
        <?php 
        include '../../auth/connect_sql.php';
        echo "<div class='all-item'>";
            $queryBlog = 'SELECT users.name AS user_name,users.avatar, posts.content, posts.created_at, posts.image, posts.id  
                            FROM users
                            INNER JOIN posts
                            ON users.id = posts.user_id';
            $resultBlog = $conn->query($queryBlog);
            if ($resultBlog -> num_rows > 0) {
                while($rowBlog = $resultBlog->fetch_assoc()) {
                    echo "<div class='item-blog'>";
                        echo "<div class='item-blog-img'>";
                            echo "<img src='../../../assets/img/{$rowBlog['image']}' alt=''>";
                        echo "</div>";
                        echo "<div class='item-blog-content'>";
                            echo "<div class='info'>";
                                echo "<div class='author'>";
                                    echo "<img src='../../../assets/img/{$rowBlog['avatar']}' alt=''>";
                                    echo "<p>{$rowBlog["user_name"]}</p>";
                                echo "</div>";
                                echo "<div class='time'>";
                                    echo "<img src='../../../assets/img/watch.jpg' alt=''>";
                                    echo "<p>{$rowBlog["created_at"]}</p>";
                                echo "</div>";
                            echo "</div>";
                            echo "<div class='text-detail'>";
                                echo "<p>Story</p>";
                                echo "<p>{$rowBlog["content"]}</p>";
                            echo "</div>";
                            echo "<div class='text-link'>";
                                echo "<button>";
                                    echo "<a href=''>Read more</a>";
                                    echo "<i class='fa-solid fa-arrow-right'></i>";
                                echo "</button>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                }
            }
        echo "</div>";
        ?>
    </div>
    <?php include '../../components/footer.php'?>
</body>
</html>
