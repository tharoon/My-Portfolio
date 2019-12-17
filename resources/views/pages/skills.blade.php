<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Skills</title>
  <link rel = "stylesheet" type = "text/css" href = "{{ asset('css/portfolio.css')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
</head>


<body>
  <div class="headBox">
    <hr>
    <p class = "skillsheaderBox">SKILLS</p>
    <hr>
  </div>

  <div class="skills_row">
   <div class="skillscolumn leftcol">
    <h3 style = "font-family:rajdhani, sans-serif;font-weight: 600;">MARKETABLE SKILLS</h3><br>
    <div align="left">
     <div class="skillBar1">
      @foreach($data as $value)
          @if($value->box == 'box1')
            <div class="progressBar1"><i class="fas fa-desktop" style = "padding: 2px;"></i>{{ $value->skillname }}
          @endif
      @endforeach

      </div>
      @foreach($data as $value)
          @if($value->box == 'box1')
            <div class = "skillLevel">{{ $value->skillrating }}</div>
          @endif
      @endforeach
    </div>
  </div>
  <div align="left">
    <div class="skillBar2">
      @foreach($data as $value)
          @if($value->box == 'box2')
            <div class="progressBar2"><i class="fas fa-mobile-alt" style = "padding: 2px;"></i>
             {{ $value->skillname }}</div>
          @endif
      @endforeach

    </div>
    @foreach($data as $value)
          @if($value->box == 'box2')
            <div class = "skillLevel">{{ $value->skillrating }}</div>
          @endif
      @endforeach
  </div>


  <div align="left">
    <div class="skillBar3">
      @foreach($data as $value)
          @if($value->box == 'box3')
            <div class="progressBar3"><i class="fas fa-camera" style = "padding: 2px;"></i>{{ $value->skillname }}</div>
          @endif
      @endforeach

    </div>
    @foreach($data as $value)
        @if($value->box == 'box3')
            <div class = "skillLevel">{{ $value->skillrating }}</div>
        @endif
    @endforeach
  </div>

  <div align="left">
    <div class="skillBar4">
      @foreach($data as $value)
        @if($value->box == 'box4')
          <div class="progressBar4"><i class="fas fa-server" style = "padding: 2px;"></i>{{ $value->skillname }}</div>
        @endif
    @endforeach

    </div>
    @foreach($data as $value)
        @if($value->box == 'box4')
          <div class = "skillLevel">{{ $value->skillrating }}</div>
        @endif
    @endforeach
  </div>
</div>

<div class="skillscolumn1 rightcol">
 <h3 style = "font-family:rajdhani, sans-serif; font-weight: 600;">TRANSFERABLE SKILLS</h3>

 <div align="left">
  <div class="skillBar5">
    @foreach($data as $value)
        @if($value->box == 'box5')
          <div class="progressBar5"><i class='far fa-comments' style = "padding: 2px;">{{ $value->skillname }}</i></div>
        @endif
    @endforeach

  </div>
  @foreach($data as $value)
    @if($value->box == 'box5')
      <div class = "skillLevel">{{ $value->skillrating }}</div>
    @endif
  @endforeach
</div>


<div align="left">
  <div class="skillBar6">
    @foreach($data as $value)
        @if($value->box == 'box6')
          <div class="progressBar6"><i class="fas fa-users" style = "padding: 2px;"></i>{{ $value->skillname }}</div>
        @endif
    @endforeach

  </div>
   @foreach($data as $value)
      @if($value->box == 'box6')
        <div class = "skillLevel2">{{ $value->skillrating }}</div>
      @endif
    @endforeach
</div>


<div align="left">
  <div class="skillBar7">
    @foreach($data as $value)
        @if($value->box == 'box7')
          <div class="progressBar7"><i class="fas fa-trophy" style = "padding: 2px;"></i>{{ $value->skillname }}</div>
        @endif
    @endforeach

  </div>
  @foreach($data as $value)
    @if($value->box == 'box7')
      <div class = "skillLevel3">{{ $value->skillrating }}</div>
    @endif
  @endforeach
</div>



<div align="left">
  <div class="skillBar8">
    @foreach($data as $value)
        @if($value->box == 'box8')
         <div class="progressBar8"><i class="far fa-clock" style = "padding: 2px;"></i>{{ $value->skillname }}</div>
        @endif
    @endforeach

  </div>
  @foreach($data as $value)
    @if($value->box == 'box8')
      <div class = "skillLevel4">{{ $value->skillrating }}</div>
    @endif
  @endforeach
</div>





</div>
</div>
<div class = "language">
  <p>LANGUAGE SKILLS & KNOWLEDGE</p>
</div>





<div class = "circularContainer">
  <div class = "box">
    @foreach($data as $value)
      @if($value->box == 'box1')
       <div class="chart" data-percent="95">{{ $value->languagerating }}</div>
      @endif
    @endforeach
     @foreach($data as $value)
      @if($value->box == 'box1')
        <p>{{ $value->languagesknown }}</p>
      @endif
    @endforeach
 </div>
 <div class = "box">
   @foreach($data as $value)
      @if($value->box == 'box2')
   <div class="chart" data-percent="85">{{ $value->languagerating }}</div>
   @endif
    @endforeach
    @foreach($data as $value)
      @if($value->box == 'box2')
        <p>{{ $value->languagesknown }}</p>
   @endif
    @endforeach
 </div>
 <div class = "box">
  @foreach($data as $value)
      @if($value->box == 'box3')
        <div class="chart" data-percent="75">{{ $value->languagerating }}</div>
   @endif
    @endforeach
    @foreach($data as $value)
      @if($value->box == 'box3')
        <p>{{ $value->languagesknown }}</p>
      @endif
    @endforeach
 </div>
 <div class = "box">
  @foreach($data as $value)
      @if($value->box == 'box4')
        <div class="chart" data-percent="65">{{ $value->languagerating }}</div>
      @endif
  @endforeach
  @foreach($data as $value)
      @if($value->box == 'box4')
        <p>{{ $value->languagesknown }}</p>
      @endif
  @endforeach
 </div>

</div>
</div>




<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="{{ asset('js/jquery.easypiechart.js')}}"></script>
<script>
  $(function() {
    $('.chart').easyPieChart({
      size: 150,
      barColor: '#00cc66',
      scaleColor: false,
      lineWidth: 15,
      trackColor: '#e6e6e6',
      lineCap: 'circle'
    });
  });
</script>


<button class = "buttNavigatorSkills" onclick="location.href = 'indexGuest'"><img src = "{{ asset('images/arrow.jpg')}}" alt = "arrow" class = "buttonImage"></button>

</body>
</html>
