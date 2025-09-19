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
      background: linear-gradient(135deg, #74ebd5, #9face6);
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
      text-shadow: 2px 2px 5px rgba(0,0,0,0.1);
    }

    /* --------- Table Styling --------- */
    table {
      width: 80%;
      border-collapse: collapse;
      background: #fff;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    /* --------- Table Head & Data Cells --------- */
    th, td {
      padding: 15px;
      text-align: center;
    }

    /* Table header row */
    th {
      background: #4a90e2;
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

    /* --------- Button Styling --------- */
    /* Update Button */
    button {
      padding: 8px 16px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-weight: 600;
      font-size: 0.9rem;
      transition: all 0.2s ease;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      margin: 0 5px;
    }

    /* Update Button */
    button:first-child {
      background-color: #4CAF50;
      color: white;
    }

    button:first-child:hover {
      background-color: #3e8e41;
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0,0,0,0.15);
    }

    button:first-child:active {
      transform: translateY(0);
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    /* Delete Button */
    button:last-child {
      background-color: #f44336;
      color: white;
    }

    button:last-child:hover {
      background-color: #d32f2f;
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0,0,0,0.15);
    }

    button:last-child:active {
      transform: translateY(0);
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    /* --------- Responsive Design --------- */
    @media (max-width: 768px) {
      table {
        width: 95%;
      }

      th, td {
        padding: 10px;
        font-size: 0.9rem;
      }
      
      button {
        padding: 6px 12px;
        font-size: 0.8rem;
        margin: 0 3px;
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
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php include '../backend/success.inc.php'; ?>
    </tbody>
  </table>
</body>
</html>