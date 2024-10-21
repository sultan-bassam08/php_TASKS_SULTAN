   <?php
   //The Facade pattern is a structural design pattern. 
   //It provides a simplified interface to a complex subsystem 

   //It's commonly used to:

//     ⁂⁂⁂⁂⁂⁂⁂⁂⁂⁂⁂⁂⁂⁂⁂⁂⁂⁂⁂⁂⁂⁂⁂⁂

    // 1 - Reduce dependencies between subsystems.
    // 2 - Simplify interactions with a complex system.
    // 3 -Provide a clean and easy-to-use interface for multiple classes or components.


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
            echo "Get ready to watch a movie............................."  . "<br>";
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

    