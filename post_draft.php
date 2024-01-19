<div class="container-fluid">
        <h2>Data Artikel</h2>

        <a href="index.php?page=add" class="btn btn-sm btn-primary my-2">Tambah Data</a>
        <?php
            $limit = 4;
            // $offset = isset($_GET['offset']) ? $_GET['offset'] : 0;
            // $apiUrl = "http://127.0.0.1:8000/api/post";
            $apiUrl = "http://localhost:8000/api/page_draft";
            $response = file_get_contents($apiUrl);
            $articles = json_decode($response, true);  
            if($articles['code'] === 200) :
                $data = $articles['data'];
        ?>

        <div class="table-responsive">
            <table class="table table-sm table-striped table-hover" style="width: 120%;">
                <thead class="text-center">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col" >Content</th>
                    <th scope="col">Category</th>
                    <th scope="col">Created_at</th>
                    <th scope="col">Update_at</th>
                    <th scope="col">Status</th>
                    <th scope="col" style="width: 10%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no =1;
                    foreach ($data as $row) :?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row['title'] ?></td>
                        <td><?php echo $row['content'] ?></td>
                        <td><?php echo $row['category'] ?></td>
                        <td><?php echo $row['created_at'] ?></td>
                        <td><?php echo $row['updated_at'] ?></td>
                        <td><?php echo $row['status'] ?></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">Edit</a>
                            <a href="index.php?page=delete&id=<?php echo $row['id']?>" onclick="return confirm('Apakah anda yakin untuk menghapus artikel ini ?')" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>       
                        
                    <?php endforeach?>
                </tbody>
            </table>
        </div>

        <?php else : ?>
            <h3>Fetch Data Error</h3>
        <?php endif  ?>
        
    
    </div>