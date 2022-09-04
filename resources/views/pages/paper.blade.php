@extends('layouts.app')
@section('title', 'Call for Paper')
<!-- Meta Tags  -->
@section('metatags')
<meta name="keywords" content="call for paper, paper, abstract submission, presentation, poster, neils conference">
<meta name="description" content="We are pleased to announce the Call for Papers for the 11th International Conference of the North East Indian Linguistics Society (NEILS). NEILS11 will take place from February 7-9, 2020, in Kokrajhar, Assam, India and will be hosted by the Department of Humanities and Social Sciences and Centre for Linguistics and Cultural Studies, Central Institute of Technology Kokrajhar.">
@endsection

<!-- Custom Styles -->
@section('stylesheets')
  <!-- Icons -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style media="screen">
    #showcase {
        background-image: -webkit-gradient(linear, 0 0, 100% 100%, color-stop(0, #003073), color-stop(100%, #029797));
        background-image: -webkit-linear-gradient(135deg, #003073, #029797);
        background-image: -moz-linear-gradient(45deg, #003073, #029797);
        background-image: -ms-linear-gradient(45deg, #003073 0, #029797 100%);
        background-image: -o-linear-gradient(45deg, #003073, #029797);
        background-image: linear-gradient(135deg, #003073, #029797);
    }

    .homemadeApple{
      font-family: 'Playfair Display', serif;

    }
  </style>

@endsection

<!-- Contents -->
@section('content')
  <!--section id="showcase" class="border-top border-bottom border-light">
    <div class="container">
      <div class="d-md-flex align-items-center">
        <div class="pr-md-4 mb-4  text-center text-md-right px-2 w-100 border-right">
          <h1 class="font-weight-bold"><img src="{{ asset('images/neils.png') }}" class="img-fluid" style="height: 60px;" alt=""><br>CONFERENCE 2023</h1>
        </div>
        <div class="pl-md-4 mb-4  text-center text-md-left px-2 w-100">
          <h4 class="font-weight-regular text-light">
            <span class="d-block h5 orange font-weight-semibold mb-0 pb-0">12th International Conference of the</span>
            <span class="d-block h2 font-weight-bold mb-3">North East Indian Linguistics Society</span>
            <span class="d-block h5"><span class="bg-orange px-2 py-2">February 3<sup>rd</sup>, 4<sup>th</sup> &amp; 5<sup>th</sup> 2023</span></span>
            <span class="d-block h5 pt-4"><span class="orange">Hosted By </span>Department of Linguistics, Gauhati University, Guwahati, Assam India</span>
          </h4>
        </div>
      </div>

      <div class="d-block text-center">
        <a href="{{ route('register') }}" class="d-inline-block btn btn-danger btn-lg">Register for NEILS12</a>
      </div>
    </div>
  </section-->

  <section id="" class="bg-light py-5 border-bottom border-top">
    <div class="container">
      <div class="row">
        <div class="col-md-8">

          <span class="d-block mb-2 font-weight-bold h4 text-dark homemadeApple py-2">Dear fellow linguist and/or North East Indianist,</span>
          <div class="text-justify bg-white border rounded px-4 py-4 mb-4">
            <span class="d-block text-dark-50 mb-2" style="text-indent: 50px;">
              We would like to announce the Call for Papers for the 12th International Conference of the North East Indian Linguistics Society (NEILS)! Although NEILS12 should have taken place earlier this year, the ongoing COVID-19 pandemic made this impossible. We are all the happier now that we expect to be able to gather for NEILS12 this coming February.
              NEILS12 will take place from February 3-5, 2023, in Guwahati, Assam, India and will be hosted by the Department of Linguistics at Gauhati University. Returning, once again, to the venue where NEILS started more than 15 years ago will provide us with the opportunity to celebrate the achievements of Prof. Jyotiprakash Tamuli, who is going to retire this year.
            </span>
            <span class="d-block text-dark-50 mb-2" style="text-indent: 50px;">
              As the primary focus of NEILS is the description of the rich cultural-linguistic diversity that exists in North East India, papers should have a primary descriptive component, preferably from a functional-typological or anthropological-linguistic perspective. Field reports are acceptable. Papers whose sole or primary focus is formal, theoretical and/or computational in nature, or papers whose focus is about languages not spoken in North East India, are unlikely to be accepted for presentation. However, we will consider papers concerning languages spoken in the areas of Myanmar, China, Bhutan, Bangladesh and West Bengal that border the North East.
            </span>
          </div>

          <div class="text-justify bg-white border rounded px-4 py-4 mb-4">
            <span class="d-block text-dark-50 mb-2">
              <span class="d-block text-dark-50 font-weight-bold">Abstract Submission:</span>
              <span class="d-block" style="text-indent: 50px;">
              To present a paper at the conference, please prepare an abstract of no more than 500 words (exclusive of data and references, if any). Please write your abstract using only <span style="font-family: 'Times New Roman', Times, serif; font-size: 16px;" class="font-weight-bold">Times New Roman, 12pt.</span> In the first line(s), give the full title of your paper; below it give your name and affiliation (e.g., [Stephen Morey (La Trobe University)]; below it leave one line empty; and below that, give the abstract, followed by references, if any. Examples/tables/figures should be inserted where discussed, rather than at the end of the abstract.</span>
            </span>

            <span class="d-block py-4 bg-orange text-white px-4 mb-4 rounded h5">
              <span class="font-semibold">Please submit your abstract no later than September 1, 2022 on the EasyChair website: </span> <a href="https://easychair.org/conferences/?conf=neils12" class="text-white text-decoration-none" target="_blank">https://easychair.org/conferences/?conf=neils12</a>
            </span>

            <div class="">

              <span>

                <span class="d-block mb-2">You will need to upload a PDF of your abstract at the end of the EasyChair submission form!</span>

                <span>If you re using EasyChair for the first time, you may consult instructions that are
                appended <strong>**at the end of this email**</strong> (please scroll all the way down).
                Notification of abstract acceptance will normally take place in early October, although early
                submissions/decisions for those needing to make extensive advance travel arrangements can
                be arranged.</span>
              </span>

              <!--span class="d-block text-dark-50 font-weight-bold">EasyChair abstract submission instructions:</span-->
              <!--ul class="mb-4 list-unstyled">
                <li class="border-bottom border-dark-50 py-2">
                  (1)   If you do not have an EasyChair account yet, you will first need to create one. The link above takes you to the log-in page – just below the red “Log in” button, you can click on “create an account”. If you have used EasyChair before (for example for NEILS10), you can log in with the same user name and password that you have used before.
                </li>
                <li class="border-bottom border-dark-50 py-2">
                  (2)   Once you are logged in to your EasyChair account, the NEILS11 page of EasyChair will open. It clearly says at the top “NEILS11 (11th International Conference of the North East Indian Linguistics Society)”. Click on the blue link that says “enter as an author”.
                </li>
                <li class="border-bottom border-dark-50 py-2">
                  (3)   The next page is the abstract submission page. It requires you to enter the following information:
                  <div class="ml-4 text-sm">
                    <span class="d-block py-1 border-bottom pl-4 ">a.     “Author 1”: If you are the single author of your paper, just fill in this information. You may click on “click here to add yourself” so the system fills in (part of) the necessary information
                    </span>
                    <span class="d-block py-1 border-bottom pl-4 ">b.     “Author 2”/ “Author 3”: If you don’t have any co-authors of your paper, just skip this step. If you do have co-authors, put their information in these boxes.
                    </span>
                    <span class="d-block py-1 border-bottom pl-4 ">c.     “Title and Abstract”: Copy and paste both your title and your entire abstract in the given boxes. To do so, you can go to your word document, highlight/select the title and press “Ctrl” and “c” at the same time, then go to the EasyChair website and in the ‘title’ box press “Ctrl” and “v”. Then do the same for the entire abstract.
                    If your abstract contains figures and/or tables, they will not show up here. Don’t worry about this as you will also upload a file with your abstract in the “Uploads” section (see e. below).
                  </span>
                    <span class="d-block py-1 border-bottom pl-4 ">d.     “Keywords”: Specify 3 keywords that characterize the content of your paper. This can be about the linguistic subdiscipline (phonology, morphology, etc.), language family or branch, or more specific notions (“speech act participants”, “verb agreement”, “tone”, etc.)
                    </span>
                    <span class="d-block py-1 border-bottom pl-4 ">e.    “Preference for 20 minute slot”: If you prefer a 20 minute time slot for your presentation (rather than 30 minutes), please check the box.
                    </span>
                    <span class="d-block py-1 border-bottom pl-4 ">f.     “Abstract upload”: Upload the actual file of your abstract here. Click on 'Browse...' and find the location of the file on your computer. Ideally, this should be a PDF document but if need be, DOC, DOCX, or ODT documents are also acceptable. Please write your abstract using Times New Roman, 12pt. In the first line(s), give the full title of your paper; below it give your name and affiliation (e.g., [Stephen Morey (La Trobe University)]; below it leave one line empty; and below that, give the abstract, followed by references, if any. Examples/tables/figures should be inserted where discussed, rather than at the end of the abstract.
                    </span>
                    <span class="d-block py-1 pl-4 ">g.      Finally, click the “Submit” button. The system will generate an email that confirms your submission.
                    </span>
                  </div>
                </li>
              </ul-->

              <!--div class="">
                  If you have trouble submitting your abstract on the EasyChair website, please get in touch with <strong>Linda Konnerth (linda.konnerth@mail.huji.ac.il).</strong><br>
                  Notification of abstract acceptance will normally take place in early October, although early submissions/decisions for those needing to make extensive advance travel arrangements can be arranged.
              </div-->
            </div>

          </div>

          <div class="text-justify bg-white border rounded px-4 py-4 mb-4">
            <div class="mb-4">
              <span class="d-block text-dark-50 font-weight-bold mb-2">Presentation time slots</span>
              <span class="d-block text-justify">
                At NEILS12, the schedule will again include a mix of <strong>20 minute and 30 minute slots</strong> for presentations. Generally, the Program Committee gives 30 minute slots to those papers that appear to require, and benefit from, more time for presentation and discussion, based on the submitted abstract. However, those participants who prefer a 20 minute slot should check the box <strong>"Preference for 20 minute time slot"</strong> during the abstract submission in EasyChair.
              </span>
            </div>
            <div class="mb-4">
              <span class="d-block text-dark-50 font-weight-bold mb-2">Fees</span>
              <span class="d-block text-justify mb-2">
                The fee schedule for NEILS is as follows, and includes lunch and tea/snacks on each day of the conference:
              </span>
              <table class="table border">
                <tbody>
                  <tr class="">
                    <td class="px-4 text-nowrap">Rs. 1000</td>
                    <td class="px-4 border-left"><strong>SAARC student without</strong> financial support <i>(please provide evidence such as a letter from the Head of the Department)</i></td>
                  </tr>
                  <tr class="border-top">
                    <td class="px-4 text-nowrap">Rs. 2200</td>
                    <td class="px-4 border-left"><strong>SAARC student with</strong> financial support</td>
                  </tr>
                  <tr class="border-top">
                    <td class="px-4 text-nowrap">Rs. 3200</td>
                    <td class="px-4 border-left"><strong>SAARC non-student</strong> (includes teaching faculty pursuing PhD) or International student</td>
                  </tr>
                  <tr class="border-top">
                    <td class="px-4 text-nowrap">Rs. 5500</td>
                    <td class="px-4 border-left"><strong>International non-student</strong></td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="mb-4">
              <span class="d-block text-dark-50 font-weight-bold mb-2">Important Dates</span>

              <table class="table w-100 border mb-2">
                <tbody>
                  <tr class="">
                    <td class="text-nowrap px-4 font-weight-bold">September  1, 2022:</td>
                    <td class="px-4 border-left font-weight-bold">Abstract submission deadline.</td>
                  </tr>
                  <tr class="border-top">
                    <td class="text-nowrap px-4">Early October </td>
                    <td class="px-4 border-left">Notification of abstract acceptance.</td>
                  </tr>
                  <tr class="border-top">
                    <td class="text-nowrap px-4">November 1, 2022 </td>
                    <td class="px-4 border-left">Registration opens (for presenters and non-presenters).</td>
                  </tr>
                  <tr class="border-top">
                    <td class="text-nowrap px-4 font-weight-bold">December 1, 2022 </td>
                    <td class="px-4 border-left font-weight-bold">Registration closes for presenters.</td>
                  </tr>
                  <tr class="border-top">
                    <td class="text-nowrap px-4">January 15, 2023 </td>
                    <td class="px-4 border-left">Registration closes for non-presenters.</td>
                  </tr>
                  <tr class="border-top">
                    <td class="text-nowrap px-4">January 16, 2023 </td>
                    <td class="px-4 border-left">Last day to cancel registration.</td>
                  </tr>
                </tbody>
              </table>

              <div class="">
                  Note: We will need to collect registration fees at the time of registration (i.e., by January 15, 2023 at the latest). We are currently setting up payment options. Details will be provided when registration opens on November 1st.
              </div>
            </div>
          </div>

          <div class="text-justify bg-white border rounded px-4 py-4 mb-4">
            <div class="mb-4">
              <span class="d-block text-dark-50 font-weight-bold">Certificates</span>
              <span class="d-block text-justify">
                The NEILS policy on certificates is as follows:
              </span>
            </div>
            <div class="mb-4">
              <ul class="list-unstyled">
                <li class="border-bottom">a) Everyone attending the conference will have to register themselves by paying the relevant fees. We do not have a single day fee.</li>
                <li class="border-bottom">b) Certificates will be issued only to paper presenters. Merely registering for the conference by paying the relevant fees will not entitle a person to a certificate.</li>
                <li class="border-bottom">c) In order to receive individual certificates, each co-author of a paper will have to pay the relevant registration fees irrespective of whether they attend the conference in person or not. If a fee is not paid by non-attending authors, only one certificate will be issued to the attending author, but naming the paper and all the authors.</li>
                <li class="border-bottom">d) Jointly authored papers, one of whose authors is unable to attend the conference, will be considered for publication in the NEILS volumes under the name of all co-authors.</li>
              </ul>
            </div>

            <div class="mb-4">
              <span class="d-block text-dark-50 font-weight-bold">Accommodation</span>
              <span class="d-block text-justify">
                Accommodation will be available, and will be announced in due course.
              </span>
            </div>

            <div class="mb-4">
              <span class="d-block text-dark-50 font-weight-bold">Contact</span>
              <span class="d-block text-justify">
                For any specific questions, please contact any organizers.
              </span>
            </div>

            <div class="mb-2">
              <span class="block mb-2">We look forward to welcoming you to Guwahati in February!</span>
            </div>

            <div class="">
              <span class="mb-4 d-block font-weight-bold">
                With our best,<br>
                The Organizers, NEILS12
              </span>


              <div class="row">
                  <div class="mb-2 col-md-6">
                    <span class="d-block font-weight-bold">Prafulla Basumatary </span>
                    <span class="d-block">(Gauhati University)</span>
                    <span class="d-block">pbasumatari@gmail.com</span>
                  </div>
                  <div class="mb-2 col-md-6">
                    <span class="d-block font-weight-bold">Krishna Boro </span>
                    <span class="d-block">(Gauhati University and University of Oregon)</span>
                    <span class="d-block">krishnaboro08@gmail.com</span>
                  </div>
                  <div class="mb-2 col-md-6">
                    <span class="d-block font-weight-bold">Bihung Brahma </span>
                    <span class="d-block">(Central Institute of Technology Kokrajhar)</span>
                    <span class="d-block">bihung.brahma@gmail.com</span>
                  </div>
                  <div class="mb-2 col-md-6">
                    <span class="d-block font-weight-bold">Scott DeLancey </span>
                    <span class="d-block">(University of Oregon)</span>
                    <span class="d-block">delancey@uoregon.edu</span>
                  </div>
                  <div class="mb-2 col-md-6">
                    <span class="d-block font-weight-bold">Linda Konnerth </span>
                    <span class="d-block">(Hebrew University and University of Oregon)</span>
                    <span class="d-block">linda.konnerth@mail.huji.ac.il</span>
                  </div>
                  <div class="mb-2 col-md-6">
                    <span class="d-block font-weight-bold">Stephen Morey </span>
                    <span class="d-block">(La Trobe University)</span>
                    <span class="d-block">s.morey@latrobe.edu.au</span>
                  </div>
                  <div class="mb-2 col-md-6">
                    <span class="d-block font-weight-bold">Mijke Mulder </span>
                    <span class="d-block">(Chiang Mai University)</span>
                    <span class="d-block">mijke.mulder@gmail.com</span>
                  </div>
                  <div class="mb-2 col-md-6">
                    <span class="d-block font-weight-bold">Kellen Parker van Dam </span>
                    <span class="d-block">(University of Zurich)</span>
                    <span class="d-block">kellenparker@gmail.com</span>
                  </div>
                  <div class="mb-2 col-md-6">
                    <span class="d-block font-weight-bold">Jyotiprakash Tamuli </span>
                    <span class="d-block">(Gauhati University)</span>
                    <span class="d-block">jyotiprakash.tamuli@gmail.com</span>
                  </div>
                  <div class="">
                    <div class="mx-3 my-3" style="width: 100%; border-bottom: 1px solid #ccc;"></div>
                    <a href="http://www.neils.org.in/" class="px-3 text-decoration-none text-dark">http://www.neils.org.in</a><br>
                    <a href="http://sealang.net/neils" class="px-3 text-decoration-none text-dark">http://sealang.net/neils</a>
                  </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="bg-white rounded px-4 py-4 border">
            <a href="{{ route('register') }}" class="d-block btn btn-primary btn-lg mx-4 my-4" target="_blank">NEILS12 Registtration</a>
            <a href="{{ url('https://easychair.org/conferences/?conf=neils12') }}" class="d-block btn btn-outline-danger btn-lg mx-4 my-4" target="_blank">Abstract Submission Link</a>
            <a href="{{ asset('uploads/instructions.pdf') }}" class="d-block btn btn-outline-danger btn-lg mx-4 my-4" target="_blank">EasyChair Instructions</a>
          </div>

          <!--div class="py-4 text-danger" id="posterpresenter">
            <span class="d-block font-weight-bold">Instructions for the Poster Presenters:</span>
              a. Poster Size:  5 feet height and 4 feet width (5x4).<br>
              b. Poster should be flex printing.<br>
              c. Printing can be made by the host if the presenters send the poster file in advance (Printing cost will be charged from presenters).<br>
              d. For any query mail or call Bihung Brahma

              <div class="">
                Email:b.brahma@cit.ac.in<br>
                Mobile: 8472014223
              </div>
          </div-->
        </div>
      </div>
    </div>
  </section>

  @include('layouts.partials.footer')
@endsection

<!-- Custom Scripts -->
@section('scripts')

@endsection
