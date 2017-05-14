{{-- We use the layout.app to boostrap our page --}}
@extends('layouts.app')

@section('content')
  <html>
      <head>
          <script type="text/javascript">

              v

              function completeSchedule()
              {
                for (var i = 1; i < 13; i++) {
                  var newRow = document.createElement('tr');

                  newRow.innerHTML = '<td> '+i+'</td><td width="140"><button class="addCourse" type="btn">+</button></td><td width="140"> <button class="addCourse" type="btn">+</button></td><td width="140"><button class="addCourse" type="btn">+</button><td width="140"> <button class="addCourse" type="btn">+</button></td><td width="140"> <button class="addCourse" type="btn">+</button></td><td width="140"><button class="addCourse" type="btn">+</button><td width="140"> <button class="addCourse" type="btn">+</button></td>';

                  document.getElementById('schedule').appendChild(newRow);
                }
              }



          </script>
      </head>
      <body onload="completeSchedule();">
          <table border="1" id="schedule" align="center">
              <tr>
                  <th>Hour</th>
                  <th>Monday</th>
                  <th>Tuesday</th>
                  <th>Wednesday</th>
                  <th>Thursday</th>
                  <th>Friday</th>
                  <th>Saturday</th>
                  <th>Sunday</th>
              </tr>
              <tbody>

              </tbody>
          </table>
      </body>
  </html>
@endsection
