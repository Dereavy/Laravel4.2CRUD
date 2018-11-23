
 <div class="container">
 <div class="row">
 <div class="col-lg-12">
<h2>Edit your message</h2>
<form method="POST" action="{{url('contact/edit')}}/{{ $contact["id"] }}" > 
  First name:<br>
  <input type="text" name="firstname" value={{ $contact["firstname"] }}><br>
  Last name:<br>
  <input type="text" name="lastname" value={{ $contact["lastname"] }}><br>
  Subject:<br>
  <input type="text" name="subject" value={{ $contact["subject"] }}><br>
Your message:<br>
  <textarea name="message" cols="40" rows="5" value={{ $contact["message"] }}>{{ $contact["message"] }}</textarea><br><br>
  <input type="submit" value="Edit" url="{{url('contact') }}">
</form> 
</div>
</div>
</div>