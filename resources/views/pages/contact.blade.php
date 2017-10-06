@extends('main')

@section('title', '| Contact Me')

@section('content')
      <div class="row">
        <div class="col-md-12">
          <h1>Contact Me</h1>
          <hr>
          <form>
            <div class="form-group">
              <label name="email">Email:</label>
              <input type="text" name="email" class="form-control" id="email">
            </div>

            <div class="form-group">
              <label name="subject">Subject:</label>
              <input type="text" name="subject" class="form-control" id="subject">
            </div>

            <div class="form-group">
              <label name="message">Message:</label>
              <textarea class="form-control" name="message" id="message">Type your message here...</textarea>
            </div>

            <input type="submit" value="Send Message" class="btn btn-success">
          </form>
        </div>
      </div>
@endsection
