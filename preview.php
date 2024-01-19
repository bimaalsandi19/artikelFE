<?php
        $limit = 4;
        $offset = isset($_GET['offset']) ? $_GET['offset'] : 0;
        // $apiUrl = "http://127.0.0.1:8000/api/post";
        $apiUrl = "http://localhost:8000/api/page_publish?limit={$limit}&offset={$offset}";
        $response = file_get_contents($apiUrl);
        $articles = json_decode($response, true);  

       
        

        if($articles['code'] === 200) :
            $data = $articles['data'];
?>

<div class="container-fluid">
    <?php 
        $no =1;
        foreach ($data as $row) :?>
    <div class="card p-2 mb-3">
        <img src="assets/img/gambar.jpg" style="width: 100%; height: 300px; object-fit: cover;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $row['title']?></h5>
            <small class="card-title"> Category :  <?php echo $row['category']?></small>
            <p class="card-text"><?php echo $row['content']?></p>
            <p class="card-text"><small class="text-body-secondary"><?php echo $row['created_at']?></small></p>
        </div>
    </div>

    <?php endforeach?>

    <div>
        <?php
            $prevOffset = max(0, $offset - $limit);
            $nextOffset = $offset + $limit;
            echo "<a href=\"index.php?page=preview&offset={$prevOffset}\">Previous</a> | ";
            echo "<a href=\"index.php?page=preview&offset={$nextOffset}\">Next</a>";
        ?>
    </div>

</div>


<?php else : ?>
        <h3>Fetch Data Error</h3>
<?php endif  ?>