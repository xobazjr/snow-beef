<?php
    class MenuItem {
        public $label;
        public $title;
        public $description;
        public $imageUrl;

        public function __construct($label, $title, $description, $imageUrl) {
            $this->label = $label;
            $this->title = $title;
            $this->description = $description;
            $this->imageUrl = $imageUrl;
        }
    }

    $menus = [
        new MenuItem(
            "BEST SELLER", 
            "Steak Tenderloin", 
            '"Hand-pressed duck, tart cherry réduction, silky parsnip"', 
            "assets/images/menu/rib-eye.png"
        ),
        new MenuItem(
            "BEST SELLER", 
            "Rib eye Australia", 
            '"Hand-pressed duck, tart cherry réduction, silky parsnip"', 
            "assets/images/menu/rib-eye.png"
        ),
        new MenuItem(
            "BEST SELLER", 
            "Steak Tenderloin", 
            '"Hand-pressed duck, tart cherry réduction, silky parsnip"', 
            "assets/images/menu/rib-eye.png"
        ),
        new MenuItem(
            "BEST SELLER", 
            "Rib eye Australia", 
            '"Hand-pressed duck, tart cherry réduction, silky parsnip"', 
            "assets/images/menu/rib-eye.png"
        ),
        new MenuItem(
            "BEST SELLER", 
            "Steak Tenderloin", 
            '"Hand-pressed duck, tart cherry réduction, silky parsnip"', 
            "assets/images/menu/rib-eye.png"
        ),
        new MenuItem(
            "BEST SELLER", 
            "Steak Tenderloin", 
            '"Hand-pressed duck, tart cherry réduction, silky parsnip"', 
            "assets/images/menu/rib-eye.png"
        ),
        new MenuItem(
            "BEST SELLER", 
            "Steak Tenderloin", 
            '"Hand-pressed duck, tart cherry réduction, silky parsnip"', 
            "assets/images/menu/rib-eye.png"
        ),

    ];
?>