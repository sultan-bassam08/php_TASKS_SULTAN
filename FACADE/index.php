   <?php
   // Subsystems
    class Amplifier {
        public function on() {
            echo "Amplifier is on.<br>";
        }
    }

    class Projector {
        public function on() {
            echo "Projector is on.<br>";
        }
    }

    class Lights {
        public function dim() {
            echo "Lights are dimmed.<br>";
        }
    }

    class Screen {
        public function down() {
            echo "Screen is down.<br>";
        }
    }

    class HomeTheaterFacade {
        private $amplifier;
        private $projector;
        private $lights;
        private $screen;

        public function __construct($amp, $proj, $lights, $screen) {
            $this->amplifier = $amp;
            $this->projector = $proj;
            $this->lights = $lights;
            $this->screen = $screen;
        }

        public function watchMovie() {
            echo "Get ready to watch a movie...\n";
            $this->amplifier->on();
            $this->projector->on();
            $this->lights->dim();
            $this->screen->down();
        }
    }

    $amplifier = new Amplifier();
    $projector = new Projector();
    $lights = new Lights();
    $screen = new Screen();

    $homeTheater = new HomeTheaterFacade($amplifier, $projector, $lights, $screen);
    $homeTheater->watchMovie();
    ?>