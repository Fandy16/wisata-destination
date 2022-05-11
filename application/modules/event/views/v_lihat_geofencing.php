
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<html lang="en">

    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>PT PELABUHAN INDONESIA III (PERSERO) | Geofencing </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="My Intan" name="description" />
        <meta content="Pandu Yudhantara" name="author" />
        <meta content="UCJOBzIZecRnX6YGqZTMCmHg4WDmOnRaFciart30" name="csrf-token">
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="https://my.pelindo.co.id/myintan/application/resources/assets/global/plugins/font-google/font-google.css" rel="stylesheet" type="text/css" />
<link href="https://my.pelindo.co.id/myintan/application/resources/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="https://my.pelindo.co.id/myintan/application/resources/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
<link href="https://my.pelindo.co.id/myintan/application/resources/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="https://my.pelindo.co.id/myintan/application/resources/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
<link href="https://my.pelindo.co.id/myintan/application/resources/assets/global/plugins/bootstrap-toastr/toastr.css" rel="stylesheet" type="text/css" />
<link href="https://my.pelindo.co.id/myintan/application/resources/assets/global/plugins/sweetalert2/sweetalert2.css" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL STYLES -->
<style type="text/css">
.map-wrapper {
    position: relative;
    height: calc(100vh - 4em - 64px);
}
#map {
    height: 100%;
    width: 100%;
}

.controls {
    margin-top: 10px;
    border: 1px solid transparent;
    border-radius: 2px 0 0 2px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    height: 32px;
    outline: none;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
  }

  #pac-input {
    background-color: #fff;
    font-family: Roboto;
    font-size: 15px;
    font-weight: 300;
    margin-left: 12px;
    padding: 0 11px 0 13px;
    text-overflow: ellipsis;
    width: 300px;
  }

  .input-text {
    background-color: #fff;
    font-family: Roboto;
    font-size: 15px;
    font-weight: 300;
    margin-left: 12px;
    padding: 0 11px 0 13px;
    text-overflow: ellipsis;
    width: 150px;
    text-align: right;
  }

  #pac-input:focus {
    border-color: #4d90fe;
  }

  .pac-container {
    font-family: Roboto;
  }

  #type-selector {
    color: #fff;
    background-color: #4d90fe;
    padding: 5px 11px 0px 11px;
  }

  #type-selector label {
    font-family: Roboto;
    font-size: 13px;
    font-weight: 300;
  }
  #target {
    width: 345px;
  }
</style>
<link href="https://my.pelindo.co.id/myintan/application/resources/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="https://my.pelindo.co.id/myintan/application/resources/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="https://my.pelindo.co.id/myintan/application/resources/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css&quot; rel=&quot;stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN THEME GLOBAL STYLES -->
<link href="https://my.pelindo.co.id/myintan/application/resources/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
<link href="https://my.pelindo.co.id/myintan/application/resources/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->

<!-- BEGIN THEME LAYOUT STYLES -->
<link href="https://my.pelindo.co.id/myintan/application/resources/assets/layouts/layout/css/layout.css" rel="stylesheet" type="text/css" />
<link href="https://my.pelindo.co.id/myintan/application/resources/assets/layouts/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color" />
<link href="https://my.pelindo.co.id/myintan/application/resources/assets/layouts/layout/css/custom.css" rel="stylesheet" type="text/css" />
<!-- END THEME LAYOUT STYLES -->        
    </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-content-white page-md   ">
        <div class="page-wrapper">

            <!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            
            <div class="menu-toggler sidebar-toggler">
                <span></span>
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
            <span></span>
        </a>
        <div class="top-title">
            PT PELABUHAN INDONESIA III (PERSERO)
        </div>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu hidden-xs">
            <ul class="nav navbar-nav pull-right">

                <!-- BEGIN NOTIFICATION DROPDOWN -->

                
        
                <!-- END NOTIFICATION DROPDOWN -->

                <!-- BEGIN USER LOGIN DROPDOWN -->
                <!-- DOC: Apply "dropdown-dark" class after "dropdown-extended" to change the dropdown styte -->
<!-- DOC: Apply "dropdown-hoverable" class after below "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
<!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
<li class="dropdown   dropdown-user">
    <a href="javascript:;" class="dropdown-toggle" data-toggle=dropdown data-hover=dropdown data-close-others=true>
        <img alt="" class="img-circle" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAAEsCAYAAAB5fY51AAATLUlEQVR4nO3de7BdZXnH8d/at3MLSQhJIEASCgEKARUcioMgSFrFjrUqYym9jNCGKkO1HabR2k5nhHFkqm1nylg7qSmUynSAQoUOiMRykSoYSkoipkACCUEIScCQnJycc/Z19Y/jSU6Ss/fZl/Wu9V6+nxn/cch636xnPb88a+1bFMexgHbsXrrS2MWycPuayNSx4Y+IwIJkNoySQqiBwAqMC8HUKYIsHASWx3wMp3YRYn4isDwSckDNhADzA4HlMAKqewSYmwgshxBQ5hBgbiCwLEdIpY/wsheBZSFCyh6El10ILEsQUvYjvLJHYGWMoHIPwZUdAisDhJQ/CK90EVgpIqj8RXClg8BKAUEVDoLLLALLIIIqXASXGQSWAQQVJhFcySKwEkRQoRmCKxkEVgIIKrSL4OoNgdUDggrdIri6Q2B1gaBCUgiuzhBYHSCoYArB1Z5c1htwBWEFk7i+2sOENQMuJKSNaas5AqsJggpZI7iOxi3hNAgr2IDr8GhMWFNwgcBWTFsTmLB+gbCCzbg+JwQ/YXEhwDUhT1tBT1iEFVwU8nUbbGCFXHS4L9TrN7hbwlALDX+FdIsY1IRFWMFHIV3XwQRWSEVFeEK5voMIrFCKibCFcJ17/QwrhAIC0/H1uZa3ExZhhZD5ev17GVi+FgvohI994F1g+VgkoFu+9YNXgeVbcYAk+NQX3gSWT0UBkuZLfzj/KqEvhQDS4vIriE5PWIQV0DmX+8bZwHL5pANZc7V/nAwsV082YBMX+8i5wHLxJAO2cq2fnAos104u4AKX+sqZwHLppAKucaW/nAgsV04m4DIX+sz6wHLhJAK+sL3frA8sAJhkdWDZnvaAj2zuO2sDy+aTBvjO1v6zMrBsPVlASGzsQ+sCy8aTBITKtn60KrBsOzkA7OpLawLLppMC4HC29Kc1gQUAM7EisGxJbwDN2dCnmQeWDScBQHuy7tdMAyvrvzyAzmXZt5kFFmEFuCur/s38lhAA2pVJYDFdAe7Loo9TDyzCCvBH2v2camARVoB/0uxrnmEBcEZqgcV0Bfgrrf5OJbAIK8B/afQ5t4QAnGE8sJiugHCY7nejgUVYAeEx2ffcEgJwhrHAYroCwmWq/5mwADjDSGAxXQEwkQOJBxZhBWBS0nnALSEAZyQaWExXAI6UZC4wYQFwRmKBxXQFoJmk8oEJC4AzEgkspisAM0kiJ5iwADij58BiugLQrl7zggkLgDN6CiymKwCd6iU3mLAAOKPrwGK6AtCtbvODCQuAM7oKLKYrAL3qJkeYsAA4o+PAYroCkJRO84QJC4AzOgospisASeskV5iwADijkPUGTFvwympFhXzW25AkxbW6VGsortakel1xpS5Va4pHxtTYN6Z4ZEzx8Kgaw6Nq7B5WY+ce1d98R41de9V4Y4/i0XLWfwUjqBHa1XZgcTvYu6iQlwp5Rf3Frv58ffc+1bfsUG3LDtW37FB1089U+8mrUr2R7EYDRo2ysXvpynjh9jXRTP+d9xOWT/IL5yi/cI5K7z/r4P8Xj1dV3bhV1WdfUeWpF1R9+iWaI0PUyKwojmcenFyermy63UhDY9+oKo//ROVHnlP5+xukaj3rLc2IGtlfo7TMNGUxYXkmN2dQ/R9/n/o//j419uzX2N0/1NidT6jx+s+z3hp+gRp1j1cJPZabd4yGrv+IjvvvWzT7G59Rbsn8rLeEI1Cjzsx4S+jy7aAU3u1GK3GlprE7n9CBv71f8ch41ts5iBodYmuN0tTqtpAJKyBRqaDBP/hVzVt7k4oXLMt6O5gGNWqNwApQ/qTjNPeuVRr841/PeitoghpNr2VguX47iOaiQl6zVn1Ss266OuutoIlQa9Qqd5iwAjd4zQod87VPZ70NtECNDiGwoIGrLtHgZ6/IehtogRpNaBpY3A6GZWjVJ1S8+KyZ/0NkJqQaNcsfJixImnheMvtvrpX6S1lvBU1QIwILU+QXzdPQ5z+a9TbQQug1IrBwmMHrPqTcifOy3gZaCLlG0wYWz6/CFZUKGvi9y7LeBloIpUbT5RATFo4ycNXFUpGPytgs1BoRWDhKbv5slT74rqy3gRZCrRFfL9ODyrqXNPavj3f2h6KcolJeKhYUzRpQ7ph+5RbMUW7BHOVPWaj8KQsVlbIvS99l56iy9rmst9EzauSXo846z6/aV9/+tsoPPpvsQaNI+TNPUumC01W67ByVLj6766/r7UXpA8tTX9MEauS2I786Oft/JnC4OFb9xdc19uLrGvv244pmD6j/yos0+JkPK78ovVeG8ovnK3fCsWrsfCe1NZ1BjTLDMyzLxcNjGrv9Uf38ki/pwOrvKW6k913g+WUnpLaWy6hReggsV1TrOvDVezX8p/888VNUKSictiiVdbxBjYw7LLB4fmW/8gPrNHLLfamslT/1+FTW8Q01StbUXGLCctDYmrWqbthqfJ3c7EHja/iKGplBYDnqwD88bHyNaKjP+Bo+o0bJI7AcVXl0oxr7x4yuEQ32Gz2+76hR8ggsV9Ubqq5/2ewaBS6PnlCjxB382/LA3T31l3caPX5c4ReJe0WNkjGZT2HFs2caew+YXWC8bPb4AaBGySKwXFatGT184+39Ro8fBGqUKALLYdGA2a/Kbby1z+jxQ0CNkkVgOSy3YI7R49de3W30+CGgRskisBxm+l3O9S07jB4/BNQoWTmJVwidlM+p+J5fMnb4eLyq2ktvGDt+EKhRonYvXRkzYTmqdPm5igbMvcu5unGrVA3jJXNTqFHyCCxHDX56hdHjV57cZPT4IaBGySOwHFRa8S6VLjnb6Brlh9YbPb7vqJEZBJZjckvma/bXrjG6RnXDVtW37TK6hs+okTkElkMKZy/Wsfd8Qbn5s42uM/ovjxk9vs+okVl8p7sDosE+DV5/hQb/6ArjP3ZQe3WXyv/5jNE1fESN0kFg2SqKVDz/VPV97FfUf+VFyh0zkMqyB77+Hame3neSO40apY7Ayko+JxVyE797N3do4jfvTpqn/OknqnDWySq+d1lqDTCp/MTzyf8klsuokXWiXUv+0Os3jS54ZbWiQng/6d2pxp792nPFl9XYlf5n06hRe7KskS146A7Ftbr23bA66EawHTWaQGAFLm40NPxnt6v61ItZbwVNUKNDCKyAxZWahm+8TeXv/DjrraAJanQ4HroHqr5zr4Y/90+qPrM5662gCWp0NAIrMHGjofL967T/y3cp3mf463vRFWrUHIEViLhWV+XRjTpw64Oq/fS1rLeDaVCjmRFYHmvsH1NtwzaVH92o8nefDf4VJhtRo84QWJ4af3i9hj/7j1lvAy1Qo87xxlGP1be/pcpTL6jy5CaVH3teGq9kvaVpUSP7a2QLAisQ8VhZ5cee19idT1j3fh5qNMHmGtmCwApQ7eU3deDWB1V+YF3WW5FEjaZjW41swRtHA1RYtkhzbr1O875/s4oXLMt6O5gGNZoegRWwwhknau49X9Csm66e+GYCWIcaHY4zELgol9PgNSt07L1fVG6B2W/JRHeo0SEEFiRJxfNP09x7v6jc8WZ/qRjdo0YEFqYonHK85t61StGs/qy3giZCrxGBhcMUTj1Bs795fdbbQAsh14h3uvegvnOv6lt2dPeHc5FULCgq5RXNHlRu7pCiuUOKctn/G9J36XIN/P4HNfbtx7PeSs+okV8IrB5Untyk/atuT+6AxbzyJ89X/vQTVTx3iYoXnqHieacpKqVfpqEvXany99ar8dZw6msniRr5hcCySbWu+rZdqm/bpcra5yRN/HxU30fOV/9VF6t04ZmpbSU31K/Bz39UI3/1b6mt6QRqlKnsZ1u0FI+WNX7f09r7W1/XO5+8RdUNW1Nbe+C3PxD8y+jtoEbpIbAcUl3/it75za9q5K/vU9ww/7t0Uamg/t+51Pg6PqFGZuUWbl8TZb0JdGb0mw9r+IbVimt142sNfOr9xtfwETUygwnLUeXvrtfIzXcbXye/eL4KZy82vo6PqFHyCCyHjd3xmMo/2GR8ndLl5xpfw1fUKFkEluNGvnKP8TWKF5xufA2fUaPkEFiOq29+Q5Vnthhdo3jeaUaP7ztqlBwCywPlR54zevzcnMGgXjo3gRolg8DyQPV/zP7rLUn50xYZX8Nn1CgZBJYH6q+8aXyN3KJjja/hM2qUDALLA/HIuPH3++SO8/92wyRqlIycJPHmUffF5arR4+fmDhk9fgioUW8Wbl8TMWF5Iuormj1+P5+T7xU16h2B5YO+gvmfySr63wxGUaNEEFgeyJ883/wiNfMf5PUZNUoGgeWBwpknGV8jHh03vobPqFEyCCwPpPGxjPhA2fgaPqNGyTgYWLxS6K6+D59nfI3G8KjxNXxGjXozmU9MWI4rXXqO8icdZ3yd+mtvGV/DV9QoOQSW44Zu/Fgq69S37kplHR9Ro+QQWA4buHaFiu851fg68XhVjR17jK/jI2qULALLUcWLflmz/uJTqaxV/en2VNbxDTVK3mGBxYN3N5R+7d2ae9vnUvstvOoP/y+VdXxCjZIzNZf8f2usR6LBPg2t+oQGrrk81V8frvzoxdTWch01MovAckB07CwNXH2JBq/7kHLzjkl17cbeEVXXv5zqmi6iRukgsGyUz6mwfLGK712mvhXvVvHCMzL5KXRJGr/3aanu/0c+OkaNMnHUGV64fU20e+nKOIvNuKawfLEG/+Q3uv7zUS6SigVFAyXl5g4pOm628kvnK3/yfPMflG3T2F1PZr2FnlAjtx35XJ0JqwfF5UtUXL4k620YU3n6RdW3mP+mTJOokV94WwOaGrnlvqy3gBmEViMCC9Maf+hZ1TZuy3obaCHEGk0bWLwfK2yN/WOp/PgnuhdCjabLISYsHGX/X94ZxMc8XBZqjQgsHGb8P55W+YF1WW8DLYRcIwILB1We2aLhP78j622ghdBr1DSweI4VltoLP9O+a/9eKtey3gqaCKlGzfKHCQuqPr9d7/zu3yke8f87wV1FjSbwxtHAlf9ro/bdsFoar2S9FTRBjQ5pOWFxW+ivuNHQ6Lce0b6V36ARLBVqjVrlDhNWgOpv7tHwjbep+lQYX0niImo0PQIrIHGjofF//5FGbr47+GchtqJGrc0YWHx7gx/KP9ikka/co/rmN7LeCpqgRjM/hmLC8ljcaKjy2PMa/dZaVX/8UtbbwTSoUWcILA813h7W+P3rNHrHo2q89nbW28E0qFF32gosbgvtV9+5V+W1/6vyQ+tVXbdZiimXbahRa+28K4EJy0Fxra76q7tV3bBN1XWbVV23WfXtu7PeFqagRma0HVhMWWbFlZriak0qVxVX6opHx9V4e78ab+07+L/61l2qbdkx8Qu/gXyHt02okTntvuczijsYSwksACa0G1h8lhCAMzoKLD6qAyBpneQKExYAZ3QcWExZAJLSaZ4wYQFwRleBxZQFoFfd5AgTFgBndB1YTFkAutVtfjBhAXBGT4HFlAWgU73kBhMWAGf0HFhMWQDa1WteMGEBcEYigcWUBWAmSeQEExYAZyQWWExZAJpJKh+YsAA4I9HAYsoCcKQkc4EJC4AzEg8spiwAk5LOAyMTFqEFwEQOcEsIwBnGAospCwiXqf5nwgLgDKOBxZQFhMdk3xufsAgtIBym+51bQgDOSCWwmLIA/6XR56lNWIQW4K+0+ptbQgDOSDWwmLIA/6TZ16lPWIQW4I+0+zmTW0JCC3BfFn3MMywAzsgssJiyAHdl1b+ZTliEFuCeLPs281tCQgtwR9b9mnlgSdmfBAAzs6FPrQgsAGiHNYFlQ3oDmJ4t/WlNYEn2nBQAh9jUl1YFlmTXyQFCZ1s/WhdYkn0nCQiRjX1oZWBJdp4sIBS29p+1gSXZe9IAn9ncd1YHFgBMZX1g2Zz2gG9s7zfrA0uy/yQCPnChz5wILMmNkwm4ypX+ciawJHdOKuASl/rKqcCS3Dq5gO1c6yfnAkty7yQDNnKxj5wMLMnNkw3YwtX+cTawJHdPOpAll/smiuM46z0kYvfSlX78RQBDXA6qSU5PWFP5UAzAFF/6w5vAkvwpCpAkn/rCq8CS/CoO0Cvf+sG7wJL8KxLQDR/7wMvAkvwsFtAuX69/b14lbIVXEBEKX4NqkrcT1lS+FxGQwrjOgwgsKYxiIlyhXN/BBJYUTlERlpCu6yCeYU2H51pwXUhBNSmoCWuqEIsNf4R6/QYbWFK4RYfbQr5ug70lPBK3iLBdyEE1KegJayouBtiM63MCE9Y0mLZgC4LqcExY0+AigQ24Do/GhDUDpi2kjaBqjsBqE8EF0wiqmXFL2CYuJpjE9dUeJqwuMG0hKQRVZwisHhBc6BZB1R0CKwEEF9pFUPWGwEoQwYVmCKpkEFgGEFyYRFAli8AyiOAKF0FlBoGVAoIrHASVWQRWiggufxFU6SCwMkBw+YOgSheBlTHCyz2EVHYILEsQXPYjqLJHYFmI8LIHIWUXAstyhFf6CCl7EVgOIbzMIaTcQGA5jADrHgHlJgLLIwRYcwSUHwgsj4UcYASUnwiswPgYYoRTOAgsSHIjyAgm/D8GOksklntQ1wAAAABJRU5ErkJggg==" />
        <span class="username username-hide-on-mobile"> BOBY BOY WALLY </span>
        <i class="fa fa-angle-down"></i>
    </a>
    <ul class="dropdown-menu dropdown-menu-default">
    
                        <li style="margin-top: 10px; margin-bottom: 10px;">
            <a href="https://my.pelindo.co.id/myintan/logout">
                <i class="icon-power"></i> Log Out
            </a>
        </li>
    </ul>
</li>                <!-- END USER LOGIN DROPDOWN -->

            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>            <!-- END HEADER -->

            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->

            <!-- BEGIN CONTAINER -->
            <div class="page-container">

                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">

                    <!-- BEGIN SIDEBAR -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <div class="page-sidebar navbar-collapse collapse ">

                        <!-- BEGIN SIDEBAR MENU -->
                        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                        <ul class="page-sidebar-menu page-header-fixed page-sidebar-menu-light" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">

                            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <!-- END SIDEBAR TOGGLER BUTTON -->

                            <li class="nav-item start ">
    <a href="https://my.pelindo.co.id/myintan/dashboard" class="nav-link nav-toggle">
        <i class="icon-home"></i>
        <span class="title">Dashboard</span>
            </a>
    </li>
<li class="nav-item start active open">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="icon-briefcase"></i>
        <span class="title">Data Master</span>
                    <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                            <li class="nav-item start active open">
    <a href="https://my.pelindo.co.id/myintan/master/geofences" class="nav-link nav-toggle">
        <i class=""></i>
        <span class="title">Geofencing</span>
            </a>
    </li>
                            <li class="nav-item start ">
    <a href="https://my.pelindo.co.id/myintan/master/user-geofences" class="nav-link nav-toggle">
        <i class=""></i>
        <span class="title">Geofencing User</span>
            </a>
    </li>
                            <li class="nav-item start ">
    <a href="https://my.pelindo.co.id/myintan/master/user-devices" class="nav-link nav-toggle">
        <i class=""></i>
        <span class="title">Device User</span>
            </a>
    </li>
                    </ul>
    </li>
<li class="nav-item start ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="icon-docs"></i>
        <span class="title">Laporan</span>
                    <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                            <li class="nav-item start ">
    <a href="https://my.pelindo.co.id/myintan/laporan/raw-absensi" class="nav-link nav-toggle">
        <i class=""></i>
        <span class="title">Raw Data Absensi</span>
            </a>
    </li>
                    </ul>
    </li>
<li class="nav-item start ">
    <a href="https://my.pelindo.co.id/myintan/logout" class="nav-link nav-toggle">
        <i class="icon-power"></i>
        <span class="title">Logout</span>
            </a>
    </li>

                        </ul>
                        <!-- END SIDEBAR MENU -->

                    </div>
                    <!-- END SIDEBAR -->

                </div>
                <!-- END SIDEBAR -->

                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">

                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">

                        <!-- BEGIN THEME PANEL -->
                                                <div class="theme-panel hidden-xs hidden-sm">
    <div class="toggler"> </div>
    <div class="toggler-close"> </div>
    <div class="theme-options">
        <div class="theme-option theme-colors clearfix">
            <span> THEME COLOR </span>
            <ul>
                <li class="color-default tooltips li-layout " data-style="default" data-container="body" data-placement="bottom" data-original-title="Default" data-key="color-option" data-value="default"> </li>
                <li class="color-darkblue tooltips li-layout current" data-style="darkblue" data-container="body" data-placement="bottom" data-original-title="Dark Blue" data-key="color-option" data-value="darkblue"> </li>
                <li class="color-blue tooltips li-layout " data-style="blue" data-container="body" data-placement="bottom" data-original-title="Blue" data-key="color-option" data-value="blue"> </li>
                <li class="color-grey tooltips li-layout " data-style="grey" data-container="body" data-placement="bottom" data-original-title="Grey" data-key="color-option" data-value="grey"> </li>
                <li class="color-light tooltips li-layout " data-style="light" data-container="body" data-placement="bottom" data-original-title="Light" data-key="color-option" data-value="light"> </li>
                <li class="color-light2 tooltips li-layout " data-style="light2" data-container="body" data-placement="bottom" data-html="true" data-original-title="Light 2" data-key="color-option" data-value="light2"> </li>
            </ul>
        </div>
        
        
        <div class="theme-option">
            <span> Top Menu Dropdown</span>
            <select class="page-header-top-dropdown-style-option form-control input-sm select-layout" data-key="page-header-top-dropdown-style-option">
                <option value="light" >Light</option>
                <option value="dark" >Dark</option>
            </select>
        </div>
        <div class="theme-option">
            <span> Dropdown Hoverable</span>
            <select class="dropdown-hoverable-option form-control input-sm select-layout" data-key="dropdown-hoverable-option">
                <option value="no" >No</option>
                <option value="yes" >Yes</option>
            </select>
        </div>
        <div class="theme-option">
            <span> Sidebar Mode</span>
            <select class="sidebar-option form-control input-sm select-layout" data-key="sidebar-option">
                <option value="default" >Default</option>
                <option value="fixed" >Fixed</option>
            </select>
        </div>
        
        <div class="theme-option">
            <span> Sidebar Style </span>
            <select class="sidebar-style-option form-control input-sm select-layout" data-key="sidebar-style-option">
                <option value="default" >Default</option>
                <option value="light" >Light</option>
            </select>
        </div>
        <div class="theme-option">
            <span> Sidebar Position </span>
            <select class="sidebar-pos-option form-control input-sm select-layout" data-key="sidebar-pos-option">
                <option value="left" >Left</option>
                <option value="right" >Right</option>
            </select>
        </div>
        <div class="theme-option">
            <span> Footer </span>
            <select class="page-footer-option form-control input-sm select-layout" data-key="page-footer-option">
                <option value="default" >Default</option>
                <option value="fixed" >Fixed</option>
            </select>
        </div>
    </div>
</div>                                                <!-- END THEME PANEL -->

                        <!-- BEGIN CONTENT -->
                        <div class="page-bar margin-bottom-20">
    <ul class="page-breadcrumb">
        <li>
            <a href="https://my.pelindo.co.id/myintan/dashboard">Dashboard</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Geofencing</span>
        </li>
    </ul>
</div>

<div class="row">
    <div class="col-md-12">
        <div id="mapPortlet" class="portlet box portlet-theme">
            <div class="portlet-title">
                <div class="caption" style="padding: 18px 0 18px !important;">
                    <i class="icon-grid"></i>Data Geofencing
                </div>
                <div  class="tools" style="padding: 12px 0 12px !important;" >
                    <button id="saveGeofencing" class="btn btn-sm green-jungle" style="width: 200px;"><i class="fa fa-check"></i> Simpan</button>
                </div>
            </div>
            <div class="portlet-body map-wrapper" style="padding: 0;">
               <div id="selectreg"  class="col-md-3" hidden >
                 <!-- <select class="form-control select2" id="empl_code" name="empl_code" style="width: 100%">
                    <option></option>
                 </select> -->
                 <select class="form-control select2" id="kd_cabang_real" name="kd_cabang_real" style="width: 100%">
 	 	    <option value="20100001" data-id="2010" > PT Pelindo Husada Citra</option>
        <option value="20100002" data-id="2010" > Rumah Sakit PHC Surabaya</option>
        <option value="20100003" data-id="2010" > Klinik Surabaya</option>
        <option value="20100004" data-id="2010" > Klinik Banjarmasin</option>
        <option value="20100005" data-id="2010" > Klinik Semarang</option>
        <option value="20100006" data-id="2010" > Klinik PHC Tanjung Perak</option>
        <option value="20100007" data-id="2010" > Klinik PHC Kebraon</option>
        <option value="20100008" data-id="2010" > Klinik PHC Benowo</option>
        <option value="20100009" data-id="2010" > Klinik PHC Banjarmasin </option>
        <option value="20100010" data-id="2010" > Klinik PHC Pedurungan </option>
        <option value="20100011" data-id="2010" > Klinik PHC Tanjung Emas</option>
        <option value="20100012" data-id="2010" > OHS SP Pelindo</option>
        <option value="20100013" data-id="2010" > OHS SP Pelindo Cabang Benoa</option>
        <option value="20100014" data-id="2010" > OHS SP PMS</option>
        <option value="20100015" data-id="2010" > OHS SP TPS</option>
        <option value="20100016" data-id="2010" > OHS SP TTL</option>
        <option value="20100017" data-id="2010" > OHS SP PERTAMINA</option>
        <option value="20100018" data-id="2010" > OHS SP PERTAMINA LPG PERAK</option>
        <option value="20100019" data-id="2010" > OHS SP Pelindo Cabang Gresik</option>
        <option value="20100020" data-id="2010" > OHS SP Pelindo Cabang Banjarmasin</option>
        <option value="20100021" data-id="2010" > OHS SP PERTAMINA TBBM SURABAYA</option>
        <option value="20100022" data-id="2010" > OHS SP PERTAMINA DPPU</option>
        <option value="20100023" data-id="2010" > OHS SP Pelindo Cabang Batu Licin</option>
        <option value="20100024" data-id="2010" > OHS SP Pelindo Cabang Tanjung Wangi</option>
        <option value="20100025" data-id="2010" > OHS SP Pelindo Cabang Sampit</option>
        <option value="20100026" data-id="2010" > OHS SP Pelindo Cabang Kumai</option>
        <option value="20100027" data-id="2010" > OHS SP Pelindo Cabang Lembar</option>
        <option value="20100028" data-id="2010" > OHS SP Pelindo Cabang Kupang</option>
        <option value="20100029" data-id="2010" > OHS SP Pelindo Cabang Benoa</option>
        <option value="20100030" data-id="2010" > OHS SP Pelindo Cabang Tanjung Perak</option>
        <option value="20100031" data-id="2010" > OHS SP Pelindo Cabang Semarang</option>
        <option value="20100032" data-id="2010" > OHS SP Pelindo Cabang Cilacap</option>
        <option value="20100033" data-id="2010" > OHS SP Pelindo Cabang Tanjung Emas</option>
        <option value="20100034" data-id="2010" > OHS SP BJTI</option>
        <option value="20100035" data-id="2010" > OHS SP PERTAMINA VETERAN DAN POLENG</option>
        <option value="20100036" data-id="2010" > OHS SP TPS SEMARANG</option>
        <option value="20100037" data-id="2010" > OHS Jawa Timur &amp; Bali</option>
     </select>


               </div>
               <div id="tbl_edit"  class="col-md-3" hidden >
                <div  class="form-group" >
                    <label class="col-md-4 control-label">Latitude</label>
                    <div class="col-md-8">
                        <input id="lt" type="text" class="form-control input-text" readonly >
                       
                    </div>
                </div>
                <div  class="form-group" >
                    <label class="col-md-4 control-label">Longitude</label>
                    <div class="col-md-8">
                        <input id="lg" type="text" class="form-control input-text" readonly >
                       
                    </div>
                </div>
                <div  class="form-group" >
                    <label class="col-md-4 control-label">Radius (meter)</label>
                    <div class="col-md-8">
                        <input id="rdus" type="text" class="form-control input-text mask_number" >
                    </div>
                    
                </div>
               </div>
                
                <input id="pac-input"  class="controls" type="text" placeholder="Cari Lokasi" hidden >

                <!-- <input id="pac-input" class="controls" type="text" placeholder="Cari">
                <input id="lt" class="controls input-text" type="text" placeholder="latitude">
                <input id="lg" class="controls input-text" type="text" placeholder="longitude">
                <input id="rdus" class="controls input-text" type="text" placeholder="radius"> -->
                <div id="map"></div>
            </div>
            <ul id="delete-list" class="list-group" style="margin-bottom: 0px;">
            </ul>
        </div>
    </div>
</div>

<div class="modal fade" id="modalsAdd" role="basic" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-green-jungle" style="color: #fff;">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Tambah Geofencing User</h4>
            </div>
            <div class="modal-body form">
                <div class="form-horizontal">
                    <form method="POST" action="https://my.pelindo.co.id/myintan/master/user-geofences" accept-charset="UTF-8" class="form-horizontal"><input name="_token" type="hidden" value="UCJOBzIZecRnX6YGqZTMCmHg4WDmOnRaFciart30">
                        <div class="form-body">
                            <input name="geofences" type="hidden" value="1">
                            <input id="hidden_add_geo_id" name="geo_id" type="hidden">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group form-md-line-input form-md-floating-label ">
                                        <label for="empl_code" class="control-label col-md-4">NIPP / Nama Pegawai <span class="required">*</span></label>
                                        <div class="col-md-8">
                                            <select class="form-control select2" id="empl_code" name="empl_code" style="width: 100%">
                                                <option></option>
                                            </select>
                                            <div class="form-control-focus"> </div>
                                            <span class="help-block">Masukkan NIPP atau Nama Pegawai</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="btn-group col-md-12">
                                    <div class="col-md-3"></div>
                                    <button class="btn blue-sharp col-md-3 simpan" type="submit" data-swa-text="Menambah data geofencing user?"><i class="fa fa-check"></i> Simpan</button>
                                    <a type="button" class="col-md-3 btn red-sunglo" data-dismiss="modal"><i class="fa fa-reply"></i> Batal</a>
                                    <div class="col-md-3"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalsLihat" role="basic" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-blue-steel" style="color: #fff;">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Data Pegawai Geofencing</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="table1" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>NIP Pegawai</th>
                                    <th>Nama Pegawai</th>
                                    <th>Geofencing</th>
                                    <th class="text-center" width="100">Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th class="form-group form-md-line-input">NIP Pegawai</th>
                                    <th class="form-group form-md-line-input">Nama Pegawai</th>
                                    <th class="form-group form-md-line-input">Geofencing</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                        <!-- END CONTENT -->
                        
                        <!-- BEGIN BREAK -->
                                                <div class="clearfix page-footer-option" style="margin-bottom: -25px;"></div>
                                                <!-- END BREAK -->
                        
                    </div>
                    <!-- END CONTENT BODY -->

                </div>
                <!-- END CONTENT -->

                

            </div>
            <!-- END CONTAINER -->

            <!-- BEGIN FOOTER -->
            <div class="page-footer">
    <div class="page-footer-inner">
    	2017 - 2020 © PT PELABUHAN INDONESIA III (PERSERO).
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>            <!-- END FOOTER -->

        </div>

        <!-- MODALS UBAH CABANG -->
        <div class="modal fade" id="modalsUbahCabang" role="basic" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header bg-green-jungle" style="color: #fff;">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Pilih Regional</h4>
                    </div>
                    <div class="modal-body form">
                        <div class="form-horizontal">
                            <form method="POST" action="https://my.pelindo.co.id/myintan/ubah-cabang" accept-charset="UTF-8" class="form-horizontal"><input name="_token" type="hidden" value="UCJOBzIZecRnX6YGqZTMCmHg4WDmOnRaFciart30">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group form-md-line-input form-md-floating-label ">
                                                <label for="kd_cabang_real" class="control-label col-md-3">Regional <span class="required">*</span></label>
                                                <div class="col-md-9">
                                                    <select class="form-control" id="kd_cabang_real" name="kd_cabang_real"><option value="20100001" selected="selected">PT Pelindo Husada Citra</option><option value="20100002">Rumah Sakit PHC Surabaya</option><option value="20100003">Klinik Surabaya</option><option value="20100004">Klinik Banjarmasin</option><option value="20100005">Klinik Semarang</option><option value="20100006">Klinik PHC Tanjung Perak</option><option value="20100007">Klinik PHC Kebraon</option><option value="20100008">Klinik PHC Benowo</option><option value="20100009">Klinik PHC Banjarmasin </option><option value="20100010">Klinik PHC Pedurungan </option><option value="20100011">Klinik PHC Tanjung Emas</option><option value="20100012">OHS SP Pelindo</option><option value="20100013">OHS SP Pelindo Cabang Benoa</option><option value="20100014">OHS SP PMS</option><option value="20100015">OHS SP TPS</option><option value="20100016">OHS SP TTL</option><option value="20100017">OHS SP PERTAMINA</option><option value="20100018">OHS SP PERTAMINA LPG PERAK</option><option value="20100019">OHS SP Pelindo Cabang Gresik</option><option value="20100020">OHS SP Pelindo Cabang Banjarmasin</option><option value="20100021">OHS SP PERTAMINA TBBM SURABAYA</option><option value="20100022">OHS SP PERTAMINA DPPU</option><option value="20100023">OHS SP Pelindo Cabang Batu Licin</option><option value="20100024">OHS SP Pelindo Cabang Tanjung Wangi</option><option value="20100025">OHS SP Pelindo Cabang Sampit</option><option value="20100026">OHS SP Pelindo Cabang Kumai</option><option value="20100027">OHS SP Pelindo Cabang Lembar</option><option value="20100028">OHS SP Pelindo Cabang Kupang</option><option value="20100029">OHS SP Pelindo Cabang Benoa</option><option value="20100030">OHS SP Pelindo Cabang Tanjung Perak</option><option value="20100031">OHS SP Pelindo Cabang Semarang</option><option value="20100032">OHS SP Pelindo Cabang Cilacap</option><option value="20100033">OHS SP Pelindo Cabang Tanjung Emas</option><option value="20100034">OHS SP BJTI</option><option value="20100035">OHS SP PERTAMINA VETERAN DAN POLENG</option><option value="20100036">OHS SP TPS SEMARANG</option><option value="20100037">OHS Jawa Timur &amp; Bali</option></select>

                                                    <div class="form-control-focus"> </div>
                                                    <span class="help-block">Pilih Regional</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="btn-group col-md-12">
                                            <div class="col-md-3"></div>
                                            <button class="btn blue-sharp col-md-3 simpan" type="submit" data-swa-text="Mengubah Cabang?"><i class="fa fa-check"></i> Ubah</button>
                                            <a type="button" class="col-md-3 btn red-sunglo" data-dismiss="modal"><i class="fa fa-reply"></i> Batal</a>
                                            <div class="col-md-3"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODALS UBAH CABANG -->

        <!-- MODALS UBAH JABATAN -->
        <div class="modal fade" id="modalsUbahJabatan" role="basic" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header bg-green-jungle" style="color: #fff;">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Pilih Role</h4>
                    </div>
                    <div class="modal-body form">
                        <div class="form-horizontal">
                            <form method="POST" action="https://my.pelindo.co.id/myintan/ubah-jabatan" accept-charset="UTF-8" class="form-horizontal"><input name="_token" type="hidden" value="UCJOBzIZecRnX6YGqZTMCmHg4WDmOnRaFciart30">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group form-md-line-input form-md-floating-label ">
                                                <label for="hakakses_real" class="control-label col-md-3">Role <span class="required">*</span></label>
                                                <div class="col-md-9">
                                                    <select class="form-control" id="hakakses_real" name="hakakses_real"><option value="1637" selected="selected">ADMIN REGIONAL</option></select>
                                                    <div class="form-control-focus"> </div>
                                                    <span class="help-block">Pilih Role</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="btn-group col-md-12">
                                            <div class="col-md-3"></div>
                                            <button class="btn blue-sharp col-md-3 simpan" type="submit" data-swa-text="Mengubah Jabatan?"><i class="fa fa-check"></i> Ubah</button>
                                            <a type="button" class="col-md-3 btn red-sunglo" data-dismiss="modal"><i class="fa fa-reply"></i> Batal</a>
                                            <div class="col-md-3"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODALS UBAH JABATAN -->
        <!-- <script type="text/javascript">
            $( document ).ready(function() {
                 $('#logoutevent').click(funtion(){
                        alert('dfdf');
                 });
             });
            
        </script>> -->
        <!-- BEGIN SCRIPTS -->
        <!-- BEGIN CORE PLUGINS -->
<script src="https://my.pelindo.co.id/myintan/application/resources/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="https://my.pelindo.co.id/myintan/application/resources/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://my.pelindo.co.id/myintan/application/resources/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="https://my.pelindo.co.id/myintan/application/resources/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.js" type="text/javascript"></script>
<script src="https://my.pelindo.co.id/myintan/application/resources/assets/global/plugins/jquery-nicescroll/jquery.nicescroll.js" type="text/javascript"></script>
<script src="https://my.pelindo.co.id/myintan/application/resources/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="https://my.pelindo.co.id/myintan/application/resources/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="https://my.pelindo.co.id/myintan/application/resources/assets/global/plugins/moment.min.js" type="text/javascript"></script>
<script src="https://my.pelindo.co.id/myintan/application/resources/assets/global/plugins/numeral.js" type="text/javascript"></script>
<script src="https://my.pelindo.co.id/myintan/application/resources/assets/global/plugins/bootstrap-toastr/toastr.js" type="text/javascript"></script>
<script src="https://my.pelindo.co.id/myintan/application/resources/assets/global/plugins/sweetalert2/sweetalert2.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="https://my.pelindo.co.id/myintan/application/resources/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<script src="https://my.pelindo.co.id/myintan/application/resources/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="https://my.pelindo.co.id/myintan/application/resources/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<script src="https://my.pelindo.co.id/myintan/application/resources/assets/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
<script src="https://my.pelindo.co.id/myintan/application/resources/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="https://my.pelindo.co.id/myintan/application/resources/assets/global/scripts/app.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script type="text/javascript">
$(document).ready(function() {
    $('#empl_code').select2({
        placeholder: "Masukkan NIPP / Nama Pegawai",
        ajax: {
            url: "https://my.pelindo.co.id/myintan/api/select2/get-pegawai",
            dataType: 'json',
            delay: 250,
            data: function (params) {
                var query = {
                    q: params.term || '',
                    page: params.page || 1
                }
                return query;
            }
        }
    });

    $(".mask_number").inputmask({
        "mask": "9",
        "repeat": 10,
        "greedy": false
    });
});
</script>
<script type="text/javascript">
var circleData = { text: null, radius: null, lat: null, lng: null, region: null };
var circlek;
var circledtaedit=null;
var drawingManager;
function initMap() {
    var map = new google.maps.Map(document.getElementById("map"), {
        center: {lat: -7.20455898888842, lng: 112.734314762056},
        zoom: 6
    });

    
        

    var savedGeofences;
    $.ajax({
        type: "GET",
        dataType: 'json',
        url: "https://my.pelindo.co.id/myintan/master/geofences",
        async: false,
        success: function(results){
            $("#delete-list").html($(results.views));
            $(".tooltips").tooltip();
            $(".tambahPegawai").on("click", function(){
                tambahPegawai($(this).data());
            });
            $(".lihatPegawai").on("click", function(){
                lihatPegawai($(this).data());
            });
            $(".deleteGeofencing").on("click", function(){
                deleteGeofencing($(this).data());
            });

            $(".make-switch").bootstrapSwitch();
            $('.make-switch').on('switchChange.bootstrapSwitch', function (e, data) {
                $(this).bootstrapSwitch('state', !data, true);
                toggleStatusGeofencing($(this).data());
            });

            $(".toggleVisibility").on("click", function() {
                toggleVisibilityGeofencing($(this).data());
            });

            savedGeofences = results.geofences;
        },
        error: function(){ }
    });

    var inputreg= document.getElementById('selectreg');
    map.controls[google.maps.ControlPosition.LEFT_TOP].push(inputreg);
    $("#selectreg").show();


    
    // console.log(savedGeofences);

    var markerIcon = {
        url: 'https://my.pelindo.co.id/myintan/application/resources/assets/global/img/marker.svg',
        scaledSize: new google.maps.Size(26, 26),
        origin: new google.maps.Point(0, 0),
        labelOrigin: new google.maps.Point(13, 38)
    };

    var geoMarker = [];
    var geoCircle = [];
    for (var geo in savedGeofences) {
        geoMarker[geo] = new google.maps.Marker({
            label: { 
                color: '#8E44AD',
                fontWeight: 'bold',
                fontSize: '14px',
                text: savedGeofences[geo].nama
            },
            position: savedGeofences[geo].center,
            map: map,
            icon: markerIcon
        });
        geoCircle[geo] = new google.maps.Circle({
            fillColor: '#FFFF00',
            fillOpacity: 0.3,
            strokeWeight: 2,
            zIndex: 1,
            map: map,
            center: savedGeofences[geo].center,
            radius: savedGeofences[geo].radius,
            id: savedGeofences[geo].id
        });
        
         google.maps.event.addListener(geoCircle[geo], 'click', function() {
            var xc=$(this)[0];
            if(circledtaedit==null && circleData.text == null && drawingManager !=null)
            {
                xc.set('editable',true);
                var inputrad = document.getElementById('tbl_edit');
                map.controls[google.maps.ControlPosition.LEFT_BOTTOM].push(inputrad);
                setCircleDataedit(xc);
                setmanualradius(xc);
                circledtaedit=xc;
                drawingManager.setOptions({
                    drawingControl: false
                });
                console.log(xc.id);
                $("#tbl_edit").show();
            }  
        });

         google.maps.event.addListener(geoCircle[geo], 'radius_changed', function(){
               
            var xc=$(this)[0];
            setCircleDataedit(xc);
           

        });

        google.maps.event.addListener(geoCircle[geo], 'center_changed', function(){
            var xc=$(this)[0];
            setCircleDataedit(xc);
            
        });

        google.maps.event.addListener(geoCircle[geo], 'rightclick', function() {
            if(circledtaedit!=null)
            {
                $(swal).on("contextmenu",function(e){
                           return false;
                }); 
                show();
            }
            
        });

    }

    function setclickgeo(value)
    {
            google.maps.event.addListener(value, 'click', function() {
            var xc=$(this)[0];
            if(circledtaedit==null && circleData.text == null && drawingManager !=null)
            {
                xc.set('editable',true);
                var inputrad = document.getElementById('tbl_edit');
                map.controls[google.maps.ControlPosition.LEFT_BOTTOM].push(inputrad);
                setCircleDataedit(xc);
                setmanualradius(xc);
                circledtaedit=xc;
                drawingManager.setOptions({
                    drawingControl: false
                });
                console.log(xc.id);
                $("#tbl_edit").show();
            }  
        });

         google.maps.event.addListener(value, 'radius_changed', function(){
               
            var xc=$(this)[0];
            setCircleDataedit(xc);
           

        });

        google.maps.event.addListener(value, 'center_changed', function(){
            var xc=$(this)[0];
            setCircleDataedit(xc);
            
        });

        google.maps.event.addListener(value, 'rightclick', function() {
            if(circledtaedit!=null)
            {
                $(swal).on("contextmenu",function(e){
                           return false;
                }); 
                show();
            }
            
        });
    }

    function filterdatageofen(id)
    {
       

        $.ajax({
        type: "GET",
        dataType: 'json',
        data: {
                 filter: id
            },
        url: "https://my.pelindo.co.id/myintan/master/geofences",
        async: true,
        success: function(results){
            $("#delete-list").html($(results.views));
            $(".tooltips").tooltip();
            $(".tambahPegawai").on("click", function(){
                tambahPegawai($(this).data());
            });
            $(".lihatPegawai").on("click", function(){
                lihatPegawai($(this).data());
            });
            $(".deleteGeofencing").on("click", function(){
                deleteGeofencing($(this).data());
            });

            $(".make-switch").bootstrapSwitch();
            $('.make-switch').on('switchChange.bootstrapSwitch', function (e, data) {
                $(this).bootstrapSwitch('state', !data, true);
                toggleStatusGeofencing($(this).data());
            });

            $(".toggleVisibility").on("click", function() {
                toggleVisibilityGeofencing($(this).data());
            });
            
            savedGeofences = results.geofences;
            setmarker();
            // console.log(savedGeofences);
            App.unblockUI();
        },
        error: function(){ 
             App.unblockUI();
        }
        });
    }

    function setmarker()
    {
         $.each(savedGeofences, function( index, value ) {
             
                  geoMarker[index] = new google.maps.Marker({
                        label: { 
                            color: '#8E44AD',
                            fontWeight: 'bold',
                            fontSize: '14px',
                            text: value.nama
                        },
                        position: value.center,
                        map: map,
                        icon: markerIcon
                    });
                    geoCircle[index] = new google.maps.Circle({
                        fillColor: '#FFFF00',
                        fillOpacity: 0.3,
                        strokeWeight: 2,
                        zIndex: 1,
                        map: map,
                        center: value.center,
                        radius: value.radius,
                        id: value.id
                    });

                    setclickgeo(geoCircle[index]);
              
            });
    }

    
    $('#kd_cabang_real').change(function() {
         App.blockUI();
        $('#kd_cabang_real').select2({
            closeOnSelect: true
        });

        $filter = $(this).val();
        $isregional=$("#kd_cabang_real").select2().find(":selected").data("id");
        $.each(savedGeofences, function( index, value ){
            geoMarker[index].setMap(null);
            geoCircle[index].setMap(null);
        });

        filterdatageofen($filter);
        
    
    });    
   


    function show(){

        swal({
            title: "Apakah Anda Yakin?",
            text: "Semua perubahan akan dibatalkan",
            type: "warning",
            showCancelButton: true
        }).then(function() {
            location.reload();
        });
    }


   //console.log(geoCircle);

    var circle;

     drawingManager = new google.maps.drawing.DrawingManager({
        drawingMode: google.maps.drawing.OverlayType.HAND,
        drawingControl: true,
        drawingControlOptions: {
            position: google.maps.ControlPosition.TOP_CENTER,
            drawingModes: ['circle']
        },
        circleOptions: {
            fillColor: '#FFFF00',
            fillOpacity: 0.3,
            strokeWeight: 2,
            clickable: false,
            editable: true,
            zIndex: 1
        }
    });
    google.maps.event.addListener(drawingManager, 'circlecomplete', onCircleComplete);

    function onCircleComplete(shape) {
        if (shape == null || (!(shape instanceof google.maps.Circle))) return;

        if (circle != null) {
            circle.setMap(null);
            circle = null;
        }

        swal({
            allowOutsideClick: false,
            allowEscapeKey: false,
            title: 'Masukkan data Geofencing',
            html:
                    '<input id="swal-input1" class="swal2-input" placeholder="Nama Geofencing" >' +
                    '<select class="swal2-input" id="swal-input2" name="kd_cabang_real"><option value="20100001">PT Pelindo Husada Citra</option><option value="20100002">Rumah Sakit PHC Surabaya</option><option value="20100003">Klinik Surabaya</option><option value="20100004">Klinik Banjarmasin</option><option value="20100005">Klinik Semarang</option><option value="20100006">Klinik PHC Tanjung Perak</option><option value="20100007">Klinik PHC Kebraon</option><option value="20100008">Klinik PHC Benowo</option><option value="20100009">Klinik PHC Banjarmasin </option><option value="20100010">Klinik PHC Pedurungan </option><option value="20100011">Klinik PHC Tanjung Emas</option><option value="20100012">OHS SP Pelindo</option><option value="20100013">OHS SP Pelindo Cabang Benoa</option><option value="20100014">OHS SP PMS</option><option value="20100015">OHS SP TPS</option><option value="20100016">OHS SP TTL</option><option value="20100017">OHS SP PERTAMINA</option><option value="20100018">OHS SP PERTAMINA LPG PERAK</option><option value="20100019">OHS SP Pelindo Cabang Gresik</option><option value="20100020">OHS SP Pelindo Cabang Banjarmasin</option><option value="20100021">OHS SP PERTAMINA TBBM SURABAYA</option><option value="20100022">OHS SP PERTAMINA DPPU</option><option value="20100023">OHS SP Pelindo Cabang Batu Licin</option><option value="20100024">OHS SP Pelindo Cabang Tanjung Wangi</option><option value="20100025">OHS SP Pelindo Cabang Sampit</option><option value="20100026">OHS SP Pelindo Cabang Kumai</option><option value="20100027">OHS SP Pelindo Cabang Lembar</option><option value="20100028">OHS SP Pelindo Cabang Kupang</option><option value="20100029">OHS SP Pelindo Cabang Benoa</option><option value="20100030">OHS SP Pelindo Cabang Tanjung Perak</option><option value="20100031">OHS SP Pelindo Cabang Semarang</option><option value="20100032">OHS SP Pelindo Cabang Cilacap</option><option value="20100033">OHS SP Pelindo Cabang Tanjung Emas</option><option value="20100034">OHS SP BJTI</option><option value="20100035">OHS SP PERTAMINA VETERAN DAN POLENG</option><option value="20100036">OHS SP TPS SEMARANG</option><option value="20100037">OHS Jawa Timur &amp; Bali</option></select>',
            
            preConfirm: function(text) {
                return new Promise((resolve) => {
                    var nama = document.getElementById('swal-input1').value;
                    if(nama){
                       resolve();
                       return [
                          document.getElementById('swal-input1').value,
                          document.getElementById('swal-input2').value
                        ];
                    }
                    else {
                        toastr["error"]("Nama geofencing tidak boleh kosong.", "Error!");
                    }
                })
            }

        }).then(function(result) { 
            toastr.options = {
                "positionClass": "toast-bottom-center"
            }
            circleData.text =  document.getElementById('swal-input1').value;
            circleData.region =  document.getElementById('swal-input2').value;
            //alert( document.getElementById('swal-input1').value);
            //toastr["info"]("Radius: " + Math.round(circle.getRadius()) + "m");
           
            circlek=circle; 
            var inputrad = document.getElementById('tbl_edit');
            map.controls[google.maps.ControlPosition.LEFT_BOTTOM].push(inputrad);
            setCircleDataedit(circle);
            setmanualradius(circle);
            $("#tbl_edit").show();
            $("#action").show();

            
        }).catch(swal.noop);
        $(".swal2-spacer").hide();

        drawingManager.setDrawingMode(google.maps.drawing.OverlayType.HAND);
        circle = shape;
        getCircleData(circle);
        google.maps.event.addListener(circle, 'center_changed', function(){
            setCircleDataedit(circle);
            getCircleData(circle);

        });
        google.maps.event.addListener(circle, 'radius_changed', function(){
            toastr.options = {
                "positionClass": "toast-bottom-center"
            }

            //toastr["info"]("Radius: " + Math.round(circle.getRadius()) + "m");
            //$('#rdus').val(Math.round(circle.getRadius()));
            setCircleDataedit(circle);
            getCircleData(circle);
        });
    }

    function getCircleData(circle) {
        circleData.radius = circle.getRadius();
        circleData.lat = circle.getCenter().lat();
        circleData.lng = circle.getCenter().lng();
    }
    function setCircleDataedit(circle) {
        $('#rdus').val(Math.round(circle.getRadius()));
        $('#lt').val(circle.getCenter().lat());
        $('#lg').val(circle.getCenter().lng());
    }
        


    setsearchbox(map);
    
    drawingManager.setMap(map);
    



}

function setsearchbox(map)
{
    var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
        $("#pac-input").show();
        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });

}


$("#saveGeofencing").on("click", function(){
    if(circledtaedit !=null)
    {
        var paramss={
        radius: Math.round(circledtaedit.getRadius()),
        lat: circledtaedit.getCenter().lat(),
        lng: circledtaedit.getCenter().lng(),
        id: circledtaedit.id
        };
        saveEditGeofencing(paramss);
        console.log(paramss);
    }else{
        saveGeofencing(circleData);
    }

    

});


function setmanualradius(circle){
    $('#rdus').keyup(function() {

        var rdsdata=parseInt( $(this).val());
        if(!isNaN(rdsdata))
        {
            circle.setRadius(rdsdata);
        }
        //Circle.setRadius(5000);

    });
}

// SIMPAN GEOFENCING KE DATABASE
function saveGeofencing(circleData) {
     console.log(circleData);
    if(circleData.text == null || circleData.radius == null || circleData.lat == null || circleData.lng == null) {
        toastr["error"]("Data yang dimasukkan tidak boleh kosong.", "Error!");
        return;
    }
    else {
        swal({
            title: "Apakah Anda Yakin?",
            text: "Menambahkan data geofencing",
            type: "warning",
            showCancelButton: true
        }).then(function() {
            toastr.options.escapeHtml = true;
            App.blockUI({
                target: '#mapPortlet'
            });
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "https://my.pelindo.co.id/myintan/master/geofences",
                headers: {
                    'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr("content"),
                },
                data: circleData,
                success: function(data) {
                    circleData.text = circleData.radius = circleData.lat = circleData.lng = null;
                    //initMap();
                    toastr['success'](data, 'Sukses!');
                    App.unblockUI("#mapPortlet");
                    location.reload();
                },
                error: function(xhr) { 
                    toastr['error'](JSON.parse(xhr.responseText), 'Gagal!');
                    App.unblockUI("#mapPortlet");
                }
            });
        }).catch(swal.noop);
    }
}

// TAMBAH PEGAWAI
function tambahPegawai(data) {
    if(data.geoId == null || data.geoId == "" || data.geoId == undefined) {
        toastr["error"]("Data yang dimasukkan tidak boleh kosong.", "Error!");
        return;
    }
    else {
        $("#hidden_add_geo_id").val(data.geoId);
        $('#modalsAdd').modal('show');
        // console.log(data.geoId);
    }
}

// LIHAT PEGAWAI
function lihatPegawai(p_data) {
    if(p_data.geoId == null || p_data.geoId == "" || p_data.geoId == undefined) {
        toastr["error"]("Data yang dimasukkan tidak boleh kosong.", "Error!");
        return;
    }
    else {
        $("#table1").DataTable({
            destroy: true,
            processing: true,
            serverSide: true,
            ajax: {
                url: 'https://my.pelindo.co.id/myintan/master/user-geofences',
                data: function (d) {
                    d.search_geo_id = p_data.geoId;
                }
            },
            columns: [
                {data: 'empl_code', name: 'user_geofences.empl_code'},
                {data: 'nama', name: 'vw_cico_pegawai.nama'},
                {data: 'geo_nama', name: 'geofences.geo_nama', defaultContent: ''},
                {data: 'action', name: 'action', sClass: 'text-center', orderable: false, searchable: false}
            ],
            initComplete: function () {
                this.api().columns().every(function (index) {
                    var column = this;
                    var colCount = this.columns().nodes().length - 1;
                    if(index !== colCount){
                        var input = document.createElement("input");
                        $(input).addClass('form-control');
                        $(input).appendTo($(column.footer()).empty())
                        .on('change', function () {
                            column.search($(this).val(), false, false, true).draw();
                        });
                    }
                });
                $(".dataTables_length select").select2();
            }
        });
        $('#table1 tbody').on('click', 'tr button.dt-btn', function(e) {
            e.preventDefault();
            var form = $(this).parents('form');
            $(form).find(".hidden_delete_geofences").val("true");
            swal({
                title: "Apakah Anda Yakin?",
                text: $(this).data("swa-text"),
                type: "warning",
                showCancelButton: true
            }).then(function() {
                App.blockUI();
                form.submit();
            }).catch(swal.noop);
        });
        $('#modalsLihat').modal('show');
    }
}

// HAPUS GEOFENCING
function deleteGeofencing(data) {
    // console.log(data);
    if(data.geoId == null || data.geoId == "" || data.geoId == undefined) {
        toastr["error"]("Data yang dimasukkan tidak boleh kosong.", "Error!");
        return;
    }
    else {
        swal({
            title: "Apakah Anda Yakin?",
            text: data.swaText,
            type: "warning",
            showCancelButton: true
        }).then(function() {
            toastr.options.escapeHtml = true;
            App.blockUI({
                target: '#mapPortlet'
            });
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "https://my.pelindo.co.id/myintan/master/geofences" + "/" + data.geoId,
                data: {
                    _method: "delete",
                    _token: $("meta[name='csrf-token']").attr("content")
                },
                success: function(data) {
                    // console.log(data);
                    
                    toastr['success'](data, 'Sukses!');
                    App.unblockUI("#mapPortlet");
                    //initMap();
                    location.reload();
                },
                error: function(xhr) { 
                    toastr['error'](JSON.parse(xhr.responseText), 'Gagal!');
                    App.unblockUI("#mapPortlet");
                }
            });
        }).catch(swal.noop);
    }
}

// TOGGLE STATUS GEOFENCING
function toggleStatusGeofencing(data) {
    // console.log(data);
    if(data.geoId == null || data.geoId == "" || data.geoId == undefined) {
        toastr["error"]("Data yang dimasukkan tidak boleh kosong.", "Error!");
        return;
    }
    else {
        swal({
            title: "Apakah Anda Yakin?",
            text: data.swaText,
            type: "warning",
            showCancelButton: true
        }).then(function() {
            // console.log(data);
            toastr.options.escapeHtml = true;
            App.blockUI({
                target: '#mapPortlet'
            });
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "https://my.pelindo.co.id/myintan/master/geofences/toggle",
                data: {
                    geo_id: data.geoId,
                    _token: $("meta[name='csrf-token']").attr("content")
                },
                success: function(data) {
                    // console.log(data);
                    toastr['success'](data, 'Sukses!');
                    App.unblockUI("#mapPortlet");
                    initMap();
                    // location.reload();
                },
                error: function(xhr) { 
                    toastr['error'](JSON.parse(xhr.responseText), 'Gagal!');
                    App.unblockUI("#mapPortlet");
                }
            });
        }).catch(swal.noop);
    }
}

// TOGGLE VISIBILITY GEOFENCING
function toggleVisibilityGeofencing(data) {
    if(data.geoId == null || data.geoId == "" || data.geoId == undefined) {
        toastr["error"]("Data yang dimasukkan tidak boleh kosong.", "Error!");
        return;
    }
    else {
        swal({
            title: "Apakah Anda Yakin?",
            text: data.swaText,
            type: "warning",
            showCancelButton: true
        }).then(function() {
            toastr.options.escapeHtml = true;
            App.blockUI({
                target: '#mapPortlet'
            });
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "https://my.pelindo.co.id/myintan/master/geofences/toggleVisibility",
                data: {
                    geo_id: data.geoId,
                    _token: $("meta[name='csrf-token']").attr("content")
                },
                success: function(data) {
                    // console.log(data);
                    toastr['success'](data, 'Sukses!');
                    App.unblockUI("#mapPortlet");
                    initMap();
                },
                error: function(xhr) { 
                    toastr['error'](JSON.parse(xhr.responseText), 'Gagal!');
                    App.unblockUI("#mapPortlet");
                }
            });
        }).catch(swal.noop);
    }
}


function saveEditGeofencing(prams) {
    // console.log(circleData);
    if(prams==null) {
        toastr["error"]("Data yang dimasukkan tidak boleh kosong.", "Error!");
        return;
    }
    else {
        
        swal({
            title: "Apakah Anda Yakin?",
            text: "Data geofencing akan diubah",
            type: "warning",
            showCancelButton: true
        }).then(function() {
            toastr.options.escapeHtml = true;
            App.blockUI({
                target: '#mapPortlet'
            });
            console.log(prams);
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "https://my.pelindo.co.id/myintan/master/geofences" + "/" + prams.id,
                 data: {
                    _method: "PATCH",
                    _token: $("meta[name='csrf-token']").attr("content"),
                    radius: prams.radius,
                    lat: prams.lat,
                    lng: prams.lng
                },
                success: function(data) {
                    toastr['success'](data, 'Sukses!');
                    App.unblockUI("#mapPortlet");
                    location.reload();
                },
                error: function(xhr) { 
                    toastr['error'](JSON.parse(xhr.responseText), 'Gagal!');
                    App.unblockUI("#mapPortlet");
                }
            });
        }).catch(swal.noop);
    }
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCpQckx1IbiCkwJP8S1Y7WqwNFzNW5re8&libraries=drawing,places&callback=initMap" async defer></script>
<script src="https://my.pelindo.co.id/myintan/application/resources/assets/pages/scripts/sweetalert2-scripts.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="https://my.pelindo.co.id/myintan/application/resources/assets/layouts/layout/scripts/layout.js" type="text/javascript"></script>
<script src="https://my.pelindo.co.id/myintan/application/resources/assets/layouts/layout/scripts/set-layout.js" type="text/javascript"></script>
<script src="https://my.pelindo.co.id/myintan/application/resources/assets/layouts/layout/scripts/demo.js" type="text/javascript"></script>
<script src="https://my.pelindo.co.id/myintan/application/resources/assets/layouts/global/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="https://my.pelindo.co.id/myintan/application/resources/assets/layouts/global/scripts/quick-nav.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
        
<script type="text/javascript">
$(document).ready(function(){
});
</script>        <!-- END SCRIPTS -->
    </body>

</html>