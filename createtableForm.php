
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
          MySQL » Server » a264133_0mgo6t2f » Create table
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
          <h2>create table</h2>
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
          <div style="position: fixed; margin-top: -4em;">
          <span>SQL command</span> &nbsp;&nbsp;&nbsp;&nbsp; <span>Import</span> <br>
              <span>Export</span>&nbsp;&nbsp;&nbsp;&nbsp; <span>Create Table</span>
              <br>
              <hr>
              <br>
              <span>
                select albums <br>
                select interprets <br>
                select songs <br>
              </span> <br>
              <hr>
              <br>
              </div>
          </td>
          
          <td>
              &nbsp;
          </td>
          <td>
          <form action="createtable.php" method="post">
              <label for="">Table Name: &nbsp; </label>
              <input type="text" name="tablename">
              <select name="" id="" style="width: 17em;">
                  <option value="">(engine)</option>
              </select>
              <select name="" id="" style="width: 17em;">
                  <option value="">(collation)</option>
              </select>
                        <input type="submit" name="submit" value="Save" style="margin-bottom: 1em;">
                    
              <table border="1" id="myTable">
                  <tr style="background-color: #ddf;">
                      <th>column name</th>
                      <td>Type</td>
                      <td>Length</td>
                      <td>Options</td>
                      <td>NULL</td>
                      <td> <input type="radio">AI <sup style="color: blue;">?</sup> </td>
                      <td> &nbsp; <button style="color: blue; font-size: 1.2em;">+</button> &nbsp; </td>
                  </tr>
                  <tr>
                      <td>
                         &nbsp; <input type="text" name="columnname" style="margin-top: 0.5em; margin-bottom: 0.5em;">&nbsp;
                      </td>
                      <td> &nbsp;
                          <select name="type" id="">
                              <option value="">Numbers</option>
                              <option value="tinyint"> &nbsp;&nbsp; tinyint</option>
                              <option value="smallint"> &nbsp;&nbsp; smallint</option>
                              <option value="mediumint"> &nbsp;&nbsp; mediumint</option>
                              <option value="bigint"> &nbsp;&nbsp; bigint</option>
                              <option value="int"> &nbsp;&nbsp; int</option>
                              <option value="decimal"> &nbsp;&nbsp; decimal</option>
                              <option value="float"> &nbsp;&nbsp; float</option>
                              <option value="double"> &nbsp;&nbsp; double</option>
                              <option value="">Date and Time</option>
                              <option value="date"> &nbsp;&nbsp; date</option>
                              <option value="datetime"> &nbsp;&nbsp; datetime</option>
                              <option value="timestamp"> &nbsp;&nbsp; timestamp</option>
                              <option value="time"> &nbsp;&nbsp; time</option>
                              <option value="year"> &nbsp;&nbsp; year</option>
                              <option value="">Strings</option>
                              <option value="char"> &nbsp;&nbsp; char</option>
                              <option value="varchar"> &nbsp;&nbsp; varchar</option>
                              <option value="tinytext"> &nbsp;&nbsp; tinytext</option>
                              <option value="text"> &nbsp;&nbsp; text</option>
                              <option value=" mediumtext"> &nbsp;&nbsp; mediumtext</option>
                              <option value="longtext"> &nbsp;&nbsp; longtext</option>
                          </select>
                          &nbsp;
                      </td>
                      <td> &nbsp; <input type="text" style="width: 4em;" name="length"> &nbsp; </td>
                      <td> &nbsp;
                          <select name="options" id=""  style="width: 16em;">
                              <option value="unsigned">unsigned</option>
                              <option value="zerofill">zerofill</option>
                              <option value="unsigned zerofill">unsigned zerofill</option>
                          </select>
                          &nbsp;
                      </td>
                      <td>
                      &nbsp;  <input type="checkbox" name="null" id="" value="NULL"> &nbsp;
                      </td>
                      <td>
                      &nbsp; <input type="radio" name="authinc" id="" value="AUTO_INCREMENT"> &nbsp;
                      </td>
                      <td> &nbsp; <button type="button" onclick="myFunction()" style="color: blue; font-size: 1.2em;">+</button> &nbsp; &nbsp; <button type="button" onclick="reFunction()" style="color: blue; font-size: 1.2em;">x</button> &nbsp; </td>
                  </tr>
              </table>
                        <input type="submit" name="submit" value="Save" style="margin-top: 1em;">
                        
                    </form>

<script>
function myFunction() {
  var table = document.getElementById("myTable");
  var row = table.insertRow(2);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  var cell6 = row.insertCell(5);
  var cell7 = row.insertCell(6);
  cell1.innerHTML = "&nbsp; <input type='text' name='columnname' style='margin-top: 0.5em; margin-bottom: 0.5em;'>&nbsp;";
  cell2.innerHTML = "&nbsp; <select name='type'> <option>Numbers</option> <option value='tinyint'> &nbsp;&nbsp; tinyint</option> <option value=smallint> &nbsp;&nbsp; smallint</option> <option value='mediumint'> &nbsp;&nbsp; mediumint</option> <option value='bigint'> &nbsp;&nbsp; bigint</option> <option value='int'> &nbsp;&nbsp; int</option> <option value='decimal'> &nbsp;&nbsp; decimal</option> <option value='float'> &nbsp;&nbsp; float</option> <option value='double'> &nbsp;&nbsp; double</option> <option>Date and Time</option> <option value='date'> &nbsp;&nbsp; date</option> <option value='datetime'> &nbsp;&nbsp; datetime</option> <option value='timestamp'> &nbsp;&nbsp; timestamp</option> <option value='time> &nbsp;&nbsp; time</option> <option value='year'> &nbsp;&nbsp; year</option> <option>Strings</option> <option value='char'> &nbsp;&nbsp; char</option> <option value='varchar'> &nbsp;&nbsp; varchar</option> <option value='tinytext'> &nbsp;&nbsp; tinytext</option> <option value='text'> &nbsp;&nbsp; text</option> <option value='mediumtext'> &nbsp;&nbsp; mediumtext</option> <option value='longtext'> &nbsp;&nbsp; longtext</option> </select> &nbsp;";
  cell3.innerHTML = "&nbsp; <input type='text' style='width: 4em;' name='length'> &nbsp;";
  cell4.innerHTML = "&nbsp; <select name='options'  style='width: 16em;'> <option value='unsigned'>unsigned</option> <option value='zerofill'>zerofill</option> <option value='unsigned zerofill'>unsigned zerofill</option> </select> &nbsp;";
  cell5.innerHTML = "&nbsp;  <input type='checkbox' name='null' value='NULL'> &nbsp;";
  cell6.innerHTML = "&nbsp; <input type='radio' name='authinc' value='AUTO_INCREMENT'> &nbsp;";
  cell7.innerHTML = "&nbsp; <button type='button' onclick='myFunction()' style='color: blue; font-size: 1.2em;'>+</button> &nbsp; &nbsp; <button type='button' onclick='reFunction()' style='color: blue; font-size: 1.2em;'>x</button> &nbsp;";
  
}
function reFunction() {
    document.getElementById("myTable").deleteRow(1);
}
</script>          
           
</body>
</html>