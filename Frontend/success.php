<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Display Page</title>
  <style>
    /* --------- General Body Styling --------- */
    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #74ebd5, #9face6); /* Gradient background */
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      min-height: 100vh;
      color: #333;
    }

    /* --------- Page Title Styling --------- */
    h1 {
      margin: 30px 0 20px;
      font-size: 2.5rem;
      color: #222;
      text-shadow: 2px 2px 5px rgba(0,0,0,0.1); /* Light shadow effect */
    }

    /* --------- Table Styling --------- */
    table {
      width: 80%;
      border-collapse: collapse; /* Removes double borders */
      background: #fff;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1); /* Soft shadow */
    }

    /* --------- Table Head & Data Cells --------- */
    th, td {
      padding: 15px;
      text-align: center;
    }

    /* Table header row */
    th {
      background: #4a90e2; /* Blue header */
      color: #fff;
      font-size: 1.1rem;
      text-transform: uppercase;
    }

    /* Alternate row background */
    tr:nth-child(even) {
      background: #f7f9fc;
    }

    /* Row hover effect */
    tr:hover {
      background: #e2ecff;
      transition: 0.3s ease-in-out;
    }

    /* Table data cells */
    td {
      font-size: 1rem;
      color: #555;
    }

    /* --------- Responsive Design --------- */
    @media (max-width: 768px) {
      table {
        width: 95%; /* Make table wider on small screens */
      }

      th, td {
        padding: 10px;
        font-size: 0.9rem;
      }
    }
  </style>
</head>
<body>
  <!-- Page Title -->
  <h1>User Display Page</h1>

  <!-- User Data Table -->
  <table>
    <thead>
      <tr>
        <th>User ID</th>
        <th>User Name</th>
        <th>User Gmail</th>
        <th>User Password</th>
      </tr>
    </thead>
    <tbody>
      <!-- Example row 1 -->
      <tr>
        <td>1</td>
        <td>Alice</td>
        <td>alice@example.com</td>
        <td>••••••</td> <!-- Hidden password -->
      </tr>
      <!-- Example row 2 -->
      <tr>
        <td>2</td>
        <td>Bob</td>
        <td>bob@example.com</td>
        <td>••••••</td>
      </tr>
    </tbody>
  </table>
</body>
</html>
