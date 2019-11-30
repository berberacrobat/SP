
<html lang="en"><head>
    <meta charset="utf-8">

    <title>Carousel Template · Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}" defer></script>
<style>
    .profile-header {
        transform: translateY(5rem);
    }
</style>

</head>
<body>


<div class="row">
    <div class="col-md-8 col-sm-10 mx-auto">

        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 bg-dark">
                <div class="media align-items-end profile-header">
                    <div class="profile mr-3">
                        <img src="https://www.cirquedusoleil.com/-/media/cds/images/shows/o/hero_thumbnail/o-show.jpg?db=web&la=en&vs=2&hash=34FDDDF946D013C73969E27A595B16EDBC0E5670" alt="..." width="180" class="rounded mb-2 img-thumbnail">
                        <a href="#" class="btn btn-dark btn-sm btn-block">Edit profile</a></div>
                    <div class="media-body mb-5 text-white">
                        <h4 class="mt-0 mb-0">Aza Show</h4>
                        <p class="small">
                            <i class="fa fa-map-marker mr-2"></i>Agadir</p>

                    </div>
                </div>
            </div>

            <div class="bg-light p-4 d-flex justify-content-end text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">241</h5><small class="text-muted"> <i class="fa fa-picture-o mr-1"></i>Photos</small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">84K</h5><small class="text-muted"> <i class="fa fa-user-circle-o mr-1"></i>Followers</small>
                    </li>
                </ul>
            </div>

            <div class="py-4 px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="mb-0">Recent photos</h5><a href="#" class="btn btn-link text-muted">Show all</a>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-2 pr-lg-1"><img src="https://www.denverpost.com/wp-content/uploads/2016/04/20121101__20121104_E6_AE04CIRQUEp1.jpg?w=600" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 mb-2 pl-lg-1"><img src="https://cdn-imgix.headout.com/tour/1016/TOUR-IMAGE/51b076b9-2e6f-4e6b-9708-2f1252292781-766-las-vegas-O-by-cirque-du-soleil-03.jpg" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 pr-lg-1 mb-2"><img src="https://www.incimages.com/uploaded_files/image/970x450/getty_461209029_220101.jpg" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 pl-lg-1"><img src="https://d1902livswy8rb.cloudfront.net/dimg/670x670/dimg/toruk2.jpg" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 mb-2 pr-lg-1"><img src="https://www.denverpost.com/wp-content/uploads/2016/04/20121101__20121104_E6_AE04CIRQUEp1.jpg?w=600" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 mb-2 pl-lg-1"><img src="https://cdn-imgix.headout.com/tour/1016/TOUR-IMAGE/51b076b9-2e6f-4e6b-9708-2f1252292781-766-las-vegas-O-by-cirque-du-soleil-03.jpg" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 pr-lg-1 mb-2"><img src="https://www.incimages.com/uploaded_files/image/970x450/getty_461209029_220101.jpg" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 pl-lg-1"><img src="https://d1902livswy8rb.cloudfront.net/dimg/670x670/dimg/toruk2.jpg" alt="" class="img-fluid rounded shadow-sm"></div>
                </div>
                <div class="py-4">
                    <h5 class="mb-3">Recent posts</h5>
                    <div class="p-4 bg-light rounded shadow-sm">
                        <p class="font-italic mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <ul class="list-inline small text-muted mt-3 mb-0">
                            <li class="list-inline-item"><i class="fa fa-comment-o mr-2"></i>12 Comments</li>
                            <li class="list-inline-item"><i class="fa fa-heart-o mr-2"></i>200 Likes</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- End profile widget -->

    </div>
</div>

</body>
</html>