    <?php
    
    include "db_connect.php";
    
    ?>
    
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <style>
        .d-grid {
            padding-right: 950px;
            padding-top: 20px;
            
        }
        .header{
            padding-left: 20px;
            padding-top: 20px;
        }
        .table{
            margin-left: 15px;
        }
        
    </style>
    </head>

    <body>
        <h1 class="header">Admin Dashboard</h1>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
     <a class="btn btn-primary me-md-2" href="./craet_new_record.php" role="button">Create Button</a>
    </div>
    <br><br>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
        </tr>
    </tbody>
    </table>
        
    </body>
    </html>