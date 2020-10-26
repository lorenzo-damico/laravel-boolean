<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Studenti</title>
  </head>
  <body>
    <h1>Studenti</h1>

    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Lastname</th>
          <th>Gender</th>
          <th>Date of birth</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($students as $student)
          <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->lastname }}</td>
            <td>{{ $student->gender }}</td>
            <td>{{ $student->date_of_birth }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>
