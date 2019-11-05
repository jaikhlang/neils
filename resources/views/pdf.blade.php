<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Category</th>
        <th>Type</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>
          {{$user->firstname .' '. $user->lastname}}
        </td>
        <td>
          {{$user->category->name}}
        </td>
        <td>
          {{$user->participation_category == 'presenter' ? 'Presenter/Co-presenter' : 'Participant' }}
        </td>
      </tr>
      </tbody>
    </table>
  </body>
</html>
