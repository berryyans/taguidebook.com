<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login - Villa</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/public/css/bootstrap.min.css">
     <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>/public/images/golkar.png"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/public/css/login-page.css">
    <style type="text/css">
        #particles-js{
        width: 100%;
        height: 100%;
        background-color: #1b79c3;
        background-image:
            linear-gradient(
              #1b79c3, #000000
        );
        background-size: cover;
        background-position: 50% 50%;
        position: fixed;
        top: 0px;
    }
    </style>
</head>

<body>
<div id="particles-js"></div>
<div class="container overlay">
    <?php echo form_open('dasboard_villa/verifyLogin', 'class="form-signin text-center"'); ?>
    <img src="<?php echo base_url(); ?>/public/images/logo.png" style="margin-top: -10px; width: 100%; margin-bottom: 15px;">
    <h3>Login as villa</h3>
    <label for="username" class="sr-only">Email address</label>
    <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
    <div class="text-center">
        <?php echo $image;?>
    </div>
    <br>
    <input type="text" id="captcha" name="captcha" class="form-control" placeholder="Captcha" required>
    <br>
    <button class="btn btn-lg btn-success btn-block" type="submit">Sign in</button>
    <br>
    <?php echo validation_errors(); ?>
    </form>
</div> <!-- /container -->
<Script src="<?php echo base_url(); ?>/public/js/particles.min.js"></Script>
<script>
    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 150,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#ffffff"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
            },
            "opacity": {
                "value": 0.5,
                "random": false,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            },
            "size": {
                "value": 3,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 40,
                    "size_min": 0.1,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 6,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": "grab"
                },
                "onclick": {
                    "enable": true,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 140,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });


    /* ---- stats.js config ---- */

    var count_particles, stats, update;
    stats = new Stats;
    stats.setMode(0);
    stats.domElement.style.position = 'absolute';
    stats.domElement.style.left = '0px';
    stats.domElement.style.top = '0px';
    document.body.appendChild(stats.domElement);
    count_particles = document.querySelector('.js-count-particles');
    update = function() {
        stats.begin();
        stats.end();
        if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
            count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
        }
        requestAnimationFrame(update);
    };
    requestAnimationFrame(update);
</script>
</body>
</html>
