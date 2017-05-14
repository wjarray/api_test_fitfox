<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insert Customer </title>
  </head>
  <body>

    <h1> Welcome, please sign in </h1>
    <center>

      <form action="/addCustomer" method="post">
        <tr>
          {{ csrf_field() }}
          <td> Customer Name : </td>
          <td><input type="text" name="customerName" ></td>
        </tr>

        <tr>
          <td> Customer email : </td>
          <td><input type="text" name="customerEmail"></td>
        </tr>

        <tr>
          <td> Customer password : </td>
          <td><input type="password" name="customerPassword"></td>
        </tr>

        <tr>
          <td><input type="submit" name="Submit" value="Add"></td>
        </tr>

      </form>
    </center>

  </body>
</html>
