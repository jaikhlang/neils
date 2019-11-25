@extends('layouts.manage')
@section('title', 'View')
@section('stylesheets')
<style media="screen">
  #apply{
    font-family: sans-serif;
  }
</style>
@endsection
@section('content')
<section id="apply" class="border-top">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8 py-5">
            <div class="mb-3 text-center">
              <span class="font-weight-bold h4">NEILS CONFERENCE 2020</span>
              <span class="h6 d-block font-weight-bold">EDIT APPLICATION</span>
            </div>
              <div class="card">


                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif


                      <form class="" action="{{ route('users.updateUser', $user) }}" method="POST" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="mb-2 row">
                          <div class="col-md-6">
                            <label for="name">First Name</label>
                            <input type="text" name="firstname" class="form-control" value="{{ $user->firstname }}">
                          </div>
                          <div class="col-md-6">
                            <label for="name">Last Name</label>
                            <input type="text" name="lastname" class="form-control" value="{{ $user->lastname }}">
                          </div>
                        </div>

                        <div class="mb-2 row">
                          <div class="col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                          </div>
                          <div class="col-md-6">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ $user->phone }}" maxlength="10" autofocus>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>

                        <div class="mb-2 row">
                          <div class="col-md-6">
                            <div class="mb-2">
                              <label for="gender">Gender</label>
                              <select class="form-control @error('gender') is-invalid @enderror" name="gender" required>
                                <option value="" disabled>Select Gender</option>
                                <option value="male" {{ $user->gender == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ $user->gender == 'female' ? 'selected' : '' }}>Female</option>
                                <option value="other" {{ $user->gender == 'other' ? 'selected' : '' }}>Other</option>
                              </select>
                              @error('gender')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                          </div>
                          <div class="col-md-6 d-none">

                          </div>
                        </div>

                        <div class="mb-2 row">
                          <div class="col-md-6">
                            <div class="mb-2">
                              <label for="country">Country</label>
                              <input type="text" name="country" class="form-control @error('country') is-invalid @enderror" value="{{ $user->country }}" required>
                              @error('country')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                          </div>
                          <div class="col-md-6">

                            <div class="mb-2">
                              <label for="passportnumber">Passport Number (For foreign participants)</label>
                              <input type="text" name="passportnumber" class="form-control @error('passportnumber') is-invalid @enderror" value="{{ $user->passport_number }}">
                              @error('passportnumber')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                          </div>
                        </div>

                        <div class="mb-2">
                          <label for="address">Address</label>
                          <textarea name="address" class="form-control @error('address') is-invalid @enderror" rows="3" cols="80" required>{{ $user->address }}</textarea>
                          @error('address')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>

                        <div class="mb-2">
                          <label for="affiliation">Affiliation</label>
                          <input type="text" name="affiliation" class="form-control @error('affiliation') is-invalid @enderror" value="{{ $user->affiliation }}">
                            @error('affiliation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2">
                          <label for="code_no">Participant Category</label>
                          <select id="category" class="form-control @error('code_no') is-invalid @enderror" name="code_no">
                            <option value="null" disabled>Select Participant Category</option>
                            @foreach ($categories as $key => $category)
                              <option value="{{ $category->code_no }}" {{ $user->category->code_no == $category->code_no ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                          </select>
                          @error('code_no')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>

                        <div class="mb-2">
                          <label for="document_url" class="d-block">Please provide evidence such as a letter from the Head of the Department. <span class="text-danger">*</span></label>
                          <div class="d-md-flex align-items-center">
                            <a href="{{ asset(!empty($user->document_url) ? $user->document_url : null) }}" class="btn btn-outline-primary mr-2 mb-2">Attachment</a>
                            <input type="file" name="document_url" class="form-control-file mb-2 @error('document_url') is-invalid @enderror" value="{{ old('document_url') }}">
                          </div>
                          @error('document_url')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>

                        <div class="mb-2">
                          <label for="participation_category">Participation Category</label>
                          <select id="participation_category" class="form-control @error('participation_category') is-invalid @enderror" name="participation_category">
                            <option value="null" disabled>Participation Type</option>
                            <option value="presenter" {{ $user->participation_category == 'presenter' ? 'selected' : '' }}>Presenter or co-presenter.</option>
                            <option value="nonpresenter" {{ $user->participation_category == 'nonpresenter' ? 'selected' : '' }}>Non-presenter.</option>
                          </select>
                          @error('participation_category')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>

                        <div class="mb-2">
                          <label for="papertitle">Title of the paper (For presenter &amp Co-presenter)</label>
                          <input type="text" name="papertitle" class="form-control @error('papertitle') is-invalid @enderror" value="{{ $user->papertitle }}">
                          @error('papertitle')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>

                        <div class="mb-4">
                          <label for="remarks">Comments</label>
                          <textarea name="remarks" class="form-control @error('remarks') is-invalid @enderror" rows="3" cols="80">{{ $user->remarks }}</textarea>
                            @error('remarks')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div>

                        <div class=" text-right">
                          <input type="submit" class="btn btn-success btn-lg cursor-pointer" value="Update Application">
                        </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection

@section('scripts')
<script type="text/javascript">

</script>
@endsection
