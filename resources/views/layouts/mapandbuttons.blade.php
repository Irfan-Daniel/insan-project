<html>
<head>
    <link href="{{ asset('css/sidebars.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
<div class=" ">
    <div>
        <h3>Area Overview</h3>
    </div>
    <form class="row g-3">
        <div class="col-11">
            <label for="inputPassword2" class="visually-hidden">Password</label>
            <input type="text" class="form-control" id="search" placeholder="Search Location...">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Search</button>
        </div>
        <div class="locationtext">
            <h4 style="font-weight: bold">Current Viewed Location: </h4><h4>Bandar Saujana Putra, 42160 Selangor</h4>
        </div>
    </form>

    <div class="mapandbuttons">
        <div class="map_canvas">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11270.072834883404!2d101.58476087385763!3d2.9384405192906233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smy!4v1623657435669!5m2!1sen!2smy" width="550" height="420" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="map_side">
            <a href="#" class="btn btn-primary btn-lg active sidemapbtns" role="button" aria-pressed="true">
                <div class="text-center">
                    <h1 style="font-weight: bolder; font-size: 80px;">25</h1>
                    <h1 style="font-weight: bolder; font-size: 20px;">Total of<br>beneficiaries</h1>
                </div>
            </a>

            <a href="#" class="btn btn-primary btn-lg active sidemapbtns" role="button" aria-pressed="true">
                <div class="text-center">
                    <h1 style="font-weight: bolder; font-size: 45px;">RM<br>23,000</h1>
                    <h1 style="font-weight: bolder; font-size: 20px;">Total of<br>donations</h1>
                </div>
            </a>

            <a href="#" class="btn btn-danger btn-lg active sidemapbtns" role="button" aria-pressed="true">
                <div class="text-center">
                    <h1 style="font-weight: bolder; font-size: 45px;">RM<br>300</h1>
                    <h1 style="font-weight: bolder; font-size: 20px;">Donations<br>needed</h1>
                </div>
            </a>

            <a href="#" class="btn btn-secondary btn-lg active sidemapbtns" role="button" aria-pressed="true">
                <div class="text-center">
                    <h1 style="font-weight: bolder; font-size: 80px;">4</h1>
                    <h1 style="font-weight: bolder; font-size: 20px;">Placeholder</h1>
                </div>
            </a>

            <a href="#" class="btn btn-secondary btn-lg active sidemapbtns" role="button" aria-pressed="true">
                <div class="text-center">
                    <h1 style="font-weight: bolder; font-size: 80px;">4</h1>
                    <h1 style="font-weight: bolder; font-size: 20px;">Placeholder</h1>
                </div>
            </a>

            <a href="#" class="btn btn-secondary btn-lg active sidemapbtns" role="button" aria-pressed="true">
                <div class="text-center">
                    <h1 style="font-weight: bolder; font-size: 80px;">4</h1>
                    <h1 style="font-weight: bolder; font-size: 20px;">Placeholder</h1>
                </div>
            </a>
        </div>
    </div>
</div>
</body>
</html>
