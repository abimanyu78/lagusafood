<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
    <link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<style>
    *{
      margin: 0;
      padding: 0;
  }
  .rate {
      float: left;
      height: 46px;
      padding: 0 10px;
  }
  .rate:not(:checked) > input {
      position:absolute;
      top:-9999px;
  }
  .rate:not(:checked) > label {
      float:right;
      width:1em;
      overflow:hidden;
      white-space:nowrap;
      cursor:pointer;
      font-size:30px;
      color:#ffc700;
  }
  .rate:not(:checked) > label:before {
      content: '★ ';
  }
  .rate > input:checked ~ label {
      color: #ffc700;    
  }
  .rate:not(:checked) > label:hover,
  .rate:not(:checked) > label:hover ~ label {
      color: #deb217;  
  }
  .rate > input:checked + label:hover,
  .rate > input:checked + label:hover ~ label,
  .rate > input:checked ~ label:hover,
  .rate > input:checked ~ label:hover ~ label,
  .rate > label:hover ~ input:checked ~ label {
      color: #c59b08;
  }
  
  /* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */
  </style>
  
<body style="background-color: darkslategrey">
    <div class="container mt-5 mb-5">
        <div class="mt-4 p-5 bg-light text-dark rounded">
            <div class="row align-items-start">
                <div class="col-3">
                    <img src="{{ asset('storage/blog/'.$blog->image) }}" class="w-20 rounded" alt="">
                </div>

                <div class="col ms-4">
                    <h4>{{ $blog->title }}</h4>
                    <p class="tmt-3">
                        {!! $blog->content !!}
                    </p>
                    
                    <div class="rate">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                      </div>

                </div>
            </div>
            <a href="/#menu" class="btn btn-dark mt-3">Back</a>
        </div>
    </div>


    
</body>
</html>


{{-- <html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Star rating using pure CSS</title>
</head>

<body>
  
</body>

</html> --}}