<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html">
    <title>Invoice | NEILS 2023</title>
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
      <div id="main" class="bg-white">
        <div class="px-4 py-4 text-center border-b border-dashed border-red-500">
          <div class="">
            <h4 class="font-semibold text-gray-800">12th International Conference of the</h4>
            <h2 class="font-semibold uppercase text-blue-900">North East Indian Linguistics Society (NEILS)</h2>
            <div class="text-sm">
              <span class="block">February 3rd, 4th & 5th of 2023 | Gauhati University, Guwahati, Assam, India</span>
            </div>
          </div>
        </div>

        <div class="text-center py-2">
          <h6 class="font-semibold text-sm text-gray-800">Hosted by Department of Linguistics, Gauhati University, Guwahati, Assam India</h6>
          <a href="{{ url('/') }}" class="text-decoration-none text-gray-800">https://neils.org.in</a>
        </div>
        <div class="text-center border-t border-dashed border-red-500 bg-red-200">
          <span class="block py-2 font-semibold">INVOICE</span>
        </div>

        <table class="table-auto border-none w-full mb-0">
          <tbody>
            <tr>
              <td class="border-red-500 border-dashed border-b border-t px-4 py-2">Invoice Id:</td>
              <td class="border-red-500 border-dashed border-b border-t px-4 py-2">{{ $user->regno }}</td>
            </tr>
            <tr class="">
              <td class="border-red-500 border-dashed border-b px-4 py-2">Date:</td>
              <td class="border-red-500 border-dashed border-b px-4 py-2">{{ $user->payment->created_at->format('d-m-Y') }}</td>
            </tr>
            <tr class="">
              <td class="border-red-500 border-dashed border-b px-4 py-2">Name:</td>
              <td class="border-red-500 border-dashed border-b px-4 py-2">{{ $user->firstname.' '.$user->lastname }}</td>
            </tr>
            <tr>
              <td class="border-red-500 border-dashed border-b px-4 py-2">Email:</td>
              <td class="border-red-500 border-dashed border-b px-4 py-2">{{ $user->email }}</td>
            </tr>
            <tr class="">
              <td class="border-red-500 border-dashed border-b px-4 py-2">Phone:</td>
              <td class="border-red-500 border-dashed border-b px-4 py-2">{{ $user->phone }}</td>
            </tr>
            <tr>
              <td class="border-red-500 border-dashed border-b px-4 py-2">Purpose:</td>
              <td class="border-red-500 border-dashed border-b px-4 py-2">Registration for NEILS Conference 2020.</td>
            </tr>
            <tr>
              <td class="border-red-500 border-dashed border-b px-4 py-2">Registration Fee:</td>
              <td class="border-red-500 border-dashed border-b px-4 py-2">{{ $user->calculateFee() }} INR</td>
            </tr>
            <tr>
              <td class="border-red-500 border-dashed border-b px-4 py-2">Convinience Fee:</td>
              <td class="border-red-500 border-dashed border-b px-4 py-2">{{ $user->payment->fees }} INR</td>
            </tr>
            <tr>
              <td class="border-red-500 border-dashed border-b px-4 py-2">Paid Amount:</td>
              <td class="border-red-500 border-dashed border-b px-4 py-2">{{ $user->payment->amount }} INR</td>
            </tr>
            <tr>
              <td class="border-red-500 border-dashed border-b px-4 py-2">Reference Id:</td>
              <td class="border-red-500 border-dashed border-b px-4 py-2" >{{ $user->payment->paymentId }}</td>
            </tr>
          </tbody>
        </table>
        <div class="text-right py-2 mt-4">
          <span class="d-block text-sm">The Organizers, NEILS12</span>
          <span class="block text-sm text-gray-700">Computer generated receipt doesn't require any signature.</span>
        </div>
      </div>
    </div>
  </body>
  <script type="text/javascript">
        // window.onload = function() { window.print(); }
   </script>
</html>
