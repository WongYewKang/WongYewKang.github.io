<!DOCTYPE html>
<html>
<head>
  <title>Data Table</title>
  <style>
    table {
      border-collapse: collapse;
    }
    th, td {
      padding: 8px;
      border: 1px solid black;
    }
  </style>
</head>
<body>
  <h1>Data Table</h1>

  <table>
    <caption>Table 1</caption>
    <thead>
      <tr>
        <th>Index</th>
        <th>Value</th>
      </tr>
    </thead>
    <tbody id="tableBody"></tbody>
  </table>

  <br><br><br>

  <table>
    <caption>Table 2</caption>
    <thead>
      <tr>
        <th>Category</th>
        <th>Value</th>
      </tr>
    </thead>
    <tbody id="tableBody2"></tbody>
  </table>

  <script>
    const data = [
      { "Index": "A1", "Value": 41 },
      { "Index": "A2", "Value": 18 },
      { "Index": "A3", "Value": 21 },
      { "Index": "A4", "Value": 63 },
      { "Index": "A5", "Value": 2 },
      { "Index": "A6", "Value": 53 },
      { "Index": "A7", "Value": 5 },
      { "Index": "A8", "Value": 57 },
      { "Index": "A9", "Value": 60 },
      { "Index": "A10", "Value": 93 },
      { "Index": "A11", "Value": 28 },
      { "Index": "A12", "Value": 3 },
      { "Index": "A13", "Value": 90 },
      { "Index": "A14", "Value": 39 },
      { "Index": "A15", "Value": 80 },
      { "Index": "A16", "Value": 88 },
      { "Index": "A17", "Value": 49 },
      { "Index": "A18", "Value": 60 },
      { "Index": "A19", "Value": 26 },
      { "Index": "A20", "Value": 28 }
    ];

    var d1 = data[4].value + data[19];
    var d2 = data[14].value / data[6];
    var d3 = data[12].value * data[11];

    const data1 = [
        { "Category": "Alpha", "Value": d1 },
        { "Category": "Beta", "Value": d2 },
        { "Category": "Charlie", "Value": d3 }
    ]

    const tableBody = document.getElementById('tableBody');

    data.forEach(item => {
      const row = document.createElement('tr');

      const indexCell = document.createElement('td');
      indexCell.textContent = item.Index;
      row.appendChild(indexCell);

      const valueCell = document.createElement('td');
      valueCell.textContent = item.Value;
      row.appendChild(valueCell);

      tableBody.appendChild(row);
    });

    const tableBody1 = document.getElementById('tableBody1');
    data1.forEach(item => {
      const row = document.createElement('tr');

      const indexCell = document.createElement('td');
      indexCell.textContent = item.Index;
      row.appendChild(indexCell);

      const valueCell = document.createElement('td');
      valueCell.textContent = item.Value;
      row.appendChild(valueCell);

      tableBody.appendChild(row);
    });
  </script>
</body>
</html>
