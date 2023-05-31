<!DOCTYPE html>
<html>
<head>
  <title>Student Application Status</title>
  <style>
    /* Inline CSS */
    table {
      border-collapse: collapse;
      width: 100%;
    }
    
    th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: center;
    }
    
    th {
      background-color: #333;
      color: white;
    }
    
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    
    tr:hover {
      background-color: #ddd;
    }
    
    .section-dropdown {
      position: absolute;
      top: 10px;
      right: 10px;
    }
  </style>
</head>
<body>
  <div class="section-dropdown">
    <label for="section">Section:</label>
    <select id="section" name="section">
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="C">C</option>
    </select>
  </div>
  
  <table>
    <tr>
      <th>S.no</th>
      <th>Name of the student</th>
      <th>From date</th>
      <th>To date</th>
      <th>Application status</th>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <button></button>
        <button></button>
      </td>
    </tr>
     <!--<tr>
      <td>2</td>
      <td>kalpit mathur</td>
      <td>2023-05-05</td>
      <td>2023-05-15</td>
      <td>
        <button>Approve</button>
        <button>Disapprove</button>
        
      </td>
    </tr>
    
  
  </table> -->
</body>
</html>