<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html">
    <title>NEILS 2020 Application</title>
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

        <table class="table-auto border-none w-full">
          <tbody>
            <tr>
              <td class="border-b border-t border-r px-4 py-2">Name</td>
              <td class="border-b border-t px-4 py-2" colspan="2">Jaikhlang Brahma</td>
            </tr>
            <tr class="bg-gray-100">
              <td class="border-b border-r px-4 py-2">Email</td>
              <td class="border-b px-4 py-2" colspan="1">jaikhlang@gmail.com</td>
              <td class="text-right border-l w-40" rowspan="5" colspan="1"><img src="{{ asset('images/peoples/jakie.jpg')}}" class="w-40 text-right" alt=""></td>
            </tr>
            <tr>
              <td class="border-b border-r px-4 py-2">Phone</td>
              <td class="border-b px-4 py-2" colspan="1">7896164661</td>
            </tr>
            <tr class="bg-gray-100">
              <td class="border-b border-r px-4 py-2">Gender</td>
              <td class="border-b px-4 py-2" colspan="1">Male</td>
            </tr>
            <tr>
              <td class="border-b border-r px-4 py-2">Country</td>
              <td class="border-b px-4 py-2" colspan="1">India</td>
            </tr>
            <tr class="bg-gray-100">
              <td class="border-b border-r px-4 py-2">Passport Number</td>
              <td class="border-b px-4 py-2" colspan="2">12345678</td>
            </tr>
            <tr>
              <td class="border-b border-r px-4 py-2">Address</td>
              <td class="border-b px-4 py-2" colspan="2">Simla Baksa Assam India 783370</td>
            </tr>
            <tr class="bg-gray-100">
              <td class="border-b border-r px-4 py-2">Affiliation</td>
              <td class="border-b px-4 py-2" colspan="2">CIT Kokrajhar</td>
            </tr>
            <tr>
              <td class="border-b border-r px-4 py-2">Participant Category</td>
              <td class="border-b px-4 py-2" colspan="2">SAARC non-student (including teaching faculty pursuing PhD) or International student.</td>
            </tr>
            <tr class="bg-gray-100">
              <td class="border-b border-r px-4 py-2">Participation Category</td>
              <td class="border-b px-4 py-2" colspan="2">Presenter/Co-Presenter</td>
            </tr>
            <tr>
              <td class="border-b border-r px-4 py-2">Paper Title</td>
              <td class="border-b px-4 py-2" colspan="2">The paper title faculty pursunternational student.</td>
            </tr>
            <tr class="bg-gray-100">
              <td class="border-b border-r px-4 py-2">Comments</td>
              <td class="border-b px-4 py-2" colspan="2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde nobis, beatae amet necessitatibus totam nostrum aut minus, vitae earum facere ullam cumque ad ipsum nemo aliquid. Dolorum hic nobis earum.</td>
            </tr>
            <tr>
              <td class="border-r px-4 py-2">Registration Fee</td>
              <td class="px-4 py-2" colspan="2">2500 INR (INSTAMOJO23456666) 22.11.2019</td>
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
