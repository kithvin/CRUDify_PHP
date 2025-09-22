<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Display Page</title>

  <style>
    :root{
      --text:#0f172a; --card:#ffffff;
      --border:#e5e7eb; --row:#f9fafb;
      --head1:#eef2ff; --head2:#f5f3ff;
    }
    *{box-sizing:border-box}
    body{
      margin:0;
      font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, Arial, "Noto Sans";
      color:var(--text);
      background:#f8fafc;
      padding:32px;
    }
    h1{
      text-align:center;
      margin:0 0 24px;
      font-weight:700;
      letter-spacing:.2px;
    }

    .table-wrap{
      width:min(100%,1000px);
      margin:0 auto;
      background:var(--card);
      border:1px solid var(--border);
      border-radius:14px;
      overflow:hidden;
      box-shadow:0 10px 24px rgba(2,6,23,.06);
    }
    table{
      width:100%;
      border-collapse:separate;
      border-spacing:0;
    }
   
    thead th{
      text-align:center;
      padding:14px 16px;
      font-weight:600;
      background:linear-gradient(90deg,var(--head1),var(--head2));
      border-bottom:1px solid var(--border);
      font-size:0.95rem;
    }
    tbody td{
      padding:14px 16px;
      border-bottom:1px solid var(--border);
      font-size:0.95rem;
      background:#fff;
    }
    tbody tr:nth-child(even) td{ background:var(--row); }
    tbody tr:hover td{ background:#f1f5f9; }

    td button{
      appearance:none; border:0;
      padding:8px 12px;
      border-radius:10px;
      font-weight:600;
      cursor:pointer;
      background:#eef2ff;
      transition:transform .06s ease, box-shadow .2s ease, background .2s ease;
    }
    td button + button{ margin-left:8px; background:#fee2e2; }
    td button:hover{ transform:translateY(-1px); box-shadow:0 6px 16px rgba(2,6,23,.12); }
  </style>
</head>
<body>
  <h1>Display Page</h1>

  <div class="table-wrap">
    <table>
      <thead>
        <tr>
          <th>User ID</th>
          <th>User Name</th>
          <th>User Gmail</th>
          <!-- <th>User Password</th> -->
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php include '../backend/display.inc.php'; ?>
      </tbody>
    </table>
    <script src="../backend/script.js"
  </div>
</body>
</html>
