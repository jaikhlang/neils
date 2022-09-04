<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html">
    <title>Application | NEILS12</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" media="print, screen">
    <style media="screen, print">
      html, body{
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
      }
    </style>
  </head>
  <body class="">
    <div class="mx-auto">
      <div id="main" class="bg-white border border-gray-200 rounded">
        <div class="px-4 py-4 flex items-center border-b">
          <img src="{{ asset('images/neils.png') }}" class="w-32" alt="">
          <div class="flex-1 ml-4">
            <h4 class="font-semibold text-gray-800">12th International Conference of the</h4>
            <h2 class="font-bold uppercase text-blue-900 text-2xl">North East Indian Linguistics Society (NEILS)</h2>
            <div class="text-sm">
              <span class="block">February 3rd, 4th & 5th of 2023 | Gauhati University, Guwahati, Assam India</span>
            </div>
          </div>

        </div>

        <div class="text-center py-2">
          <h6 class="font-semibold text-sm text-gray-800">Hosted by Department of Linguistics, Gauhati University, Guwahati Assam India</h6>
          <a href="{{ url('/') }}" class="text-decoration-none text-gray-800">https://neils.org.in</a>
        </div>

        <table class="table-auto border-none w-full">
          <tbody>
            <tr class="bg-gray-100">
              <td class="border-b border-t border-r px-4 py-2">Registration No</td>
              <td class="border-b border-t px-4 py-2 uppercase">{{ $user->regno }}</td>
            </tr>
            <tr>
              <td class="border-b border-t border-r px-4 py-2">Name</td>
              <td class="border-b border-t px-4 py-2 uppercase">{{ $user->firstname.' '.$user->lastname }}</td>
            </tr>
            <tr class="bg-gray-100">
              <td class="border-b border-r px-4 py-2">Email</td>
              <td class="border-b px-4 py-2">{{ $user->email }}</td>
            </tr>
            <tr>
              <td class="border-b border-r px-4 py-2">Phone</td>
              <td class="border-b px-4 py-2">{{ $user->phone }}</td>
            </tr>
            <tr class="bg-gray-100">
              <td class="border-b border-r px-4 py-2">Gender</td>
              <td class="border-b px-4 py-2 capitalize">{{ $user->gender }}</td>
            </tr>
            <tr>
              <td class="border-b border-r px-4 py-2">Country</td>
              <td class="border-b px-4 py-2 capitalize">{{ $user->country }}</td>
            </tr>
            <tr class="bg-gray-100">
              <td class="border-b border-r px-4 py-2">Passport Number</td>
              <td class="border-b px-4 py-2">{{ !empty($user->passport_number) ? $user->passport_number : 'N/A' }}</td>
            </tr>
            <tr>
              <td class="border-b border-r px-4 py-2">Address</td>
              <td class="border-b px-4 py-2">{{ $user->address }}</td>
            </tr>
            <tr class="bg-gray-100">
              <td class="border-b border-r px-4 py-2">Affiliation</td>
              <td class="border-b px-4 py-2">{{ $user->affiliation }}</td>
            </tr>
            <tr>
              <td class="border-b border-r px-4 py-2">Participant Category</td>
              <td class="border-b px-4 py-2">{{ $user->category->name }}</td>
            </tr>
            <tr class="bg-gray-100">
              <td class="border-b border-r px-4 py-2">Participation Category</td>
              <td class="border-b px-4 py-2">{{ $user->participation_category == 'presenter' ? 'Presenter/Co-Presenter' : 'Participant' }}</td>
            </tr>
            <tr>
              <td class="border-b border-r px-4 py-2">Paper Title</td>
              <td class="border-b px-4 py-2">{{ $user->papertitle }}</td>
            </tr>
            <tr class="bg-gray-100">
              <td class="border-b border-r px-4 py-2">Comments</td>
              <td class="border-b px-4 py-2">{{ $user->remarks }}</td>
            </tr>
            <tr>
              <td class="border-r px-4 py-2">Registration Fee</td>
              @if(!empty($user->payment->amount))
              <td class="px-4 py-2">{{ $user->payment->amount }} INR ({{ $user->payment->paymentId }}) {{ $user->payment->created_at->format('d-m-Y') }}</td>
              @else
              <td class="px-4 py-2 text-red-500">Payment Not Done!!</td>
              @endif
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </body>
  <script type="text/javascript">
        window.onload = function() { window.print(); }
   </script>
</html>
