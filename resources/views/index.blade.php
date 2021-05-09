@extends('layouts.template')




@section('css')

@endsection

@section('main')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('./img/1.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('./img/2.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('./img/333.jpg') }}" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>




  <div class="container d-flex flex-wrap justify-content-center">
    <div class="row">
      <div class="col-12 d-flex justify-content-center mb-3"style="text-align: center;">
        <h2>Raw Denim Heirloom Man Braid
      </div>
      <div class="col-12" style="text-align: center;">
        Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug.
      </div>
    </div>
    <div class="box"></div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-4" style="text-align: center;">
        <h4>Shooting Stars</h4>
        <br>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.
        <a class="" style="color:cornflowerblue"><br>Learn More →</a>
      </div>
      <div class="col-sm-4" style="text-align: center;">
        <h4>The Catalyzer</h4>
        <br>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.
        <a class="" style="color:cornflowerblue"><br>Learn More →</a>
      </div>
      <div class="col-sm-4" style="text-align: center;">
        <h4>Neptune</h4>
        <br>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.
        <a class="" style="color:cornflowerblue"><br>Learn More →</a>
      </div>
    </div>
  </div>

  <div class="container btn">
    <button>Button</button>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Master Cleanse Reliac Heirloom</h2>

      </div>
      <div class="col-md-6">
        Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.
      </div>
    </div>
  </div>

  <div class="container 6pic">
    <div class="row">
      <div class="col-6">
        <div class="row">
          <div class="col-6" >
            <img src="{{ asset('./img/20.jpg') }}" width="100%">
          </div>
          <div class="col-6">
            <img src="{{ asset('./img/30.jpg') }}" width="100%">
          </div>
        </div>
        <div class="row" style="padding:30px 15px 0px 15px;">
          <img src="{{ asset('./img/40.jpg') }}" width="100%">
        </div>
      </div>
      <div class="col-6">
        <div class="row" style="padding:0px 15px 30px 15px;">
          <img src="{{ asset('./img/60.jpg') }}" width="100%">
        </div>
        <div class="row">
          <div class="col-6">
            <img src="{{ asset('./img/50.jpg') }}" width="100%">
          </div>
          <div class="col-6">
            <img src="{{ asset('./img/70.jpg') }}" width="100%">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12" style="text-align: center;font-size: 35px;">
        Pricing
      </div>
      <div class="col-12" style="text-align: center;" >
        Banh mi cornhole echo park skateboard authentic crucifix neutra tilde lyft biodiesel artisan direct trade mumblecore 3 wolf moon twee
      </div>
    </div>
  </div>

  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Plan</th>
          <th scope="col">Speed</th>
          <th scope="col">Storage</th>
          <th scope="col">Price</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Start</th>
          <td>5 Mb/s</td>
          <td>15 GB</td>
          <td>Free</td>
          <th scope="col"><input type="radio" name="Q"></th>
        </tr>
        <tr>
          <th scope="row">Pro</th>
          <td>25 Mb/s</td>
          <td>25 GB</td>
          <td>$24</td>
          <th scope="col"><input type="radio" name="Q"></th>
        </tr>
        <tr>
          <th scope="row">Business</th>
          <td>36 Mb/s</td>
          <td>40 GB</td>
          <td>$50</td>
          <th scope="col"><input type="radio" name="Q"></th>
        </tr>
        <tr>
          <th scope="row">Exclusive</th>
          <td>48 Mb/s</td>
          <td>120 GB</td>
          <td>$72</td>
          <th scope="col"><input type="radio" name="Q"></th>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="container btn" style="margin-top: 0;">
    <a class="" style="color:cornflowerblue;margin-top:-15px;"><br>Learn More →</a>
    <button class="B-2">Button</button>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12 col-xl-6" style="font-size: 35px;">
        Pitchfork Kickstarter Taxidermy
      </div>
      <!-- <div class="box" style="margin-left: 15px;margin-top: 0px;"></div> -->
      <div class="col-12 col-xl-6 mt-3">
        Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row row-cols-1 row-cols-12 row-cols-md-2 row-cols-lg-4 g-2">
      <div class="col">
        <div class="card">
          <img src="{{ asset('./img/505.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p>SUBTITLE</p>
            <h5 class="card-title">Chichen Itza</h5>
            <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="{{ asset('./img/505.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p>SUBTITLE</p>
            <h5 class="card-title">Colosseum Roma</h5>
            <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="{{ asset('./img/505.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p>SUBTITLE</p>
            <h5 class="card-title">Great Pyramid of Giza</h5>
            <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="{{ asset('./img/505.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p>SUBTITLE</p>
            <h5 class="card-title">San Francisco</h5>
            <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="container">
    <div class="row">
      <div class="col-3" style="padding:20px;">
        <img src="{{ asset('./img/H1.jpg') }}" width="150px" style="border-radius: 50%;" alt="">
      </div>
      <div class="col-9" style="padding:20px;">
        <div class="row">
          <div class="col-12">
            <h4>Shooting Stars
          </div>
        </div>
        <div class="row">
          <div class="col-12" style="font-size: 18px;">
            Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.
          </div>
        </div>
        <div class="row">
          <div class="col-12" style="color:cornflowerblue;font-size:20px;">
            <a class="" style="color:cornflowerblue"><br>Learn More →</a>
          </div>
        </div>
      </div>
      <div class="col-9" style="padding:20px">
        <div class="row">
          <div class="col-12">
            <h4>The Catalyzer
          </div>
        </div>
        <div class="row">
          <div class="col-12" style="font-size: 18px;">
            Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.
          </div>
        </div>
        <div class="row">
          <div class="col-12" style="color:cornflowerblue;font-size:20px;">
            <a class="" style="color:cornflowerblue"><br>Learn More →</a>
          </div>
        </div>
      </div>
      <div class="col-3" style="padding:20px;text-align:end;">
        <img src="{{ asset('./img/H1.jpg') }}" width="150px" style="border-radius: 50%;" alt="" >
      </div>
      <div class="col-3" style="padding:20px;">
        <img src="{{ asset('./img/H1.jpg') }}" width="150px" style="border-radius: 50%;" alt="">
      </div>
      <div class="col-9" style="padding:20px">
        <div class="row">
          <div class="col-12">
            <h4>The 400 Blows
          </div>
        </div>
        <div class="row">
          <div class="col-12" style="font-size: 18px;">
            Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.
          </div>
        </div>
        <div class="row">
          <div class="col-12" style="color:cornflowerblue;font-size:20px;">
            <a class="" style="color:cornflowerblue"><br>Learn More →</a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="container btn" style="margin-top: 50px;">
    <button>Button</button>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <img src="{{ asset('./img/506.jpg') }}" width="100%" alt="">
      </div>
      <div class="col-lg-6">
        BRAND NAME
        <br><h3>The Catcher in the Rye</h3>
        <h5>★★★★☆ 4 Reviews</h5>
        <br>Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn. Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over, neutra jean shorts keytar banjo tattooed umami cardigan.


        <form action="/action_page.php">
          <label for="cars"><br>Color
            <button style="background-color: white;width: 24px;height: 24px;border-radius: 50%;border: 2px solid grey;">
            </button>
            <button style="background-color: rgb(0, 0, 0);width: 24px;height: 24px;border-radius: 50%;border: 2px solid grey;">
            </button>
            <button style="background-color: rgb(64, 17, 235);width: 24px;height: 24px;border-radius: 50%;border: 2px solid grey;">
            </button>
              Size
          </label>
          <select name="size" id="size">
            <option value="SM">SM</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
          </select>
        </form>
        <p><hr><h4 style="display: flex;">$58.00<button class="ml-auto">Button</button></p>


      </div>
    </div>

  </div>

  <div class="container">
    <div class="row">
      <div class="col-xl-3 col-lg-6">
        <img src="{{ asset('./img/h1-1.jpg') }}" width="100%" alt="">
        CATEGORY<br>
        <h5>The Catalyzer<br></h5>
        $16.00
      </div>
      <div class="col-xl-3 col-lg-6">
        <img src="{{ asset('./img/h1-1.jpg') }}" width="100%" alt="">
        CATEGORY<br>
        <h5>Shooting Stars<br></h5>
        $21.15
      </div>
      <div class="col-xl-3 col-lg-6" style="margin-bottom:20px;">
        <img src="{{ asset('./img/h1-1.jpg') }}" width="100%" alt="">
        CATEGORY<br>
        <h5>Neptune<br></h5>
        $12.00
      </div>
      <div class="col-xl-3 col-lg-6">
        <img src="{{ asset('./img/h1-1.jpg') }}" width="100%" alt="">
        CATEGORY<br>
        <h5>The 400 Blows<br></h5>
        $18.40
      </div>
    </div>
    <div class="row">
      <div class="col-xl-3 col-lg-6">
        <img src="{{ asset('./img/h2-1.jpg') }}" width="100%" alt="">
        CATEGORY<br>
        <h5>The Catalyzer<br></h5>
        $16.00
      </div>
      <div class="col-xl-3 col-lg-6">
        <img src="{{ asset('./img/h2-1.jpg') }}" width="100%" alt="">
        CATEGORY<br>
        <h5>Shooting Stars<br></h5>
        $21.15
      </div>
      <div class="col-xl-3 col-lg-6">
        <img src="{{ asset('./img/h2-1.jpg') }}" width="100%" alt="">
        CATEGORY<br>
        <h5>Neptune<br></h5>
        $12.00
      </div>
      <div class="col-xl-3 col-lg-6">
        <img src="{{ asset('./img/h2-1.jpg') }}" width="100%" alt="">
        CATEGORY<br>
        <h5>The 400 Blows<br></h5>
        $18.40
      </div>
    </div>
  </div>






  <div class="container-fluid mapppppp" style="position: relative;">
    <div class="map" style="margin-top: 100px;">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d442130.5514755871!2d-90.16275326139586!3d30.032699596934652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8620a454b2118265%3A0xdb065be85e22d3b4!2z576O5ZyL6Lev5piT5pav5a6J6YKj5paw5aWn54i-6Imv!5e0!3m2!1szh-TW!2stw!4v1618191755578!5m2!1szh-TW!2stw" width="100%" height="700px" style="border:0;" allowfullscreen="" loading="lazy">
      </iframe>

      <form action="/contact_us/store" method="POST" style="position: absolute;top:20%;right: 10%;background-color: rgb(255, 255, 255);padding: 20px;">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">
            Feedback<br>
            Post-ironic portland shabby chic echo park, banjo fashion axe<br>
          </label>
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
          <label for="content">Message</label>
          <textarea class="form-control" id="content" rows="3" name="content"></textarea>
        </div>

        <button type="submit" class="btn btn-primary" style="width:100%">Button</button>
        <p style="font-size: 5px;">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
      </form>
    </div>
  </div>




  <div class="container-fluid" style="padding:96px 20px;">
    <div class="row" style="margin: auto;">
      <div class="col-lg-4 col-md-6" style="text-align: center;">
        數位方塊<br>
        Air plant banjo lyft occupy retro adaptogen indego
      </div>
      <div class="col-lg-8 col-md-6" style="text-align: center;">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <p>CATEGORIES</p>
            First Link
            <br>Second Link
            <br>Third Link
            <br>Fourth Link
          </div>
          <div class="col-lg-3 col-md-6">
            <p>CATEGORIES</p>
            First Link
            <br>Second Link
            <br>Third Link
            <br>Fourth Link
          </div>
          <div class="col-lg-3 col-md-6">
            <p>CATEGORIES</p>
            First Link
            <br>Second Link
            <br>Third Link
            <br>Fourth Link
          </div>
          <div class="col-lg-3 col-md-6">
            <p>CATEGORIES</p>
            First Link
            <br>Second Link
            <br>Third Link
            <br>Fourth Link
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection

@section('js')

@endsection
