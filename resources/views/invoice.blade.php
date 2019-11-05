<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html">
    <title>Invoice | NEILS 2020</title>
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
          <img src="{{ asset('images/logo.png') }}" class="w-42" alt="">
          <div class="flex-1 ml-2">
            <h4 class="font-semibold text-gray-800">11th International Conference of the</h4>
            <h2 class="font-semibold uppercase text-blue-900">North East Indian Linguistics Society (NEILS)</h2>
            <div class="text-sm">
              <span class="block">February 7th, 8th & 9th of 2020 | CIT Kokrajhar BTAD Assam India</span>
            </div>
          </div>

        </div>

        <div class="text-center">
          <h6 class="font-semibold text-sm text-gray-800">Hosted by Department of Humanities & Social Sciences <br>& Center for Linguistics and Cultural Studies, CIT Kokrajhar</h6>
          <a href="{{ url('/') }}" class="text-decoration-none text-gray-800">http://neils.co.in</a>
        </div>
        <div class="text-center">
          <span class="block">INVOICE</span>
        </div>

        <table class="table-auto border-none w-full mb-0">
          <tbody>
            <tr>
              <td class="border-b border-t border-r px-4 py-2">Invoice Id:</td>
              <td class="border-b border-t px-4 py-2">{{ $user->regno }}</td>
            </tr>
            <tr class="bg-gray-100">
              <td class="border-b border-r px-4 py-2">Name:</td>
              <td class="border-b px-4 py-2">{{ $user->firstname.' '.$user->lastname }}</td>
            </tr>
            <tr>
              <td class="border-b border-r px-4 py-2">Email:</td>
              <td class="border-b px-4 py-2">{{ $user->email }}</td>
            </tr>
            <tr class="bg-gray-100">
              <td class="border-b border-r px-4 py-2">Phone:</td>
              <td class="border-b px-4 py-2">{{ $user->phone }}</td>
            </tr>
            <tr>
              <td class="border-b border-r px-4 py-2">Purpose:</td>
              <td class="border-b px-4 py-2">Registration for NEILS Conference 2020.</td>
            </tr>
            <tr>
              <td class="border-r px-4 py-2">Amount:</td>
              <td class="px-4 py-2" colspan="2">{{ $user->payment->amount }} INR (Registration Fee)</td>
            </tr>
            <tr>
              <td class="border-r px-4 py-2">Reference:</td>
              <td class="px-4 py-2" colspan="2">{{ $user->payment->paymentId }}</td>
            </tr>
          </tbody>
        </table>
        <div class="text-center py-2">
          <span class="block">Computer generated receipt doesn't require any signature.</span>
        </div>
      </div>
    </div>
  </body>
  <script type="text/javascript">
        window.onload = function() { window.print(); }
   </script>
</html>
