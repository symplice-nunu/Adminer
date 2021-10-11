
<!DOCTYPE html>
<html>
<head>
<style>
table{
    border-collapse: collapse;
}
</style>
</head>
<body>
  <table>
      <tr>
          <td width="260px">
          <div>
  <span>Language</span> <select name="" id="" style="width: 11em;">
    <option value="">English</option>
</select>
          </td>
          <td>
              &nbsp;
          </td>
          <td style="background-color: #eee; width: 53em; height: 2em; padding-left: 1em;">
          MySQL » Server » Create database
          </td>
      </tr>
      <tr style="height: 0.6em;"></tr>
      <tr>
          <td width="200px" style="background-color: #eee;">
          <h2 style="padding-left: 1em;">Adminer 4.8.1</h2>
          <hr>
          </td>
          
          <td>
              &nbsp;
          </td>
          <td style="background-color: #ddf; width: 53em; height: 3.5em; padding-left: 1em;">
          <h2>create database</h2>
          </td>
      </tr>
      <tr style="height: 0.6em;"></tr>
      <tr>
          <td>
              DB
              <select name="" id="" style="width: 10em;">
                  <option value=""></option>
              </select>
              <hr>
          </td>
          <td>
              &nbsp;
          </td>
         
      </tr>
      <tr>
          <td style="color: blue;">
              <span>SQL command</span> &nbsp;&nbsp;&nbsp;&nbsp; <span>Import</span> <br>
              <span>Export</span>
              <br>
              <hr>
              <br>
          </td>
          
          <td>
              &nbsp;
          </td>
          <td>
          <form action="createdatabase.php" method="post">
              <input type="text" name="databasename">
              <select name="" id="" style="width: 17em;">
                  <option value="">(collation)</option>
              </select>
                        <input type="submit" name="submit" value="Save">
                    </form>
           
</body>
</html>