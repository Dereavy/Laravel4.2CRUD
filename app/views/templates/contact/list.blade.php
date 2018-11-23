 <div class="container">
 <div class="row">
 <div class="col-lg-12">
  <h2>Messages</h2>
 <table>
  <tr class="tableTitle">
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Subject</th>
    <th>Message</th>
  </tr>
 
 @foreach($contacts as $contact)   
    <tr class="tableRow">
        <th>{{ $contact['firstname'] }}</th> 
        <th>{{ $contact['lastname'] }}</th>
        <th>{{ $contact['subject'] }}</th>
        <th>{{ $contact['message'] }}</th>
        <th>
            <form action="{{ url('contact/edit/')}}/{{ $contact['id'] }}" >
                <button name="edit" value="edit">Edit</button>
            </form>
            
        </th>
        <th>
            <form action=" {{ url('contact/remove/').'/'.$contact['id'] }} " method="post">
                <button name="delete" value="delete">Delete</button>
            </form>
        </th>
    </tr>
@endforeach

</table> 

 </div>
 </div>
 </div>