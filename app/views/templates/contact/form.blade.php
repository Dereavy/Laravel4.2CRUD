 
 <div class="container">
 <div class="row">
 <div class="col-lg-12">
 <h2>Send your message</h2>
<form method="POST" action="{{url('contact/add')}}" > 
  First name:<br>
  <input type="text" name="firstname" value="Mickey"><br>
  Last name:<br>
  <input type="text" name="lastname" value="Mouse"><br>
  Subject:<br>
  <input type="text" name="subject" value="Contact motif:"><br>
Your message:<br>
  <textarea name="message" cols="40" rows="5" value="Your text here"></textarea><br><br>
  {{-- HTML::bs4_input('email', 'Entrez votre email', 'email') --}}
  <input type="submit" value="Submit">
</form> 
</div>
</div>
</div>

{{--
{{ Form::open(array('action' => "HomeController@bienvenue")) }}
First name:<br>
  <input type="text" name="firstname" value="Mickey"><br>
Last name:<br>
  <input type="text" name="lastname" value="Mouse"><br>
Your message:<br>
  <textarea name="message" cols="40" rows="5" value="Your text here"></textarea><br><br>
  <input type="submit" value="Submit">
{{ Form::close() }}
--}}
