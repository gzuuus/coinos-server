<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Bitcoin Payment Report</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link href="css/jquery-ui-1.9.0.custom.min.css" rel="stylesheet" />
    <link href="css/report.css" rel="stylesheet" />
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/jquery-ui-1.9.0.custom.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/searchjs.js"></script>
    <script src="js/report.js"></script>
  </head>
  <body>
    <div id="container">
      Date: <input id="date" name="date" type="text" />
      <table class="table">
        <thead>
          <tr>
            <th>Date</th>
            <th>Address</th>
            <th>Exchange Rate</th>
            <th>BTC</th>
            <th>CAD</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td id="total" colspan="3">Totals:</td>
            <td id="btc"></td>
            <td id="cad"></td>
          </tr>
        </tfoot>
      </table>
    </div>
  </body>
</html> 
