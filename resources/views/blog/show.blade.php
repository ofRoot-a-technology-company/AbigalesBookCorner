<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/main.scss') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/a7bffd41d3.js"></script>
    <title>BeingHMN - {{ $article->title ?? '' }} </title>
    <!-- for share buttons -->
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=61318964495f05001236fdfe&product=inline-share-buttons" async="async"></script>
    <link rel="stylesheet" href="{{ asset('blog/css/showBlog.css') }}">
</head>

<x-pop-up/>
<nav class="navbar sticky-top navbar-light container container-fluid" style="background-color:white;">

  <strong class="navbar-brand"
          style="font-family: 'Anton'; font-size: 32px;"
          href="#">BeingHMN All About Baby
  </strong>
  <button class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent15"
          aria-controls="navbarSupportedContent15"
          aria-expanded="false"
          aria-label="Toggle navigation"
          style="border: none;outline: none;">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent15">
    <ul class="navbar-nav ml-auto">
    <?php
      $uri = Request::getRequestUri();
      $article_id = $article->id ?? '';
      if ($uri){
        echo ('<li class="nav-item"><a class="nav-link" href="/"><strong>HOME</strong></a></li>');
        echo ('<li class="nav-item"><a class="nav-link" href="/about"><strong>ABOUT </strong></a></li>');
        echo ('<li class="nav-item active"><a class="nav-link" href="/articles"><strong>BLOG | ARTICLE </strong></a></li>');
        echo ('<li class="nav-item"><a class="nav-link" href="/contact"><strong>CONTACT</strong></a></li>');
      }
    ?>
   </ul>
  </div>
  <!-- progress bar -->
    <div class="progress-container rounded-circle">
        <div class="progress-bar" id="myBar"></div>
    </div>
</nav>
<body id="body" class="container container-fluid" style="opacity: 0;">
  <div class="slab container col-sm-12">

        <article>
            <div class="mt-5 row">
                <h1 class="col-lg text-center mb-1">
                     {{ $article->title ?? ''}}
                </h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="text-center"
                       style="font-size:12px;">
                       A {{ $readingTimeEstimate ?? '' }}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="text-center"
                       style="font-size:12px;">
                        {{ $article->created_at->format('m-d-Y') ?? ''  }}
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-center">
                       <blockquote style="color: grey; font-size: 12px;" class="blockquote">
                            {{ $article->quip ?? '' }}
                       </blockquote>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <p class="text-center"
                       style="font-size:12px;">
                        {{ $article->intro }}
                    </p>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-12 text-center mb-3">
                    <a href="https://twitter.com/theBassinet?ref_src=twsrc%5Etfw"
                        class="twitter-follow-button"
                        data-show-count="false">Follow @theBassinet</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div> -->

            <div class="row">
                <div class="col-md text-center">
                      <img class="img-responsive" src="{{ $article->image_name ?? '' }}" alt="article image" height="auto" width="99%;">
                </div>
            </div>
            <div class="row">
                <div class="col-12" style="margin-left: 10%;">
                     <p style="color: black; font-size:10px;" class="col-sm"> {!! $article->imageCredit1 !!} </p>
                </div>
            </div>

            @if ($article->heading1)
                <div class="row">
                    <div class="col-md mt-5 mb-1 text-center">
                        <h2> {{ $article->heading1 }} </h2>
                    </div>
                </div>
                @if($article->image1_name)
                <div class="row">
                    <div class="col-md text-center mt-2">
                          <img class="img-responsive" src="{{$article->image1_name ?? ''}}" alt="article image" height="auto" width="75%;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="margin-left: 10%;">
                          <p style="color: black; font-size:10px;" class="col-sm"> {!! $article->imageCredit !!} </p>
                    </div>
                </div>
                @endif

                <div class="row">
                    <div class="col-md">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {!! $article->paragraph1Heading1 !!} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph2Heading1 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <p class="mt-1 ml-5 mr-5 mb-5"> {{ $article->paragraph3Heading1 }} </p>
                    </div>
                </div>
            @endif

            @if($article->heading2)
                <div class="row">
                    <div class="col-md mt-3 text-center">
                        <h2> {{ $article->heading2 }} </h2>
                    </div>
                </div>
                @if($article->image2_name)
                <div class="row">
                    <div class="col-md text-center mt-2">
                         <img class="img-responsive" src="{{$article->image2_name ?? ''}}" alt="article image" height="auto" width="75%;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="margin-left: 10%;">
                        <p style="color: black; font-size:10px;" class="col-sm"> {!! $article->imageCredit2 !!} </p>
                    </div>
                </div>
            @endif
                <div class="row ">
                    <div class="col-md text-left">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph1Heading2 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-left">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph2Heading2 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-left">
                        <p class="mt-1 ml-5 mr-5 mb-5"> {{ $article->paragraph3Heading2 }} </p>
                    </div>
                </div>
            @endif
            @if($article->heading3)
                <div class="row">
                    <div class="col-md text-center">
                        <h2> {{ $article->heading3 }} </h2>
                    </div>
                </div>
                @if($article->image3_name)
                <div class="row">
                    <div class="col-md text-center mt-2">
                        <img class="img-responsive" src="{{ $article->image3_name }}" alt="article image" height="auto" width="75%;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-1" style="margin-left: 10%;">
                        <p style="color: black; font-size:10px;" class="col-sm"> {!! $article->imageCredit3 !!} </p>
                    </div>
                </div>
                @endif
                <div class="row">
                    <div class="col-md">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph1Heading3 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph2Heading3 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <p class="mt-1 ml-5 mr-5 mb-5"> {{ $article->paragraph3Heading3 }} </p>
                    </div>
                </div>
            @endif
            @if($article->heading4)
                <div class="row">
                    <div class="col-md text-center">
                        <h2> {{ $article->heading4 }} </h2>
                    </div>
                </div>
                @if($article->image4_name)
                <div class="row">
                    <div class="col-md text-center mt-2">
                         <img class="img-responsive"
                              src="{{ $article->image4_name ?? '' }}" alt="article image" width="80%;" max-height="75%;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-1" style="margin-left: 10%;">
                         <p style="color: black; font-size:10px;" class="col-sm"> {!! $article->imageCredit4 !!} </p>
                    </div>
                </div>
                @endif
                <div class="row">
                    <div class="col-md">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph1Heading4 }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph2Heading4 }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <p class="mt-1 ml-5 mr-5 mb-5"> {{ $article->paragraph3Heading4 }}</p>
                    </div>
                </div>
            @endif
            @if($article->heading5)
                <div class="row">
                    <div class="col-md mb-3 text-center">
                        <h2> {{ $article->heading5 }} </h2>
                    </div>
                </div>
                @if($article->image5_name)
                <div class="row">
                    <div class="col-md text-center mt-2">
                      <img class="img-responsive" src="{{ $article->image5_name ?? '' }}" alt="article image" height="auto" width="75%;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-1" style="margin-left: 10%;">
                       <p style="color: black; font-size:10px;" class="col-sm"> {!! $article->imageCredit5 !!} </p>
                    </div>
                </div>
                @endif
                <div class="row">
                    <div class="col-md">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph1Heading5 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph2Heading5 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <p class="mt-1 ml-5 mr-5 mb-5"> {{ $article->paragraph3Heading5 }} </p>
                    </div>
                </div>
            @endif
            @if($article->heading6)
                <div class="row">
                    <div class="col-md mb-3 text-center">
                        <h2> {{ $article->heading6 }} </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center mt-2">
                        <img class="img-responsive" src="{{ $article->image6_name ?? '' }}" alt="article image" height="auto" width="75%;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-1" style="margin-left: 10%; font-size:12px">
                        <p style="color: black; font-size:10px;" class="col-sm"> {!! $article->imageCredit6 !!} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph1Heading6 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph2Heading6 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <p class="mt-1 ml-5 mr-5 mb-5"> {{ $article->paragraph3Heading6 }} </p>
                    </div>
                </div>
            @endif
            @if($article->heading7)
                <div class="row">
                    <div class="col-md mb-3 text-center">
                        <h2> {{ $article->heading7 }} </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center mt-2">
                        <img class="img-responsive" src="{{ $article->image7_name ?? '' }}" alt="article image" height="auto" width="75%;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-1" style="margin-left: 10%; font-size:12px">
                        <p style="color: black; font-size:10px;" class="col-sm"> {!! $article->imageCredit7 !!} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph1Heading7 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph2Heading7 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center">
                        <p class="mt-1 ml-5 mr-5 mb-5"> {{ $article->paragraph3Heading7 }} </p>
                    </div>
                </div>
            @endif
            @if($article->heading8)
                <div class="row">
                    <div class="col-md mb-3 text-center">
                        <h2> {{ $article->heading8 }} </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center mt-2">
                        <img class="img-responsive" src="{{ $article->image8_name ?? '' }}" alt="article image" height="auto" width="75%;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-1" style="margin-left: 10%; font-size:12px">
                        <p style="color: black; font-size:10px;" class="col-sm"> {!! $article->imageCredit8 !!} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph1Heading8 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph2Heading8 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center">
                        <p class="mt-1 ml-5 mr-5 mb-5"> {{ $article->paragraph3Heading8 }} </p>
                    </div>
                </div>
            @endif
            @if($article->heading9)
                <div class="row">
                    <div class="col-md mb-3 text-center">
                        <h2> {{ $article->heading9 }} </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center mt-2">
                        <img class="img-responsive" src="{{ $article->image9_name ?? '' }}" alt="article image" height="auto" width="75%;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-1" style="margin-left: 10%; font-size:12px">
                        <p style="color: black; font-size:10px;" class="col-sm"> {!! $article->imageCredit9 !!} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph1Heading9 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center">
                        <p class="mt-2 ml-5 mr-5 mb-5"> {{ $article->paragraph2Heading9 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center">
                        <p class="mt-1 ml-5 mr-5 mb-5"> {{ $article->paragraph3Heading9 }} </p>
                    </div>
                </div>
            @endif
            @if($article->heading10)
                <div class="row">
                    <div class="col-md mb-3 text-center">
                        <h2> {{ $article->heading10 }} </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center mt-2">
                    <img class="img-responsive" src="{{ $article->image10_name ?? '' }}" alt="article image" height="auto" width="75%;">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mt-1" style="margin-left: 10%; font-size:12px">
                    <p style="color: black; font-size:10px;" class="col-sm"> {!! $article->imageCredit10 !!} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph1Heading10 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center">
                        <p class="mt-1 ml-5 mr-5 mb-1"> {{ $article->paragraph2Heading10 }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md text-center">
                        <p class="mt-1 ml-5 mr-5 mb-5"> {{ $article->paragraph3Heading10 }} </p>
                    </div>
                </div>
            @endif
      </article>
    </div>

  <!-- Because there's a few different articles types, lets make sure the correct route is chosen -->


    <div class="row justify-content-center mt-3 mb-4">
        <div class="col-lg text-center">
            <button class="btn btn-lg btn-dark">
                <a style="color:white;" href="/{{ $articleType }}">Go Back</a>
            </button>
        </div>
    </div>

    <section id="article_signoff" class="mt-5">
        <div class="row text-center">
            <div class="col-12">
                <h3 class="mt-5">Thanks for reading!</h3>
                <p style="color:grey; font-size:12px;" class="text-center"> Help us reach a wider audience by sharing our article</p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12">
                <div class="sharethis-inline-share-buttons text-center mb-4"></div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md text-center">
                    <!-- <img class="img-responsive"
                         src="{{url('/images/theFamilyBlueBackground.png')}}" alt="article image" height="auto" width="75%;"> -->
                <p class="mt-3 ml-5 mr-5 mb-1 text-center">
                    Thanks for reading our article, if you find our content helpful please share it with others! </br></br>
                </P>
                <p class="mt-1 ml-5 mr-5 mb-5 text-center">
                    Have any questions? feel free to reach out to us via our socials - and if enough parents are asking the same question, we may write an article all about the topic!
                </P>
            </div>
        </div>
        <!-- <div class="row text-center ">
            <div class="col-md text-center mb-5">
                <a href="https://twitter.com/theBassinet?ref_src=twsrc%5Etfw"
                   class="twitter-follow-button"
                   data-show-count="false">Follow @theBassinet</a>
                   <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div> -->
    </section>

    <!-- Fading in the page on load ( can move functionality over to app.blade later ( will need to edit the top of this page ( remove body tag ))) -->
    <script src="{{ asset('blog/js/blog.js') }}"></script>
    <!-- bootstrap related scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <x-footer />
</body>
</html>
