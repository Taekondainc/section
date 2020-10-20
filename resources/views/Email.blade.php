

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
      body{color:black;}
      table{margin-10px;}
  </style>
  <body>
     <div style="display: grid;justify-content:center;">
        @component('mail::message')
        @component('mail::header', ['url' => 'Growguyana.com/Blog'])
           <img src="https://res.cloudinary.com/taekondainc-com/image/upload/v1601849756/growgy/logogg_ymleug.png"
            width="120px" >
        @endcomponent




<h2>  To: {{$data["email"]}}</h2>
<h2>
{{'HEY valued subscriber !!! New Blog Post for you .'}}
</h2>
<div>
<h2> Title: {{$data["subject"]}}</h2>

</div><br>
<div>
 <h2> Content:<br> {{$data["message"]}}</h2>
</div>
<br>
@component('mail::button', ['url' => 'Growguyana.com/Blog'])
See Blog Posts
@endcomponent
<br>

Thanks<br>  GrowGuyana<br></div>
@endcomponent
</body>
