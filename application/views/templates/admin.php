<!doctype html>
<html lang="en">
<head>
    <base href="<?php echo base_url().'public/';?>"></head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>:: Role and Permission ::</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-pro" />
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzJPzAiUl4hKQ0mPNYe1AuyA6ByOs_k9Y&sensor=false"></script>
    <!--  Social tags      -->
   
    <!-- Schema.org markup for Google+ -->
   
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />

    <link rel="stylesheet" href="assets/featurecarousel/css/feature-carousel.css" charset="utf-8" />
    <style type="text/css">
        .carousel-container {
            width: 100% !important;
        }
    </style>

    <script type="text/javascript">

    // Initialise some variables
    // Called Onload
    function init() {
        // Some basic map setup (from the API docs) 
        var mapOptions = {
            center: new google.maps.LatLng(20.593684, 78.96288),
            zoom: 5,
            mapTypeControl: true,            
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
            
        map = new google.maps.Map(document.getElementById('map'), mapOptions);

        // Start the request making
        //generateRequests()
    }

    // Get the ball rolling and trigger our init() on 'load'
    google.maps.event.addDomListener(window, 'load', init);
    </script> 
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-active-color="rose" data-background-color="black" data-image="assets/img/sidebar-1.jpg">
            <div class="logo">
                <a href="#" class="simple-text">
                    Role and Permission
                </a>
            </div>
            <div class="logo logo-mini">
                <a href="#" class="simple-text">
                    Ct
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="assets/img/faces/avatar.jpg" />
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <?php //echo $username; ?>
                            admin@admin.com
                            <b class="caret"></b>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="#">My Profile</a>
                                </li>
                                <li>
                                    <a href="#">Edit Profile</a>
                                </li>
                                <li>
                                    <a href="#">Settings</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                


                <ul class="nav">

                    <li>
                        <div class="control-group">
                            <label for="city_id" class="control-label">City Search</label>
                            <div class="controls">
                                <div class="form-group">
                                    
                                    <select 
                                        data-placeholder="Choose a City..." 
                                        class="city chz-select" 
                                        style="width:260px;"
                                        tabindex="2">
                                          <option value=""></option> 
                                          <?php
                                            foreach ($cities as $row){
                                            ?>
                                                <option value="<?php echo $row['city_id']."-".$row['city_name']; ?>"> <?php echo $row['city_name'] ?> </option>
                                            <?php
                                            }
                                          ?>
                                    </select>
                                    <span class="material-input"></span>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li style="position: initial !important; ">
                        <div class="control-group">
                            <label class="control-label">Route Search</label>
                            <div class="dropdown-container">
                                <div class="dropdown-button noselect">
                                    <div class="dropdown-label">Routes</div>
                                    <div class="dropdown-quantity">(<span class="quantity">Any</span>)</div>
                                    <i class="fa fa-filter"></i>
                                </div>
                                <div class="dropdown-list" style="display: none;">
                                    <input type="search" placeholder="Search states" class="dropdown-search"/>
                                    <ul></ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- <li class="route" >Route Name</li>
                    <li>
                        <a data-toggle="collapse" href="#componentsExamples">
                            
                            <p>Route Name
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="componentsExamples">
                            <ul id="route" class="nav ">
                                
                            </ul>
                        </div>
                    </li>    -->

                  
                    
                    
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                            <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> Dashboard </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">dashboard</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo base_url(); ?>/auth/logout">Logout</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                    </div>
                </div>
            </nav>
            
            <?php echo $body; ?>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js" type="text/javascript"></script>
<script src="assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>

<!-- Forms Validations Plugin -->
<script src="assets/js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="assets/js/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="assets/js/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>
<!--   Sharrre Library    -->
<script src="assets/js/jquery.sharrre.js"></script>
<!-- DateTimePicker Plugin -->
<script src="assets/js/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="assets/js/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="assets/js/nouislider.min.js"></script>
<!-- Select Plugin -->
<script src="assets/js/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="assets/js/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="assets/js/sweetalert2.js"></script>
<!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="assets/js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="assets/js/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="assets/js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="assets/js/material-dashboard.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

<script src="assets/featurecarousel/js/jquery.featureCarousel.js" type="text/javascript" charset="utf-8"></script>

<link rel="stylesheet" href="assets/css/chosen.css"/>
<script src="assets/js/custom/chosen.jquery.js"></script>



<script type="text/javascript">

  var imageArray = new Array();
  $(".carousel-container").hide();
  $("#slider_remove_btn").hide();
</script>


<script type="text/javascript">

    $(".city").on("change keyup", function() {

      $(".dropdown-list").hide();
      $('.dropdown-list ul').html('');

      let city = $(this).val()
      let res = city.split("-");
      let cityid = res[0];
      let cityname = res[1];
        $.getJSON("https://maps.googleapis.com/maps/api/geocode/json?address="+cityname, function(val) {
            if(val.results.length) {
                let location = val.results[0].geometry.location
                let citylat = location.lat;
                let citylng =  location.lng;              
                let mapOptions = {
                    center: new google.maps.LatLng(citylat, citylng),
                    zoom: 10,
                    mapTypeControl: true
                };  
                map = new google.maps.Map(document.getElementById('map'), mapOptions);
                $.ajax({
                    url:"/maps/home/getroutes",
                    data: "id="+cityid,
                    type: "POST",
                    dataType: "html",
                    success:function(data){  
                        $("#route").html('');  
                        $("#route").append(data);
                        $('.dropdown-list ul').append(data);
                        $(".dropdown-list").show();
                    }  
                }); 
            }
        })
    })

    function loadcitymap(){

        var mapOptions = {
            center: new google.maps.LatLng(22.309425, 72.136230),
            zoom: 10,
            mapTypeControl: true,            
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
            
        map = new google.maps.Map(document.getElementById('map'), mapOptions);
        //generateRequests();
    }


    function showRoute(orig,destin,rendererOptions) {

        var obj = new google.maps.DirectionsRenderer(rendererOptions);

        var request = {
            origin: orig,
            destination: destin,
            travelMode: google.maps.TravelMode.DRIVING
        };

        directionsService.route(request, function(response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                obj.setDirections(response);
                obj.setMap(map);
            }
        });

        return obj;
    }

    // having waypoints
    function setroute(wps,rendererOptions) {
        var wp = [];
        var os = $.parseJSON(wps);
        var obj = new google.maps.DirectionsRenderer(rendererOptions);

        for(var i=0;i<os.waypoints.length;i++)
            wp[i] = {'location': new google.maps.LatLng(os.waypoints[i][0], os.waypoints[i][1]),'stopover':true }

        var request = {
            origin: new google.maps.LatLng(os.start.lat,os.start.lng),
            destination: new google.maps.LatLng(os.end.lat,os.end.lng),
            waypoints: wp,
            travelMode: google.maps.TravelMode.DRIVING
        };

        directionsService.route(request, function(response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                obj.setDirections(response);
                obj.setMap(map);
            }
        });

        return obj;
    }

    var existPath = new Array();    
    var directionsService = new google.maps.DirectionsService();
    var num, map, data;
    var requestArray = [], renderArray = [];
    var pathsCnt = 0;

     
    function getRandomColor() {
        var letters = '0123456789ABCDEF'.split('');
        var color = '#';
        for (var i = 0; i < 6; i++ ) {
            color += letters[Math.round(Math.random() * 15)];
        }
        return color;
    } 

    function remove(array, element) {
        const index = array.indexOf(element);
        array.splice(index, 1);
    }
</script>        

<script type="text/javascript">

    $(document).ready(function() {
        var jsonArray = {
            "Person 1": ["Surat","UDHNA","Navsari"],
            "Person 2": ["ADAJAN","DAMKA","HAZIRA"]
        }
        
    // 16 Standard Colours for navigation polylines
        var colourArray = ['red','green', 'blue', 'orange', 'purple', 'pink', 'yellow'];


        let iconURLPrefix = 'http://maps.google.com/mapfiles/ms/icons/';
        let icons = [
          iconURLPrefix + 'red-dot.png',
          iconURLPrefix + 'green-dot.png',
          iconURLPrefix + 'blue-dot.png',
          iconURLPrefix + 'orange-dot.png',
          iconURLPrefix + 'purple-dot.png',
          iconURLPrefix + 'pink-dot.png',      
          iconURLPrefix + 'yellow-dot.png'
        ];


       
        $(document).on("click",".chkRoute",function(e) {
            
            
            var $this = $(this);
            var rtId = $this.siblings('.rtId').val();
            
            if( $('#way_' + rtId).prop('checked') ) {
                
                
                $this.css('background-position','0px -16px');
                $this.find(':checkbox').prop('checked',true);
                existPath[pathsCnt]  = new Array();
                
                var origin = $this.siblings('.rtOrig').val();
                var des   = $this.siblings('.rtDest').val();
                var wp   = $this.siblings('.rtWp').val();
                //var color = getRandomColor();
                let number = (Math.floor(Math.random() * (6 - 0 + 1)) + 0);
                let color = colourArray[number];
                let dynamicMarkerColor = icons[number];
                console.log(dynamicMarkerColor);
                var rander = {
                    draggable :false,
                    polylineOptions:{strokeColor:color},
                    markerOptions: { icon: dynamicMarkerColor},
                };
                if( wp == "" ) {
                    existPath[pathsCnt][0] = showRoute(origin,des,rander);
                } else {
                    existPath[pathsCnt][0] = setroute(wp,rander);
                }
                existPath[pathsCnt][1] = $this.siblings('.rtId').val();
                pathsCnt++;

            } else {

                $this.css('background-position','0px 0px');
                $this.find(':checkbox').prop('checked',false);

                let current_id = $this.siblings('.rtId').val();
                let lastcount = 1;
                let len = existPath.length;
                let existPathLastKeyNumber = '';
                for (var k in existPath){
                    if (typeof existPath[k] !== 'function') {
                         if(current_id == existPath[k][1]) {
                            existPath.splice([k], 1);
                         }
                    }
                    lastcount++;
                    if(lastcount == len) {
                        existPathLastKeyNumber = k;
                    }
                }

                let pathLength = existPath.length;
                //var color = getRandomColor();
                let number = (Math.floor(Math.random() * (6 - 0 + 1)) + 0);
                let color = colourArray[number];
                let dynamicMarkerColor = icons[number];
                console.log(dynamicMarkerColor);
                var rander = {
                    draggable :false,
                    polylineOptions:{strokeColor:color},
                    markerOptions: { icon: dynamicMarkerColor},
                };

                if (pathLength == 0) {
                    existPath = [];
                    pathsCnt = 0;
                    $(".city").trigger("change");
                } else {
                    let last_id = existPath[existPathLastKeyNumber][1];
                    let wp = $('#rtWp_' + last_id).val();
                    setroute(wp,rander);
                }
            }

            
        });

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initVectorMap();

        $('#slider_remove_btn').click(function(){
            $('#carousel').html('');
            $(".carousel-container").hide();
            $("#slider_remove_btn").hide();
        });
        
    });

    function routeFun(id) {
        $('#carousel').html('');
        $(".carousel-container").hide();
        $("#slider_remove_btn").hide();
        let getAllImages = $("#image_" + id).val();
        let slider_images;
        if(getAllImages !== '') {
            slider_images = getAllImages.split(",");
            let content  = '';
            slider_images.forEach(function(element) {
                $('<div class="carousel-feature"><a href="'+element+'" ><img  class="carousel-image" alt="Image Caption" src="'+element+'"></a></div>').appendTo('#carousel');
            });


            //$("#carousel").featureCarousel();
             $("#carousel").featureCarousel({
                largeFeatureWidth: 400,     // width of image in center
                largeFeatureHeight: 175,    // height of image in center
                smallFeatureWidth: .42,     // width of the other images (42% of original width)
                smallFeatureHeight: .35,     // height of the other images (35% of original height)
                lightbox: 'image'    
                    // movedToCenter: function($feature) {
                    //   // $feature is a jQuery wrapped object describing the featured that is now in the center position.
                    //   var imageUrl = $feature.find('.carousel').attr('href');
                    //   alert('A new feature has moved to the center. The HREF of the image is: ' + imageUrl);
                    // }
                  });

           

            $(".carousel-container").show();
            $("#slider_remove_btn").show();
        } else {
            $('#carousel').html('');
            $(".carousel-container").hide();
            $("#slider_remove_btn").hide();
        }
    }
</script>

<style type="text/css">
    .cursor_pointer {
        cursor: pointer;
    }
</style>

<script type="text/javascript">
   $(document).ready(function(){
        $("select").chosen({allow_single_deselect:true});


    $('.dropdown-container')
    .on('click', '.dropdown-button', function() {
        $('.dropdown-list').toggle();
    })
    .on('input', '.dropdown-search', function() {
        var target = $(this);
        var search = target.val().toLowerCase();
    
        if (!search) {
            $('li').show();
            return false;
        }
    
        $('li').each(function() {
            var text = $(this).text().toLowerCase();
            var match = text.indexOf(search) > -1;
            $(this).toggle(match);
        });
    })
    .on('change', '[type="checkbox"]', function() {
        var numChecked = $('[type="checkbox"]:checked').length;
        $('.quantity').text(numChecked || 'Any');
    });

// JSON of States for demo purposes
var usStates = [
    { name: 'ALABAMA', abbreviation: 'AL'},
    { name: 'ALASKA', abbreviation: 'AK'},
    { name: 'AMERICAN SAMOA', abbreviation: 'AS'},
    { name: 'ARIZONA', abbreviation: 'AZ'},
    { name: 'ARKANSAS', abbreviation: 'AR'},
    { name: 'CALIFORNIA', abbreviation: 'CA'},
    { name: 'COLORADO', abbreviation: 'CO'},
    { name: 'CONNECTICUT', abbreviation: 'CT'},
    { name: 'DELAWARE', abbreviation: 'DE'},
    { name: 'DISTRICT OF COLUMBIA', abbreviation: 'DC'},
    { name: 'FEDERATED STATES OF MICRONESIA', abbreviation: 'FM'},
    { name: 'FLORIDA', abbreviation: 'FL'},
    { name: 'GEORGIA', abbreviation: 'GA'},
    { name: 'GUAM', abbreviation: 'GU'},
    { name: 'HAWAII', abbreviation: 'HI'},
    { name: 'IDAHO', abbreviation: 'ID'},
    { name: 'ILLINOIS', abbreviation: 'IL'},
    { name: 'INDIANA', abbreviation: 'IN'},
    { name: 'IOWA', abbreviation: 'IA'},
    { name: 'KANSAS', abbreviation: 'KS'},
    { name: 'KENTUCKY', abbreviation: 'KY'},
    { name: 'LOUISIANA', abbreviation: 'LA'},
    { name: 'MAINE', abbreviation: 'ME'},
    { name: 'MARSHALL ISLANDS', abbreviation: 'MH'},
    { name: 'MARYLAND', abbreviation: 'MD'},
    { name: 'MASSACHUSETTS', abbreviation: 'MA'},
    { name: 'MICHIGAN', abbreviation: 'MI'},
    { name: 'MINNESOTA', abbreviation: 'MN'},
    { name: 'MISSISSIPPI', abbreviation: 'MS'},
    { name: 'MISSOURI', abbreviation: 'MO'},
    { name: 'MONTANA', abbreviation: 'MT'},
    { name: 'NEBRASKA', abbreviation: 'NE'},
    { name: 'NEVADA', abbreviation: 'NV'},
    { name: 'NEW HAMPSHIRE', abbreviation: 'NH'},
    { name: 'NEW JERSEY', abbreviation: 'NJ'},
    { name: 'NEW MEXICO', abbreviation: 'NM'},
    { name: 'NEW YORK', abbreviation: 'NY'},
    { name: 'NORTH CAROLINA', abbreviation: 'NC'},
    { name: 'NORTH DAKOTA', abbreviation: 'ND'},
    { name: 'NORTHERN MARIANA ISLANDS', abbreviation: 'MP'},
    { name: 'OHIO', abbreviation: 'OH'},
    { name: 'OKLAHOMA', abbreviation: 'OK'},
    { name: 'OREGON', abbreviation: 'OR'},
    { name: 'PALAU', abbreviation: 'PW'},
    { name: 'PENNSYLVANIA', abbreviation: 'PA'},
    { name: 'PUERTO RICO', abbreviation: 'PR'},
    { name: 'RHODE ISLAND', abbreviation: 'RI'},
    { name: 'SOUTH CAROLINA', abbreviation: 'SC'},
    { name: 'SOUTH DAKOTA', abbreviation: 'SD'},
    { name: 'TENNESSEE', abbreviation: 'TN'},
    { name: 'TEXAS', abbreviation: 'TX'},
    { name: 'UTAH', abbreviation: 'UT'},
    { name: 'VERMONT', abbreviation: 'VT'},
    { name: 'VIRGIN ISLANDS', abbreviation: 'VI'},
    { name: 'VIRGINIA', abbreviation: 'VA'},
    { name: 'WASHINGTON', abbreviation: 'WA'},
    { name: 'WEST VIRGINIA', abbreviation: 'WV'},
    { name: 'WISCONSIN', abbreviation: 'WI'},
    { name: 'WYOMING', abbreviation: 'WY' }
];

// <li> template
// var stateTemplate = _.template(
//     '<li>' +
//         '<input name="<%= abbreviation %>" type="checkbox">' +
//         '<label for="<%= abbreviation %>"><%= capName %></label>' +
//     '</li>'
// );

// Populate list with states
// _.each(usStates, function(s) {
//     s.capName = _.startCase(s.name.toLowerCase());
//     $('ul').append(stateTemplate(s));
// });
    
    var stateTemplate = 
        '<li>' +
            '<input name="<%= abbreviation %>" type="checkbox">' +
            '<label for="<%= abbreviation %>"><%= capName %></label>' +
        '</li>';

    usStates.forEach(function(element) {
        element.capName = element.name.toLowerCase();
        //$('.dropdown-list ul').append("<li><input name='"+ element.abbreviation  +"' type='checkbox'></li>");
    });
   });
</script>

<style type="text/css">
    

    .noselect {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.dropdown-container, .instructions {
    width: 200px;
    margin: 20px auto 0;
    font-size: 14px;
    font-family: sans-serif;
}

.instructions {
    width: 100%;
    text-align: center;
}

.dropdown-button {
    float: left;
    width: 100%;
    background: whitesmoke;
    padding: 10px 12px;

    cursor: pointer;
    border: 1px solid lightgray;
    box-sizing: border-box;
    
    .dropdown-label, .dropdown-quantity {
        float: left;
    }
    
    .dropdown-quantity {
        margin-left: 4px;
    }
    
    .fa-filter {
        float: right;
    }
}

.dropdown-list {
    float: left;
    width: 100%;

    border: 1px solid lightgray;
    border-top: none;
    box-sizing: border-box;
    padding: 10px 12px;
    
    input[type="search"] {
        padding: 5px 0;
    }
    
    ul {
        margin: 10px 0;
        max-height: 200px;
        overflow-y: auto;
        
        input[type="checkbox"] {
            position: relative;
            top: 2px;
        }
    }
}


</style>
</html>