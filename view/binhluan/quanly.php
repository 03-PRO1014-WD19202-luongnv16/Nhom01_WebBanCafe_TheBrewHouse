<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Comment Management</title>
  <style>
   
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    .actions {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }

    .actions button {
      margin-right: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Admin - Comment Management</h1>

    <div class="actions">
      <button id="approveAll">Approve All</button>
      <button id="deleteAll">Delete All</button>
    </div>

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>User</th>
          <th>Comment</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody id="commentTable">
        <?php
          
          $conn = new mysqli("localhost", "username", "password", "database_name");

       
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          $sql = "SELECT * FROM comments";
          $result = $conn->query($sql);

        
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $row["id"] . "</td>";
              echo "<td>" . $row["user"] . "</td>";
              echo "<td>" . $row["comment"] . "</td>";
              echo "<td>" . ($row["approved"] ? "Approved" : "Pending") . "</td>";
              echo "<td>";
              echo "<button onclick='approveComment(" . $row["id"] . ")'>Approve</button>";
              echo "<button onclick='deleteComment(" . $row["id"] . ")'>Delete</button>";
              echo "</td>";
              echo "</tr>";
            }
          } else {
            echo "<tr><td colspan='5'>No comments found.</td></tr>";
          }

          $conn->close();
        ?>
      </tbody>
    </table>
  </div>

  <script>
    function approveComment(id) {
    
    }

    function deleteComment(id) {
      
    }

    document.getElementById('approveAll').addEventListener('click', approveAllComments);
    document.getElementById('deleteAll').addEventListener('click', deleteAllComments);

    function approveAllComments() {
      
    }

    function deleteAllComments() {
    
    }
  </script>
</body>
</html>